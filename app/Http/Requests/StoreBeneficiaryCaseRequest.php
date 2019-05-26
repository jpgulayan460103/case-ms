<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBeneficiaryCaseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'case_category_id' => 'required',
            'reason' => 'required',
            'intervention' => 'required',
            'beneficiary_id' => 'required',
            'remarks' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'case_category_id.required' => 'Please Select Case Category',
            'beneficiary_id.required' => 'Please Select Beneficiary First',
        ];
    }
}
