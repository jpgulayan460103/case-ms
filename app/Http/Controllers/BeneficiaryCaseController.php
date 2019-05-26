<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BeneficiaryCase;
use App\Http\Requests\StoreBeneficiaryCaseRequest;

class BeneficiaryCaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBeneficiaryCaseRequest $request)
    {
        $beneficiary_case = new BeneficiaryCase;
        $beneficiary_case->case_category_id = $request->case_category_id;
        $beneficiary_case->beneficiary_id = $request->beneficiary_id;
        $beneficiary_case->reason = $request->reason;
        $beneficiary_case->intervention = $request->intervention;
        $beneficiary_case->remarks = $request->remarks;
        $beneficiary_case->user_id = $request->user_id;
        $beneficiary_case->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
