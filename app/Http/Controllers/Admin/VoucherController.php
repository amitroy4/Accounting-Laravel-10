<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\ChartOfAccount;
use App\Http\Controllers\Controller;
use App\Models\CurrencyType;

class VoucherController extends Controller
{
    public function index()
    {
        // $vouchers = Voucher::orderBy("created_at","desc")->paginate(10);


        return view("admin.voucher.index");
    }

    public function create()
    {
        $companies = Company::where('status',1)->get();
        $projects = Project::where('status',1)->get();
        $currency_types = CurrencyType::where('status',1)->get();
        return view("admin.voucher.create",compact("companies","projects","currency_types"));
    }

    
}
