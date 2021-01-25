<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {

        return view('pages.home-blade');
    }

    public function blog() {

        return view('pages.blog-blade');
    }

    public function about() {

        return view('pages.about-blade');
    }
}
