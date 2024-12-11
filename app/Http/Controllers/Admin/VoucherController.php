<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\ChartOfAccount;
use App\Http\Controllers\Controller;

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

        return view("admin.voucher.create",compact("companies"));
    }

    public function DebitAccount($projectId)
    {
        $all_moca = ChartOfAccount::where('project_id',$projectId)->where('has_leaf',1)->get();
        $html = '<option >-Select-</option>';

        if($all_moca->count())
        {
            foreach($all_moca as $row)
            {
                $html .= '<option value="'.$row->id.'">'.$row->account_name.'-'.$row->account_code. ' ( '. $row->account_type .' ) </option>';
            }
        }
        return response()->json($html);
    }

    public function CreditAccount($projectId)
    {
        $all_moca = ChartOfAccount::where('project_id',$projectId)->where('has_leaf',1)->get();

        $html = '<option >-Select-</option>';

        if($all_moca->count())
        {
            foreach($all_moca as $row)
            {
                $html .= '<option value="'.$row->id.'">'.$row->account_name.'-'.$row->account_code.' ( '. $row->account_type .' ) </option>';
            }
        }
        return response()->json($html);
    }
}
