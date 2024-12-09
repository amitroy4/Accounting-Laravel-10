<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\FundingOrganization;
use Illuminate\Support\Facades\Storage;
use App\Models\FundingOrganizationDocument;
use Monarobase\CountryList\CountryListFacade as Countries;

class FundingOrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $countries = Countries::getList('en');
        $funding_organizations = FundingOrganization::all();
        return view('admin.configure.funding_organization.index',compact('funding_organizations','countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Countries::getList('en');
        return view('admin.configure.funding_organization.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Debugging request

        // dd($request->all());

        // Validate the form data
        $validatedData = $request->validate([
            'funding_organization_name' => 'required|string|max:255',
            'organization_address' => 'required|string|max:500',
            'organization_code' => 'nullable|string|max:50',
            'country' => 'nullable|string|max:10',
            'donor_type' => 'nullable|string|max:10',
            'organization_contact_number' => 'nullable|string|max:15',
            'organization_email' => 'nullable|email|max:255',
            'organization_website' => 'nullable|string|max:255',
            'status' => 'nullable|boolean',
            'contact_person_name' => 'nullable|string|max:255',
            'contact_person_designation' => 'nullable|string|max:255',
            'contact_person_number' => 'nullable|string|max:15',
            'contact_person_whatsapp_number' => 'nullable|string|max:15',
            'contact_person_email' => 'nullable|email|max:255',
            'organization_documents.*' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048', // Individual document validation
        ]);

        // dd($validatedData);

        // Save validated data to the `funding_organizations` table
        $fundingOrganization = FundingOrganization::create([
            'funding_organization_name' => $validatedData['funding_organization_name'],
            'organization_address' => $validatedData['organization_address'],
            'organization_code' => $validatedData['organization_code'] ?? null,
            'country' => $validatedData['country'] ?? null,
            'donor_type' => $validatedData['donor_type'] ?? null,
            'organization_contact_number' => $validatedData['organization_contact_number'] ?? null,
            'organization_email' => $validatedData['organization_email'] ?? null,
            'organization_website' => $validatedData['organization_website'] ?? null,
            'status' => $validatedData['status'] ?? null,
            'contact_person_name' => $validatedData['contact_person_name'] ?? null,
            'contact_person_designation' => $validatedData['contact_person_designation'] ?? null,
            'contact_person_number' => $validatedData['contact_person_number'] ?? null,
            'contact_person_whatsapp_number' => $validatedData['contact_person_whatsapp_number'] ?? null,
            'contact_person_email' => $validatedData['contact_person_email'] ?? null,
        ]);

        // Handle file uploads
        if ($request->hasFile('organization_documents')) {
            foreach ($request->file('organization_documents') as $file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/fundingorganizationdocuments', $fileName, 'public');

                // Save file information in the `funding_organization_documents` table
                FundingOrganizationDocument::create([
                    'funding_organization_id' => $fundingOrganization->id, // Use the ID of the saved funding organization
                    'file_name' => $fileName,
                    'file_path' => $filePath,
                ]);
            }
        }

        return redirect()->route('funding_organization.index')->with('success', 'Data saved successfully!');
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
        $countries = Countries::getList('en');
        $fundingorganization = FundingOrganization::with('fundingorganizationdocument')->findOrFail($id);
        $documents = FundingOrganizationDocument::where('funding_organization_id', $id)->get();

        return view('admin.configure.funding_organization.edit',compact('countries','fundingorganization','documents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'funding_organization_name' => 'required|string|max:255',
            'organization_address' => 'required|string|max:500',
            'organization_code' => 'nullable|string|max:50',
            'country' => 'nullable|string|max:10',
            'donor_type' => 'nullable|string|max:10',
            'organization_contact_number' => 'nullable|string|max:15',
            'organization_email' => 'nullable|email|max:255',
            'organization_website' => 'nullable|string|max:255',
            'status' => 'nullable|boolean',
            'contact_person_name' => 'nullable|string|max:255',
            'contact_person_designation' => 'nullable|string|max:255',
            'contact_person_number' => 'nullable|string|max:15',
            'contact_person_whatsapp_number' => 'nullable|string|max:15',
            'contact_person_email' => 'nullable|email|max:255',
        ]);

        // Find the FundingOrganization by its ID
        $fundingOrganization = FundingOrganization::findOrFail($id);

        // Update the funding organization data with validated input
        $fundingOrganization->update($validatedData);

        // Redirect back with a success message
        return redirect()->route('funding_organization.index')->with('success', 'Funding Organization updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       // Find the files with its images
       $files = FundingOrganization::with('fundingOrganizationdocument')->findOrFail($id);

       // Delete each file
       foreach ($files->fundingOrganizationdocument as $file) {
           if (Storage::disk('public')->exists($file->file_path)) {
               Storage::disk('public')->delete($file->file_path);
           }
       }

       // Delete parent
       $files->fundingOrganizationdocument()->delete();

       // Delete
       $files->delete();

       return redirect()->route('funding_organization.index')->with('success', 'Product deleted successfully.');
    }

    public function activeordeactive(string $id)
    {
        $funding_organization = FundingOrganization::findOrFail($id);

        $funding_organization->status = !$funding_organization->status;
        $funding_organization->save();

        return redirect()->back()->with('success', 'Status Changed successfully!');

    }

    public function filesdelete(string $id)
    {
        // Find the file by ID
        $file = FundingOrganizationDocument::findOrFail($id);

        // Ensure the file path exists before attempting to delete
        if (!empty($file->file_path) && Storage::disk('public')->exists($file->file_path)) {
            // Delete the file from storage
            Storage::disk('public')->delete($file->file_path);
        }

        // Optionally, you may want to delete the record from the database if required
        $file->delete();

        // Return success response for AJAX
        return response()->json(['message' => 'File deleted successfully.']);
    }

}
