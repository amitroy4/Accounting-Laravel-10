<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Models\CurrencyType;
use Illuminate\Http\Request;
use App\Models\ProjectFunding;
use App\Models\ProjectCategory;
use App\Models\FundingOrganization;
use App\Http\Controllers\Controller;
use App\Models\ProjectApprovalDocument;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects =Project::all();
        return view('admin.configure.project.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project_categories = ProjectCategory::where('status',1)->get();
        $currency_types = CurrencyType::where('status',1)->get();
        $funding_organizations = FundingOrganization::where('status',1)->get();
        $projects =Project::where('status',1)->get();
        return view('admin.configure.project.create',compact('project_categories','currency_types','funding_organizations','projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Validate incoming data
    $validatedData = $request->validate([
        'project_name' => 'required|string|max:255',
        'project_short_name' => 'nullable|string|max:255',
        'project_code' => 'nullable|string|max:255',
        'parent_project_id' => 'nullable|integer',
        'project_area' => 'nullable|string|max:255',
        'project_category' => 'nullable|string|max:255',
        'project_budget' => 'nullable|numeric',
        'currency_type' => 'nullable|string|max:255',
        'is_core' => 'required|boolean',
        'status' => 'required|boolean',
        'project_start_date' => 'nullable|date',
        'project_end_date' => 'nullable|date',
        'approval_type' => 'nullable|string|max:255',
        'project_approval_authority' => 'nullable|string|max:255',
        'approval_reference_number' => 'nullable|string|max:255',
        'approval_date' => 'nullable|date',
    ]);

    // Create a new project record
    $project = Project::create($validatedData);


    if($request->funding_organization_id){
        foreach ($request->funding_organization_id as $key => $organizationId) {
            ProjectFunding::create([
                'project_id' => $project->id,
                'funding_organization_id' => $organizationId,
                'funded_percentage' => $request->funded_percentage[$key],
                'funded_amount' => $request->funded_amount[$key],
            ]);
        }
    }


     // Handle file uploads
     if ($request->hasFile('approval_documents')) {
        foreach ($request->file('approval_documents') as $file) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/projectapprovaldocuments', $fileName, 'public');

            // Save file information in the `approval_documents` table
            ProjectApprovalDocument::create([
                'project_id' => $project->id,
                'file_name' => $fileName,
                'file_path' => $filePath,
            ]);
        }
    }


    // Redirect or return a response
    return redirect()->route('project.index')->with('success', 'Project created successfully!');
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

    public function activeordeactive(string $id)
    {
        $project = Project::findOrFail($id);

        $project->status = !$project->status;
        $project->save();

        return redirect()->back()->with('success', 'Status Changed successfully!');

    }
}
