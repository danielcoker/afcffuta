<?php

namespace Tests\Feature;

use App\Admin;
use Tests\BrowserKitTestCase;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends BrowserKitTestCase
{
    use RefreshDatabase;

    /** @test */
    public function we_can_see_category_listing()
    {
        $admin = $this->loginAsAdmin();

        $category = factory(Category::class)->create(['title' => 'First Category']);
        $category = factory(Category::class)->create(['title' => 'Second Category']);
        
        $this->visit('/admin/categories')
                ->see('Show all categories')
                ->see('First Category')
                ->see('Second Category');
    }

    /** @test */
    public function we_can_delete_a_category()
    {
        $admin = $this->loginAsAdmin();


    }
}
