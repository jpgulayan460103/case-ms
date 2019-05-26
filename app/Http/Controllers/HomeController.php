<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CaseCategory;
use App\Beneficiary;
use App\BeneficiaryCase;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['case_categories'] = CaseCategory::all();
        $data['beneficiaries'] = Beneficiary::all();
        $data['beneficiary_cases'] = BeneficiaryCase::all();
        return view('home',$data);
    }
}
