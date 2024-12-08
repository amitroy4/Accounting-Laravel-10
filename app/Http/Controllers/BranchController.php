<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.configure.branch.branch');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.configure.branch.create_branch');
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
            'branchId' => 'required|string|max:255',
            'main_branch' => 'nullable|string|max:255',
            'opening_time' => 'required|max:255',
            'closing_time' => 'required|max:255',
            'branch_address' => 'nullable|string|max:500',
            'branch_district' => 'nullable|string|max:255',
            'branch_zipcode' => 'nullable|string|max:10',
            'contact_person_name' => 'required|string|max:15',
            'branch_contact_number' => 'required|string|max:15',
            'branch_land_line' => 'nullable|string|max:15',
            'branch_whatsapp' => 'required|string|max:15',
            'branch_email' => 'required|email|max:255',
            'branch_logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
