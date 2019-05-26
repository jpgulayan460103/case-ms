<?php

use Illuminate\Database\Seeder;
use App\Beneficiary;

class BeneficiaryDataSampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beneficiaries = [
            [
                'region' => 'XI',
                'province' => 'DAVAO DEL NORTE',
                'municipality' => 'ASUNCION (SAUG)',
                'barangay' => 'BINANCIAN',
                'cmunicipality_name' => 'KIMVERLY ROMERO',
                'household_id' => '112301004-4201-00026',
                'entry_id' => '17031893',
                'firstname' => 'MARGARITA',
                'middlename' => 'LARGO',
                'lastname' => 'ALGABRE',
                'name_of_health_center' => 'BINANCIAN HEALTH CENTER',
                'count_months' => '11',
                'remarks' => 'Old targets',
            ],
            [
                'region' => 'XI',
                'province' => 'DAVAO DEL NORTE',
                'municipality' => 'ASUNCION (SAUG)',
                'barangay' => 'BUCLAD',
                'cmunicipality_name' => 'SHIRLEY MENCIDOR',
                'household_id' => '112301007-2409-00017',
                'entry_id' => '16881660',
                'firstname' => 'RONALD',
                'middlename' => 'GERALDE',
                'lastname' => 'HIZON',
                'name_of_health_center' => 'CAMONING HEALTH CENTER',
                'count_months' => '10',
                'remarks' => 'New targets',
            ]
        ];

        foreach ($beneficiaries as $beneficiary) {
            Beneficiary::create($beneficiary);
        }
    }
}
