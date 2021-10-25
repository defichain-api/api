<?php

namespace Database\Seeders;

use App\Models\LoanScheme;
use Illuminate\Database\Seeder;

class LoanSchemeSeeder extends Seeder
{
    public function run()
    {
        LoanScheme::truncate();
        $now = now();
        LoanScheme::insert([
            [
                'name'                  => 'C150',
                'minCollaterationRatio' => 150,
                'interestRate'          => 5,
                'isDefault'             => true,
                'created_at'            => $now,
                'updated_at'            => $now,
            ],
            [
                'name'                  => 'C175',
                'minCollaterationRatio' => 175,
                'interestRate'          => 3,
                'isDefault'             => false,
                'created_at'            => $now,
                'updated_at'            => $now,
            ],
            [
                'name'                  => 'C200',
                'minCollaterationRatio' => 200,
                'interestRate'          => 2,
                'isDefault'             => false,
                'created_at'            => $now,
                'updated_at'            => $now,
            ],
            [
                'name'                  => 'C350',
                'minCollaterationRatio' => 350,
                'interestRate'          => 1.5,
                'isDefault'             => false,
                'created_at'            => $now,
                'updated_at'            => $now,
            ],
            [
                'name'                  => 'C500',
                'minCollaterationRatio' => 500,
                'interestRate'          => 1,
                'isDefault'             => false,
                'created_at'            => $now,
                'updated_at'            => $now,
            ],
            [
                'name'                  => 'C1000',
                'minCollaterationRatio' => 1000,
                'interestRate'          => 0.5,
                'isDefault'             => false,
                'created_at'            => $now,
                'updated_at'            => $now,
            ],
        ]);
    }
}
