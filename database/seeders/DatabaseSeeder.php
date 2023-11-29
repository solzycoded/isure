<?php

namespace Database\Seeders;

use App\Models\InsurancePolicy;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->seedInsurance();
    }

    private function seedInsurance(){
        $insurancePolicies = [
            [
                'name'            => 'home',
                'default_premium' => 2000
            ],
            [
                'name'            => 'car',
                'default_premium' => 3000
            ],
            [
                'name'            => 'life',
                'default_premium' => 4000
            ],
        ];

        foreach ($insurancePolicies as $value) {
            InsurancePolicy::create($value);
        }
    }
}
