<?php

namespace App\Jobs;

use Storage;
use Illuminate\Bus\Queueable;
use Image as ImageIntervention;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class UploadPostThumbnail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $thumbnail;

    public function __construct($thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }

    public function handle()
    {
        $image = $this->thumbnail;
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = 'public/thumbnails/' . $filename;
        
        $image = ImageIntervention::make($image);

        Storage::put($location, $image->encode());

        return $filename;
    }
}
