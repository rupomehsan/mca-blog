<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function aboutus()
    {
        return view('frontend.pages.aboutus');
    }
    public function course()
    {
        return view('frontend.pages.course.index');
    }
    public function courseDetails($slug)
    {
        return view('frontend.pages.course.course_details');
    }

    public function blog()
    {
        return view('frontend.pages.blog.index');
    }
    public function blogDetails($slug)
    {
        return view('frontend.pages.blog.blog_details');
    }

    public function login()
    {
        return view('auth.login');
    }
}
