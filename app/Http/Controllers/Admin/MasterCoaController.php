<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterCoaController extends Controller
{
    public function index()
    {
        return view('admin.masterCOA.chart-of-accounts');
    }
}
