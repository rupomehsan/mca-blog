<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    static $model = \App\Modules\BlogManagement\Blog\Model::class;

    public function getAllBlogs()
    {
        $allBlogs = self::$model::paginate(20);
        return view('frontend.blog.index', compact('allBlogs'));
    }
    public function getSingleBlog($slug)
    {
        $blog = self::$model::where('slug', $slug)->first();
        return view('frontend.blog.single-blog', compact('blog'));
    }
}
