<?php

namespace Database\Factories;

use App\Models\LoanScheme;
use Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoanSchemeFactory extends Factory
{
    protected $model = LoanScheme::class;

    public function definition(): array
    {
        return [
            'name'                 => Arr::random([
                'C150',
                'C175',
                'C200',
                'C350',
                'C500',
                'C1000',
            ], 1, false)[0],
            'minCollaterationRatio' => Arr::random([
                150,
                175,
                200,
                350,
                500,
                1000,
            ], 1, false)[0],
            'interestRate'         => $this->faker->randomFloat(8, 0.5, 5),
        ];
    }

    public function schemeRate(int $ratio): LoanSchemeFactory
    {
        return $this->state(function (array $attributes) use ($ratio) {
            return [
                'name'                 => sprintf('C%s', $ratio),
                'minCollaterationRatio' => $ratio,
            ];
        });
    }
}
