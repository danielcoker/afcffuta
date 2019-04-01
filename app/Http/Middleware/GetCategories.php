<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Category;

class GetCategories
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $categories = Category::all();
        \View::share('categories', $categories);
        
        return $next($request);
    }
}
