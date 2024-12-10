<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CurrencyType;
use App\Models\FundingOrganization;
use App\Models\ProjectCategory;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.configure.project.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $project_categories = ProjectCategory::where('status',1)->get();
        $currency_types = CurrencyType::where('status',1)->get();
        $funding_organizations = FundingOrganization::where('status',1)->get();
        return view('admin.configure.project.create',compact('project_categories','currency_types','funding_organizations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
