<?php

namespace Tests\Feature;

use Tests\BrowserKitTestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DashboardTest extends BrowserKitTestCase
{
    /** @test */
    public function requires_login()
    {
        $this->visit('/admin/dashboard')
                ->seePageIs('/admin/login');
    }
}
