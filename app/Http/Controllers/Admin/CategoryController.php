<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Jobs\CreateCategory;
use App\Jobs\UpdateCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:admin', 'categories.get']);
    }

    public function index()
    {
        $categories = Category::latest()->get();

        $counter = 1;

        return view('admin.categories.index', compact('categories', 'counter'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $category = $this->dispatchNow(CreateCategory::fromRequest($request));

        $this->success('category.created');

        return redirect()->route('admin.categories.index');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category = $this->dispatchNow(UpdateCategory::fromRequest($category, $request));

        $this->success('category.updated');

        return redirect()->route('admin.categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        $this->success('category.deleted');

        return redirect()->route('admin.categories.index');
    }
}
