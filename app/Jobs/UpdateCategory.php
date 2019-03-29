<?php

namespace App\Jobs;

use App\Models\Category;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use App\Http\Requests\CategoryRequest;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class UpdateCategory implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var string
     */
    private $title;

    /**
     * @var App\Models\Category
     */
    private $category;

    public function __construct(string $title, Category $category)
    {
        $this->title = $title;
        $this->category = $category;
    }

    public static function fromRequest(Category $category, CategoryRequest $request): self
    {
        return new static(
            $request->title(),
            $category
        );
    }
    
    public function handle()
    {
        $category = $this->category->fill([
            'title' => $this->title,
            'slug' => slug($this->title)
        ]);

        $category->save();

        return $category;
    }
}
