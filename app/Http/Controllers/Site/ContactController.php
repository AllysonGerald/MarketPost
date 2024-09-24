<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller {
    public function index(Request $request) {
        return view('site.contact.contact');
    }

    public function form(Request $request) {
        $data = $request->all();
        return response()->json($data);
    }
}
