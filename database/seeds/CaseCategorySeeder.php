<?php

use Illuminate\Database\Seeder;
use App\CaseCategory;

class CaseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CaseCategory::create(['name' => 'Code 25']);
        CaseCategory::create(['name' => 'Code 15']);
        CaseCategory::create(['name' => 'Minor Granted']);
        CaseCategory::create(['name' => 'GTOH']);
        CaseCategory::create(['name' => 'Minor Grantee']);
        CaseCategory::create(['name' => 'Solo Parent']);
        CaseCategory::create(['name' => 'Not Attending']);
        CaseCategory::create(['name' => 'Consistent Non-compliant']);
    }
}
