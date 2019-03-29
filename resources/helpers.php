<?php

if (!function_exists('slug')) {
    /**
     * Generates URL slugs from title
     */
    function slug(string $title): string
    {
        return app(Illuminate\Support\Str::class)->slug($title, '-');
    }
    
}