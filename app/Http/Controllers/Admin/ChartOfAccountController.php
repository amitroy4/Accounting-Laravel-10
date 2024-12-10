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
        // dd($chart_of_accounts);
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

        $this->validate($request, [
            'company_id'=> 'required|exists:companies,id',
            // 'project_id'=> 'required|exists:projects,id',
            'account_name'=> 'string|required',
        ]);

        // dd($request->all());
        $account = new ChartOfAccount();
        // $account->account_id = $request->account_id;
        $account->company_id = $request->company_id;
        $account->account_name = $request->account_name;
        $account->parent_coa_id = $request->parent_coa_id ?? null;
        $account->has_leaf = $request->has_leaf ?? 0;
        $account->created_by = auth()->user()->id;
        $account->save();
        // dd($account);

        return redirect()->back()->with('success','New account created successfully.');

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
        $chart_of_accounts = ChartOfAccount::find($id);
        return response()->json($chart_of_accounts);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd($id,$request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
