<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\ChartOfAccount;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ChartOfAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::user()->isSuperAdmin()){
            $companies = Company::where('status',1)->with('branches.projects')->get();
            $projects = Project::where('status',1)->get();
            $parent_heads = ChartOfAccount::where('is_active',1)->where('has_leaf',0)->get();
            $chart_of_accounts = ChartOfAccount::with('child_account.child_account.child_account.child_account.child_account.child_account.child_account.child_account')
                                ->where('is_active',1)
                                ->where('parent_coa_id',null)
                                ->get();
            // dd($companies);
        }else{
            $userCompanyId = Auth::user()->branch->company->first()->id ;
            // dd($userCompanyId);
            $companies = Company::where('status',1)->where('id',$userCompanyId)->with('branches.projects')->get();
            $projects = Project::where('status',1)->where('branch_id',Auth::user()->branch_id)->get();
            $parent_heads = ChartOfAccount::where('is_active',1)->where('has_leaf',1)->where('company_id',$userCompanyId)->get();
            $chart_of_accounts = ChartOfAccount::with('child_account.child_account.child_account.child_account.child_account.child_account.child_account.child_account')
                                ->where('is_active',1)
                                ->where('parent_coa_id',null)
                                ->where('company_id',Auth::user()->company_id)
                                ->get();
        }

        // dd($chart_of_accounts);
        return view('admin.chart-of-account.index',compact('companies','parent_heads','chart_of_accounts','projects'));
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
        // Validation rules
        $this->validate($request, [
            'company_id' => 'required|exists:companies,id',
            'project_id' => 'required|exists:projects,id',
            'account_name' => 'string|required',
            'parent_coa_id' => 'nullable|exists:chart_of_accounts,id',
        ]);

        // Create a new Chart of Account instance
        $chartofaccount = new ChartOfAccount();
        $chartofaccount->company_id = $request->company_id;
        $chartofaccount->project_id = $request->project_id;
        $chartofaccount->account_name = $request->account_name;
        $chartofaccount->parent_coa_id = $request->parent_coa_id;
        $chartofaccount->has_leaf = $request->has_leaf ?? 0;
        $chartofaccount->created_by = auth()->user()->id;

        // Save first to generate the ID
        $chartofaccount->save();

        return redirect()->back()->with('success', 'New account created successfully.');
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
        // dd($id,$request->all());

        $this->validate($request, [
            'company_id' => 'required|exists:companies,id',
            'project_id' => 'required|exists:projects,id',
            'account_name' => 'required|string',
            'parent_coa_id' => 'nullable|exists:chart_of_accounts,id',
        ]);

        $chartofaccount = ChartOfAccount::findOrFail($id);

        // Update fields
        $chartofaccount->company_id = $request->company_id;
        $chartofaccount->project_id = $request->project_id;
        $chartofaccount->account_name = $request->account_name;
        $chartofaccount->parent_coa_id = $request->parent_coa_id ?? null;
        $chartofaccount->has_leaf = $request->has_leaf ?? 0;
        $chartofaccount->updated_by = auth()->id();

        $chartofaccount->save();
        session()->flash('success','Chart of Account updated Successfully.');
        return response()->json(['message' => 'Chart of Account updated successfully!'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the ChartOfAccount by ID
        $chartofaccount = ChartOfAccount::findOrFail($id);

        if ($chartofaccount->child_account()->count() > 0) {
            return response()->json([
                'message' => 'Chart of Account cannot be deleted because it has child accounts.',
            ], 422);
        } else {
            // Delete the ChartOfAccount
            $chartofaccount->delete();

            return response()->json([
                'message' => 'Chart of Account deleted successfully!',
            ], 200);
        }
    }

}
