<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChartOfAccount;
use App\Models\Company;
use Illuminate\Http\Request;

class ChartOfAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::where('status',1)->get();
        $parent_heads = ChartOfAccount::where('is_active',1)->where('has_leaf',0)->get();
        $chart_of_accounts = ChartOfAccount::with('child_account.child_account.child_account.child_account.child_account.child_account.child_account.child_account')
                            ->where('is_active',1)
                            ->where('parent_coa_id',null)
                            ->get();
        // dd($companies);
        return view('admin.chart-of-account.index',compact('companies','parent_heads','chart_of_accounts'));
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
