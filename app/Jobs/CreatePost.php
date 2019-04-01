<?php

namespace App\Jobs;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Bus\Queueable;
use Image as ImageIntervention;
use App\Http\Requests\PostRequest;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CreatePost implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $body;

    private $thumbnail;

    private $banner;

    private $category;


    public function __construct(string $title, string $body, $thumbnail, $banner, Category $category)
    {
        $this->title = $title;
        $this->body = $body;
        $this->thumbnail = $thumbnail;
        $this->banner = $banner;
        $this->category = $category;
    }

    public static function fromRequest(PostRequest $request, Category $category): self
    {
        return new static(
            $request->title(),
            $request->body(),
            $request->thumbnail(),
            $request->banner(),
            $category
        );
    }
    
    public function handle()
    {
        $thumbnail = UploadPostThumbnail::dispatchNow($this->thumbnail);

        $banner = UploadPostBanner::dispatchNow($this->banner);
        
        $post = Post::create([
            'title' => $this->title,
            'body' => $this->body,
            'slug' => slug($this->title),
            'category_id' => $this->category->id,
            'thumbnail' => $thumbnail,
            'banner' => $banner
        ]);

        return $post;
    }
}
