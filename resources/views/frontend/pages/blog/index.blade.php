@extends('layouts.frontend')
@section('content')
<!-- Page Title -->
<section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/10.jpg)">
    <div class="auto-container">
        <h1>Our Blogs</h1>
    </div>
</section>
<!--End Page Title-->

<!-- Product Form Section -->
<section class="product-form-section style-two">
    <div class="auto-container">
        <div class="inner-container margin-top">
            <!-- Default Form -->
            <div class="default-form">
                <h1>Empowering Every Aspiring Chef</h1>
            </div>

        </div>
    </div>
</section>
<!-- End Keyword Section -->

<!-- Popular Recipes Section -->
<section class="popular-recipes-section style-three">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title">
            <div class="clearfix">
                <div>
                    <h2 class="text-center">Populer Recipes Posts</h2>
                </div>

            </div>
        </div>
    </div>
    <div class="outer-container">

        <div class="row clearfix">
            @foreach ($blogs as $blog )
            <!-- Recipes Block -->
            <div class="recipes-block style-three col-lg-3 col-md-6 col-sm-12 ">
                <div class="inner-box border">
                    <div class="image">
                        <a href="{{route('blog.details',$blog->slug)}}"><img src="{{asset($blog->thumbnail_image)}}"
                                alt=""></a>
                    </div>
                    <div class="lower-content">
                        <div class="category">
                            {{$blog->categories && count($blog->categories) ?
                            $blog->categories[0]->title:"" }}
                        </div>
                        <h4><a href="{{route('blog.details',$blog->slug)}}">{{substr(strip_tags($blog->title), 0,
                                25)}}</a>
                        </h4>
                        <div class="text">{{substr(strip_tags($blog->description), 0, 50)}}</div>
                        <ul class="post-meta">
                            <li><span class="icon flaticon-clock-3"></span>{{$blog->created_at->format('d M Y')}}</li>
                            <li class="c-pointer" title="views"><span
                                    class="icon flaticon-eye"></span>{{$blog->view_count}} People
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{$blogs->links()}}
        </div>

    </div>
</section>
<!-- End Popular Recipes Section -->



@endsection
