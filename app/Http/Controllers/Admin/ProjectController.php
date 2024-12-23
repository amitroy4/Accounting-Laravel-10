<?php

namespace App\Http\Controllers\Admin;

use App\Models\Branch;
use App\Models\Project;
use App\Models\CurrencyType;
use Illuminate\Http\Request;
use App\Models\ChartOfAccount;
use App\Models\ProjectFunding;
use App\Models\ProjectCategory;
use App\Models\FundingOrganization;
use App\Http\Controllers\Controller;
use App\Models\ProjectApprovalDocument;
use Illuminate\Support\Facades\Storage;

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
        $branches = Branch::where('status', 1)->get();
        return view('admin.configure.project.create',compact('project_categories','currency_types','funding_organizations','projects','branches'));
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
            'branch_id' => 'nullable|exists:branches,id',
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
        $project = Project::with('approvalDocuments')->findOrFail($id);
        $documents = ProjectApprovalDocument::where('project_id', $id)->get();
        $projects = Project::wherenot('id',$id)->where('status',1)->get();

        $project_categories = ProjectCategory::where('status',1)->get();
        $currency_types = CurrencyType::where('status',1)->get();
        $funding_organizations = FundingOrganization::where('status',1)->get();

        $project_fundings = ProjectFunding::where('project_id',$id)->get();
        $branches = Branch::where('status', 1)->get();

        // dd($project_fundings);

        return view('admin.configure.project.edit',compact('project','documents','projects','project_categories','funding_organizations','currency_types','project_fundings','branches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $project = Project::findOrFail($id);

        // Validate the incoming request data
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
            'branch_id' => 'nullable|exists:branches,id',
        ]);

        // Update the project with the validated data
        $project->update($validatedData);

        // Redirect or return a response
    return redirect()->route('project.index')->with('success', 'Project Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the files with its images
       $files = Project::with('approvalDocuments')->findOrFail($id);
       // Delete each file
       foreach ($files->approvalDocuments as $file) {
           if (Storage::disk('public')->exists($file->file_path)) {
               Storage::disk('public')->delete($file->file_path);
           }
       }

       // Delete parent
       $files->approvalDocuments()->delete();

       // Delete
       $files->delete();

       return redirect()->route('project.index')->with('success', 'Project created successfully!');
    }

    public function activeordeactive(string $id)
    {
        $project = Project::findOrFail($id);

        $project->status = !$project->status;
        $project->save();

        return redirect()->back()->with('success', 'Status Changed successfully!');

    }


    public function filesdelete(string $id)
    {
        // Find the file by ID
        $file = ProjectApprovalDocument::findOrFail($id);

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


    public function addfile(Request $request)
    {

        // dd($request->all());
        // Validate the incoming request
        $request->validate([
            'project_documents.*' => 'required|file|max:5048', // Adjust MIME types and size as needed
        ]);

         if ($request->hasFile('project_documents')) {
            foreach ($request->file('project_documents') as $file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/projectapprovaldocuments', $fileName, 'public');

                ProjectApprovalDocument::create([
                    'project_id' => $request->project_code, // Use the ID of the saved funding organization
                    'file_name' => $fileName,
                    'file_path' => $filePath,
                ]);
            }
        }

        return redirect()->route('project.index')->with('success', 'Data saved successfully!');
    }

    public function DebitAccount($projectId)
    {
        // Fetch chart of accounts for the selected project
        $chartOfAccounts = ChartOfAccount::where('project_id', $projectId)->where('has_leaf',1)->get(['id', 'account_name']);

        if ($chartOfAccounts->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'No chart of accounts found for this project.']);
        }

        return response()->json(['success' => true, 'debit_accounts' => $chartOfAccounts]);
    }

    /**
     * Return a JSON response with the HTML for a select dropdown of credit accounts for a given project ID.
     *
     * @param int $projectId The ID of the project to fetch credit accounts for.
     * @return \Illuminate\Http\JsonResponse
     */
    public function CreditAccount($projectId)
    {
        $chartOfAccounts = ChartOfAccount::where('project_id', $projectId)->where('has_leaf',1)->get(['id', 'account_name']);

        if ($chartOfAccounts->isEmpty()) {
            return response()->json(['success' => false, 'message' => 'No chart of accounts found for this project.']);
        }

        return response()->json(['success' => true, 'credit_accounts' => $chartOfAccounts]);
    }

}
