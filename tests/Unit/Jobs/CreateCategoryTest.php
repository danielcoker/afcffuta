<?php

namespace Tests\Unit\Jobs;

use Tests\TestCase;
use App\Jobs\CreateCategory;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateCategoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function can_create_category()
    {
        $category = CreateCategory::dispatchNow('Title');

        $this->assertEquals('Title', $category->title);
    }
}
