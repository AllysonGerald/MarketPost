<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class CategoryController extends Controller {

    public function index() {
        return view('site.category.category');
    }

    public function show($slug) {

        return view('site.category.show', compact('slug'));

    }

}
