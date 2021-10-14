<?php

namespace Database\Factories;

use App\Models\Masternode;
use Illuminate\Database\Eloquent\Factories\Factory;

class MasternodeFactory extends Factory
{
    protected $model = Masternode::class;

    public function definition(): array
    {
        return [
            'id'               => $this->faker->uuid,
            'ownerAddress'     => $this->faker->address,
            'operatorAddress'  => $this->faker->address,
            'state'            => 'ENABLED',
            'mintedBlocks'     => $this->faker->randomNumber(2),
            'timelock'         => '10 years',
            'targetMultiplier' => '[0,0,0,0]',
            'creationHeight'   => $this->faker->randomNumber(),
            'resignHeight'     => -1,
            'resignTx'         => '0000000000000000000000000000000000000000000000000000000000000000',
            'banTx'            => '0000000000000000000000000000000000000000000000000000000000000000',
        ];
    }
}
