<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
    protected $fillable = [
        'region',
        'province',
        'municipality',
        'barangay',
        'cmunicipality_name',
        'household_id',
        'entry_id',
        'firstname',
        'middlename',
        'lastname',
        'name_of_health_center',
        'count_months',
        'remarks',
    ];
}
