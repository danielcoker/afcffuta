<?php

namespace Tests\Unit\Jobs;

use Tests\TestCase;
use App\Models\Category;
use App\Jobs\UpdateCategory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateCategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function we_can_update_category()
    {
        $category = factory(Category::class)->create();

        $category = UpdateCategory::dispatchNow('Title', $category);

        $this->assertEquals('Title', $category->title);
    }
}
