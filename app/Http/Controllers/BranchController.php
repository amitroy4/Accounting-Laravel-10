<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branches = Branch::all();
        return view('admin.configure.branch.branch',compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $branches = Branch::where('status', 1)->get();
        return view('admin.configure.branch.create_branch',compact('branches'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Validation
        $validatedData = $request->validate([
            'branch_name' => 'required|string|max:255',
            'branch_code' => 'nullable|string|max:255',
            'parent_branch' => 'nullable|string|max:255',
            'opening_time' => 'nullable|max:255',
            'closing_time' => 'nullable|max:255',
            'branch_address' => 'required|string|max:500',
            'branch_district' => 'nullable|string|max:255',
            'branch_zipcode' => 'nullable|string|max:10',
            'contact_person_name' => 'nullable|string|max:15',
            'branch_contact_number' => 'nullable|string|max:15',
            'branch_land_line' => 'nullable|string|max:15',
            'branch_whatsapp' => 'nullable|string|max:15',
            'branch_email' => 'nullable|email|max:255',
            'branch_logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'nullable|boolean',

        ]);

        // dd($validatedData);


        // Handle file upload
        if ($request->hasFile('branch_logo')) {
            $validatedData['branch_logo'] = $request->file('branch_logo')->store('uploads/branch_logos', 'public');
        }

        // Store the data in the database
        Branch::create($validatedData);

        // Redirect back with success message
        return redirect()->route('branch.index')->with('success', 'Branch information stored successfully!');

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
        // Find the branch by its ID
        $branch = Branch::findOrFail($id);
        // Get all sub-branches where parent_branch is equal to the provided ID
        $subbranches = Branch::where('parent_branch', $id)->pluck('id');

        // Get all branches where status is 1, excluding the main branch and its sub-branches
        $branches = Branch::where('status', 1)
                        ->where('id', '!=', $id) // Exclude the main branch itself
                        ->whereNotIn('id', $subbranches) // Exclude sub-branches
                        ->get();

        // Return the view with the company data
        return view('admin.configure.branch.edit_branch', compact('branch','branches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        // Validate the incoming request
        $request->validate([
            'branch_name' => 'required|string|max:255',
            'branch_code' => 'nullable|string|max:255',
            'parent_branch' => 'nullable|string|max:255',
            'opening_time' => 'nullable|max:255',
            'closing_time' => 'nullable|max:255',
            'branch_address' => 'required|string|max:500',
            'branch_district' => 'nullable|string|max:255',
            'branch_zipcode' => 'nullable|string|max:10',
            'contact_person_name' => 'nullable|string|max:15',
            'branch_contact_number' => 'nullable|string|max:15',
            'branch_land_line' => 'nullable|string|max:15',
            'branch_whatsapp' => 'nullable|string|max:15',
            'branch_email' => 'nullable|email|max:255',
            'branch_logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'nullable|boolean',
        ]);

        // Find the company by ID
        $branch = Branch::findOrFail($id);

        // Update the company fields
        $branch->branch_name = $request->branch_name;
        $branch->branch_code = $request->branch_code;
        $branch->parent_branch = $request->parent_branch;
        $branch->opening_time = $request->opening_time;
        $branch->closing_time = $request->closing_time;
        $branch->branch_address = $request->branch_address;
        $branch->branch_district = $request->branch_district;
        $branch->branch_zipcode = $request->branch_zipcode;
        $branch->contact_person_name = $request->contact_person_name;
        $branch->branch_contact_number = $request->branch_contact_number;
        $branch->branch_land_line = $request->branch_land_line;
        $branch->branch_whatsapp = $request->branch_whatsapp;
        $branch->branch_email = $request->branch_email;
        $branch->status = $request->status;

        if ($request->branch_logo) {
            if ($branch->branch_logo) {
                // Delete the image from storage
                Storage::disk('public')->delete($branch->branch_logo);
            }
            // Store the new logo file using the pattern you provided
            $branch->branch_logo = $request->file('branch_logo')->store('uploads/branch_logos', 'public');
        }

        // Save the updated branch data
        $branch->save();

        // Redirect back with a success message
        return redirect()->route('branch.index')->with('success', 'Branch updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the Branch by ID
        $branch = Branch::findOrFail($id);

        // Delete the company logo if it exists
        if ($branch->branch_logo) {
            // Delete the image from storage
            Storage::disk('public')->delete($branch->branch_logo);
        }

        // Delete the branch record from the database
        $branch->delete();

        // Redirect back with a success message
        return redirect()->route('branch.index')->with('success', 'Branch and its logo deleted successfully!');
    }

    public function activeordeactive(string $id)
    {
        $branch = Branch::findOrFail($id);

        $branch->status = !$branch->status;
        $branch->save();

        return redirect()->back()->with('success', 'Status Changed successfully!');

    }
}
