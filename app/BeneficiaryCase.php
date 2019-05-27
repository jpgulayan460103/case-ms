<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Beneficiary;
use App\CaseCategory;

class BeneficiaryCase extends Model
{
    public function beneficiary()
    {
        return $this->belongsTo(Beneficiary::class, 'beneficiary_id');
    }
    public function case_category()
    {
        return $this->belongsTo(CaseCategory::class, 'case_category_id');
    }
}
