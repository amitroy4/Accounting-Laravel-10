<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\CompanyWiseBranch;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all()->reverse();
        $branches = Branch::where('parent_branch', null)
                    ->whereDoesntHave('companyWiseBranch')
                    ->get();

        return view('admin.configure.company.company', compact('companies','branches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.configure.company.create_company');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Validation
        $validatedData = $request->validate([
            'company_name' => 'required|string|max:255',
            'company_short_name' => 'nullable|string|max:255',
            'company_address' => 'required|string|max:500',
            'company_district' => 'nullable|string|max:255',
            'company_zip_code' => 'nullable|string|max:10',
            'company_code' => 'nullable|string|max:255',
            'company_registration_number' => 'nullable|string|max:255',
            'company_logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'company_contact_number' => 'nullable|string|max:15',
            'company_land_line' => 'nullable|string|max:15',
            'company_whatsapp_number' => 'nullable|string|max:15',
            'company_email' => 'nullable|email|max:255',
            'company_website' => 'nullable|max:255',
            'status' => 'nullable|boolean',

        ]);

        // dd($validatedData);


        // Handle file upload
        if ($request->hasFile('company_logo')) {
            $validatedData['company_logo'] = $request->file('company_logo')->store('uploads/company_logos', 'public');
        }

        // Store the data in the database
        Company::create($validatedData);

        // Redirect back with success message
        return redirect()->route('company.index')->with('success', 'Company information stored successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
            // Find the company by its ID
        $company = Company::findOrFail($id);

        // Return the view with the company data
        return view('admin.configure.company.edit_company', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'company_name' => 'required|string|max:255',
            'company_short_name' => 'nullable|string|max:255',
            'company_address' => 'required|string|max:500',
            'company_district' => 'nullable|string|max:255',
            'company_zip_code' => 'nullable|string|max:10',
            'company_code' => 'nullable|string|max:255',
            'company_registration_number' => 'nullable|string|max:255',
            'company_logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'company_contact_number' => 'nullable|string|max:15',
            'company_land_line' => 'nullable|string|max:15',
            'company_whatsapp_number' => 'nullable|string|max:15',
            'company_email' => 'nullable|email|max:255',
            'company_website' => 'nullable|max:255',
        ]);

        // Find the company by ID
        $company = Company::findOrFail($id);

        // Update the company fields
        $company->company_name = $request->company_name;
        $company->company_short_name = $request->company_short_name;
        $company->company_address = $request->company_address;
        $company->company_district = $request->company_district;
        $company->company_zip_code = $request->company_zip_code;
        $company->company_code = $request->company_code;
        $company->company_registration_number = $request->company_registration_number;
        $company->company_contact_number = $request->company_contact_number;
        $company->company_land_line = $request->company_land_line;
        $company->company_whatsapp_number = $request->company_whatsapp_number;
        $company->company_email = $request->company_email;
        $company->status = $request->status;

        if ($request->company_logo) {
            if ($company->company_logo) {
                // Delete the image from storage
                Storage::disk('public')->delete($company->company_logo);
            }
            // Store the new logo file using the pattern you provided
            $company->company_logo = $request->file('company_logo')->store('uploads/company_logos', 'public');
        }

        // Save the updated company data
        $company->save();

        // Redirect back with a success message
        return redirect()->route('company.index')->with('success', 'Company updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the company by ID
        $company = Company::findOrFail($id);

        // Delete the company logo if it exists
        if ($company->company_logo) {
            // Delete the image from storage
            Storage::disk('public')->delete($company->company_logo);
        }

        // Delete the company record from the database
        $company->delete();

        // Redirect back with a success message
        return redirect()->route('company.index')->with('success', 'Company and its logo deleted successfully!');
    }

    public function activeordeactive(string $id)
    {
        $company = Company::findOrFail($id);

        $company->status = !$company->status;
        $company->save();

        return redirect()->back()->with('success', 'Status Changed successfully!');

    }

    public function getCompanyBranches(Company $company)
    {
        // Fetch branches associated with the company
        $branches = $company->branches()->get();

        // Return the branches as a JSON response
        return response()->json(['branches' => $branches]);
    }


    public function companywisebranch(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'company_id' => 'required|exists:companies,id',
            'branch_id' => 'required|array', // Expect an array of branch IDs
            'branch_id.*' => 'exists:branches,id', // Validate each branch ID exists
        ]);

        // Loop through each branch ID and associate it with the company
        foreach ($validated['branch_id'] as $branchId) {
            CompanyWiseBranch::firstOrCreate(
                [
                    'company_id' => $validated['company_id'],
                    'branch_id' => $branchId, // Matching condition
                ]
            );
        }


        return redirect()->back()->with('success', 'Branch assigned to a company successfully.');
    }
}
