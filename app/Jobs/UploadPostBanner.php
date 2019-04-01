<?php

namespace App\Jobs;

use Storage;
use Illuminate\Bus\Queueable;
use Image as ImageIntervention;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class UploadPostBanner implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $banner;

    public function __construct($banner)
    {
        $this->banner = $banner;
    }

    
    public function handle()
    {
        $image = $this->banner;
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = 'public/banner/' . $filename;
        
        $image = ImageIntervention::make($image);

        Storage::put($location, $image->encode());

        return $filename;
    }
}
