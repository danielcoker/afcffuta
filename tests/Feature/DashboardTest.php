<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DashboardTest extends TestCase
{
    /** @test */
    public function requires_login()
    {
        $response = $this->get('/admin/dashboard');

        $response->assertRedirect('/admin/login');
    }
}
