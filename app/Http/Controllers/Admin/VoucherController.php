<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\ChartOfAccount;
use App\Http\Controllers\Controller;
use App\Models\CurrencyType;
use Illuminate\Support\Facades\Auth;

class VoucherController extends Controller
{
    public function index()
    {
        // $vouchers = Voucher::orderBy("created_at","desc")->paginate(10);
        return view("admin.voucher.index");
    }

    public function create()
    {
        if(Auth::user()->isSuperAdmin()){
            $companies = Company::where('status',1)->get();
            $projects = Project::where('status',1)->get();
            $heads = ChartOfAccount::where('is_active',1)->where('has_leaf',0)->get();

        }else{
            $companies = Company::where('status',1)->where('id',Auth::user()->company_id)->get();
            $projects = Project::where('status',1)->where('branch_id',Auth::user()->branch_id)->get();
            $heads = ChartOfAccount::where('is_active',1)->where('has_leaf',1)->where('company_id',Auth::user()->company_id)->get();

        }
        $currency_types = CurrencyType::where('status',1)->get();
        // dd($projects);
        return view("admin.voucher.create",compact("companies","projects","currency_types"));
    }


}
