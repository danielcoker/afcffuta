<?php

namespace App\Http\Controllers\Admin;

use App\Jobs\CreateCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(CategoryRequest $request)
    {
        $thred = $this->dispatchNow(CreateCategory::fromRequest($request));

        $this->success('category.created');

        return redirect()->route('admin.categories.create');
    }
}
