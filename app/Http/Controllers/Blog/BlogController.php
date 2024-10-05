<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller {

    public function __invoke(Request $request) {
        return view('blog.index');
    }
}
