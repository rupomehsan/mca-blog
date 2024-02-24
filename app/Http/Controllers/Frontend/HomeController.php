<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    static $model = \App\Modules\WebsiteSetting\VisitorCountModel::class;
    static $sliderModel = \App\Modules\Slider\Model::class;
    static $blogModel = \App\Modules\BlogManagement\Blog\Model::class;
    public function index()
    {
        self::$model::create(['ip' => request()->ip()]);

        $allSliders = self::$sliderModel::limit(5)->get();
        $populerBlog = self::$blogModel::with('categories')->limit(8)->orderBy('id', 'desc')->withCount('view')->get();
        $trendingBlog = self::$blogModel::limit(8)->orderBy('id', 'asc')->withCount('view')->get();
        return view('frontend.index', compact('allSliders', 'populerBlog', 'trendingBlog'));
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
        $singleBlog = self::$blogModel::where('slug', $slug)->first();
        if ($singleBlog) {
            DB::table('blog_views')->insert([
                'blog_id' => $singleBlog->id,
                'view' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ]);
            // dd($singleBlog);
            return view('frontend.pages.blog.blog_details', compact('singleBlog'));
        } else {
            return redirect()->route('not-found');
        }
    }

    public function login()
    {
        return view('auth.login');
    }


    public function notFound()
    {
        return view('frontend.not-found');
    }
}
