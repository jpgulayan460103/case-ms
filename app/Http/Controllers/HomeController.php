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
        $beneficiary_cases = BeneficiaryCase::all();
        foreach ($beneficiary_cases as $beneficiary_case) {
            $beneficiary_case->beneficiary;
            $beneficiary_case->case_category;
        }
        // return $beneficiary_cases;
        $data['beneficiary_cases'] = $beneficiary_cases;
        return view('home',$data);
    }
}
