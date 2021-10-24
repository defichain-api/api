<?php

namespace Tests\Feature\Api\V1;

use Illuminate\Http\JsonResponse;
use Tests\TestCase;

class PingTest extends TestCase
{
    public function test_ping(): void
    {
        $this->get(route('api.v1.ping'))
            ->assertStatus(JsonResponse::HTTP_OK)
            ->assertJson([
                'pong',
            ]);
    }
}
