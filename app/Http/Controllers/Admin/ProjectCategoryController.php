<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ProjectCategory;
use App\Http\Controllers\Controller;

class ProjectCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project_categories = ProjectCategory::all();
        $project_category = 0;
        return view('admin.configure.project_category.project-category',compact('project_categories','project_category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //    dd($request->all());
        // Validate the incoming request data
        $validatedData = $request->validate([
            'project_category_name' => 'required|string|max:255',
            'project_category_code' => 'required|string|max:10',
            'status' => 'required|boolean',
        ]);


        // Create the new project category
        ProjectCategory::create($validatedData);
        return redirect()->route('project_category.index')->with('success', 'Project Category Created successfully!');
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
        $project_categories = ProjectCategory::all();
        $project_category = ProjectCategory::findOrFail($id);
        return view('admin.configure.project_category.project-category',compact('project_category','project_categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd( $request->all());
        $request->validate([
            'project_category_name' => 'required|string|max:255',
            'project_category_code' => 'required|string|max:10|unique:project_categories,project_category_code,' . $id,
            'status' => 'required|boolean',
        ]);
        // Find the company by ID
        $project_category = ProjectCategory::findOrFail($id);

        // Update the company fields
        $project_category->project_category_name = $request->project_category_name;
        $project_category->project_category_code = $request->project_category_code;
        $project_category->status = $request->status;
        $project_category->save();

        $project_categories = ProjectCategory::all();
        $project_category = 0;
        return view('admin.configure.project_category.project-category',compact('project_categories','project_category'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the Branch by ID
        $project_category = ProjectCategory::findOrFail($id);
        $project_category->delete();

        // Redirect back with a success message
        return redirect()->route('project_category.index')->with('success', 'Project Category deleted successfully!');
    }

    public function activeordeactive(string $id)
    {
        $project_category = ProjectCategory::findOrFail($id);

        $project_category->status = !$project_category->status;
        $project_category->save();

        return redirect()->back()->with('success', 'Status Changed successfully!');

    }
}
