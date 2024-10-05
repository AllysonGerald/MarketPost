<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Site\Category;

class CategoryController extends Controller {

    public function index() {
        return view('site.category.category', [
            'categories' => Category::all(),
        ]);
    }

    public function show(Category $category) {

        return view('site.category.show', ['category' => $category->load('products')]);

    }

}
