<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use App\Jobs\CreatePost;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:admin', 'categories.get']);
    }
    
    public function index(Category $category)
    {
        $posts = Post::where('category_id', $category->id)->latest()->get();

        $counter = 1;

        return view('admin.post.index', compact('category', 'posts', 'counter'));
    }

    public function show()
    {

    }

    public function create(Category $category)
    {
        return view('admin.post.create', compact('category'));
    }

    public function store(PostRequest $request, Category $category)
    {
        $post = $this->dispatchNow(CreatePost::fromrequest($request, $category));

        $this->success('post.created');

        return redirect()->route('admin.posts.index', $category->id);
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function destroy()
    {

    }
}
