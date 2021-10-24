<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RouteTest extends TestCase
{
    public function test_home(): void
    {
        $response = $this->get(route('web.home'));
        $response->assertStatus(200);
    }

    public function test_api_home(): void
    {
        $response = $this->get(route('api.v1.index'));
        $response->assertStatus(200);
    }

    public function test_docu(): void
    {
        $response = $this->get(route('docs.index'));
        $response->assertStatus(200);
    }

    public function test_changelog(): void
    {
        $response = $this->get(route('docs.changelog'));
        $response->assertStatus(200);
    }
}
