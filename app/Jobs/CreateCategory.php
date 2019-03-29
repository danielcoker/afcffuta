<?php

namespace App\Jobs;

use App\Models\Category;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use App\Http\Requests\CategoryRequest;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreateCategory implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var string
     */
    private $title;
    
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public static function fromRequest(CategoryRequest $request): self
    {
        return new static(
            $request->title()
        );
    }
    
    public function handle()
    {
        $category = Category::create([
                        'title' => $this->title,
                        'slug' => slug($this->title)
                    ]);

        return $category;
    }
}
