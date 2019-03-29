<?php

namespace Tests\Feature;

use App\Admin;
use Tests\TestCase;
use App\Models\Category;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function we_can_see_category_listing()
    {
        $admin = $this->loginAsAdmin();

        $category = factory(Category::class)->create([
            'title' => 'Title'
        ]);
        
        $response = $this->get('/admin/categories');

        $response->assertSeeInOrder([1, 'Title']);
    }
}
