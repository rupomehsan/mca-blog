@extends('layouts.frontend')
@section('content')
    <!-- Banner Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-theme owl-carousel">
            @foreach ($allSliders as $slider)
                <!-- Slide Item -->
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url({{ $slider->image }})">
                    </div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h1>{{ $slider->title }}</h1>
                            <div class="text">{{ $slider->description }} </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!--End Banner Section -->

    <!-- Product Form Section -->
    <section class="product-form-section">
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


    <!-- Trending Section -->
    <section class="trending-section mt-5">
        <div class="auto-container">
            <div class="layer-one"
                style="background-image: url({{ asset('frontend') }}/images/resource/category-pattern-1.png)"></div>
            <div class="layer-two"
                style="background-image: url({{ asset('frontend') }}/images/resource/category-pattern-1.png)"></div>
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title">Some Speach Our CEO</div>
                            <h2> Nazrul Islam (CEO)</h2>
                            <div class="text">An accomplished chef with a wide range of experience in the culinary arts,
                                Chef Nazrul Islam is a seasoned culinary specialist. He finished his secondary education in
                                1986 and his upper secondary education in 1992, marking the beginning of his career in the
                                culinary arts. In 1994, he obtained a Bachelor of Arts degree, advancing his academic
                                career.

                                Motivated by his love of cooking, Chef Nazrul took a number of culinary classes to improve
                                his abilities. In addition to Level 3 training in F&B production, he finished Level 1 and
                                Level 2 chef courses. His credentials as a trainer and assessor approved by the Bangladesh
                                Technical Education Board (BTEB) and the National Skill Development Authority (NSDA) were
                                also obtained.

                                Hygiene and food safety were Chef Nazrul's top priorities.</div>
                        </div>

                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="{{ asset('frontend') }}/images/clients/about-chef.jpeg" alt=""
                                style="height: 500px;
                                width: 400px;
                                object-fit: cover;" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Trending Section -->



    <!-- Popular Recipes Section -->
    <section class="popular-recipes-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2>Populer Recipes Posts</h2>
                        <div class="text">Discover our most sought-after recipes, each a culinary masterpiece waiting to
                            be savored
                        </div>
                    </div>
                    <div class="pull-right">
                        <a href="{{ route('blog') }}" class="theme-btn btn-style-one"><span class="txt">See all
                                Post</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="outer-container">
            <div class="row clearfix">
                @foreach ($populerBlog as $blog)
                    <!-- Recipes Block -->
                    <div class="recipes-block style-two col-lg-3 col-md-6 col-sm-12 ">
                        <div class="inner-box border">
                            <div class="image">
                                <a href="{{ route('blog.details', $blog->slug) }}"><img
                                        src="{{ asset($blog->thumbnail_image) }}" alt=""></a>
                            </div>
                            <div class="lower-content">
                                <div class="category">
                                    {{ $blog->categories && count($blog->categories) ? $blog->categories[0]->title : '' }}
                                </div>
                                <h4><a
                                        href="{{ route('blog.details', $blog->slug) }}">{{ substr(strip_tags($blog->title), 0, 25) }}</a>
                                </h4>
                                <div class="text">{{ substr(strip_tags($blog->description), 0, 50) }}</div>
                                <ul class="post-meta">
                                    <li><span class="icon flaticon-clock-3"></span>{{ $blog->created_at->format('d M Y') }}
                                    </li>
                                    <li class="c-pointer" title="views"><span
                                            class="icon flaticon-eye"></span>{{ $blog->view_count }} People
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- End Popular Recipes Section -->
    <section class="categories-section-two">
        <div class="auto-container">

            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2> What Makes Us the Best?</h2>
                <div class="row clearfix mt-5">

                    <!-- Content Column -->
                    <div class="content-column col-lg-7 col-md-12 col-sm-12 ">
                        <div class="inner-column">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <div class="text text-justify">
                                    Our goal is to develop Chefs, not just recipes!
                                    Under the guidance of our chef instructors and lecturers, the International Culinary
                                    Institute (ICI)
                                    will motivate you to pursue your passion for the culinary arts and management. Our
                                    lecturers offer a
                                    wealth of expertise gleaned from years of experience in both education and the
                                    hospitality sector, and
                                    our ICI Master Chefs are both credentialed and classically educated educators.

                                    Today, ambitious foodies and hospitality aficionados from all over the country are drawn
                                    to Dhaka and
                                    Chittagong due to their extensive gastronomic appeal. Studying here at ICI will provide
                                    you the
                                    opportunity to interact with professionals in the field and explore a wide range of
                                    different cuisines
                                    and lifestyles—it's an opportunity of a lifetime!.
                                </div>
                                <div class="text text-justify">
                                    Not just recipes, but Chefs are what we want to create! The International Culinary
                                    Institute (ICI) will inspire you to follow your love for the culinary arts and
                                    management under the direction of our chef instructors and lecturers. Our instructors
                                    provide a plethora of knowledge derived from years of involvement in both the
                                    educational

                                </div>
                            </div>


                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="image-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="image">
                                <img src="{{ asset('frontend') }}/images/clients/whyus.jpeg" alt=""
                                    style="height: 500px;
                                    width: 400px;
                                    object-fit: cover;" />
                            </div>
                        </div>
                    </div>

                </div>
                <div class="text"></div>
            </div>



        </div>
    </section>
    <!-- Popular Recipes Section -->
    <section class="popular-recipes-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2>Trending Recipes Posts</h2>
                        <div class="text">Explore the latest culinary sensations that are taking the food world by storm.

                        </div>
                    </div>
                    <div class="pull-right">
                        <a href="{{ route('blog') }}" class="theme-btn btn-style-one"><span class="txt">See all
                                Post</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="outer-container">
            <div class="row clearfix">

                @foreach ($trendingBlog as $blog)
                    <!-- Recipes Block -->
                    <div class="recipes-block style-two col-lg-3 col-md-6 col-sm-12 ">
                        <div class="inner-box border">
                            <div class="image">
                                <a href="{{ route('blog.details', $blog->slug) }}"><img
                                        src="{{ asset($blog->thumbnail_image) }}" alt=""></a>
                            </div>
                            <div class="lower-content">
                                <div class="category">
                                    {{ $blog->categories && count($blog->categories) ? $blog->categories[0]->title : '' }}
                                </div>
                                <h4><a
                                        href="{{ route('blog.details', $blog->slug) }}">{{ substr(strip_tags($blog->title), 0, 25) }}</a>
                                </h4>
                                <div class="text">{{ substr(strip_tags($blog->description), 0, 50) }}</div>
                                <ul class="post-meta">
                                    <li><span class="icon flaticon-clock-3"></span>{{ $blog->created_at->format('d M Y') }}
                                    </li>
                                    <li class="c-pointer" title="views"><span
                                            class="icon flaticon-eye"></span>{{ $blog->view_count }} People
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>
    <!-- End Popular Recipes Section -->

    <!-- Call To Action Section -->
    <section class="call-to-action-section"
        style="background-image:url({{ asset('frontend') }}/images/main-slider/slider-3.jpeg)">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <!-- Sec Title -->
                    <div class="sec-title light ">
                        <div class="title">Pizza</div>
                        <h2 class="text-danger">Your Complete Christmas <br> Dinner Planning Guide</h2>
                        <div class="text text-dark">Special occasions call for extraordinary food. Whether your gathering
                            is
                            big or small, casual or formal, here's everything you need to create a crowd-pleasing
                            holiday feast</div>
                    </div>
                    <a href="recipes-2.html" class="theme-btn btn-style-two"><span class="txt">Check
                            Recipe</span></a>
                </div>

                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <!-- Sec Title -->
                    <div class="sec-title light">
                        <div class="title">Breakfast</div>
                        <h2 class="text-danger">How to Meal Prep Breakfast Sandwiches </h2>
                        <div class="text text-dark fw-bold">Special occasions call for extraordinary food. Whether your
                            gathering is
                            big or small, casual or formal, here's everything you need to create a crowd-pleasing
                            holiday feast</div>
                    </div>
                    <a href="recipes-2.html" class="theme-btn btn-style-two"><span class="txt">Check
                            Recipe</span></a>
                </div>

            </div>
        </div>
    </section>
    <!-- End Call To Action Section -->

    <!-- Video Section -->
    <section class="video-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Our Most Entertaining Video</h2>
            </div>
            <div class="row clearfix">

                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <!--Video Box-->
                    <div class="video-box">
                        <div class="image">
                            <h4>Pressure-Cooker Chicken <br> Enchilada Soup</h4>
                            <img src="{{ asset('frontend') }}/images/clients/entertainment-1.jpeg" alt="" />
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span
                                    class="flaticon-media-play-symbol"><i class="ripple"></i></span></a>
                        </div>
                    </div>
                </div>

                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <!--Video Box-->
                    <div class="video-box">
                        <div class="image">
                            <h4>Garlic Tomato Bruschetta</h4>
                            <img src="{{ asset('frontend') }}/images/clients/entertainment-2.jpeg" alt="" />
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span
                                    class="flaticon-media-play-symbol"><i class="ripple"></i></span></a>
                        </div>
                    </div>
                </div>

                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <!--Video Box-->
                    <div class="video-box">
                        <div class="image">
                            <h4>Pressure-Cooker Chicken <br> Enchilada Soup</h4>
                            <img src="{{ asset('frontend') }}/images/clients/entertainment-4.jpeg" alt="" />
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span
                                    class="flaticon-media-play-symbol"><i class="ripple"></i></span></a>
                        </div>
                    </div>
                </div>

                <!-- Column -->
                <div class="column col-lg-6 col-md-6 col-sm-12">
                    <!--Video Box-->
                    <div class="video-box">
                        <div class="image">
                            <h4>Garlic Tomato Bruschetta</h4>
                            <img src="{{ asset('frontend') }}/images/main-slider/slider-2.jpeg" alt="" />
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span
                                    class="flaticon-media-play-symbol"><i class="ripple"></i></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Video Section -->


    <!-- Popular Recipes Section -->
    <section class="popular-recipes-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="clearfix">
                    <div class="pull-left">
                        <h2>Our Populer Courses</h2>
                        <div class="text">Indulge in the courses that have captivated our audience, each one a delightful
                            journey through flavors and culinary techniques
                        </div>
                    </div>
                    <div class="pull-right">
                        <a href="{{ route('course') }}" class="theme-btn btn-style-one"><span class="txt">See all
                                Post</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="outer-container">
            <div class="row clearfix">

                @foreach ($allCourse as $course)
                    <!-- Recipes Block -->
                    <div class="recipes-block style-two col-lg-3 col-md-6 col-sm-12 ">
                        <div class="inner-box border">
                            <div class="image">
                                <a href="{{ route('course.details', $course->slug) }}"><img
                                        src="{{ asset($course->image) }}" alt=""></a>
                            </div>
                            <div class="lower-content">
                                <div class="category">
                                    {{ $course->categories->title }}
                                </div>
                                <h4><a
                                        href="{{ route('course.details', $course->slug) }}">{{ substr(strip_tags($course->title), 0, 25) }}</a>
                                </h4>
                                <div class="text">{{ substr(strip_tags($course->description), 0, 50) }}</div>
                                <ul class="post-meta">
                                    <li><span
                                            class="icon flaticon-clock-3"></span>{{ $course->created_at->format('d M Y') }}
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>
    <!-- End Popular Recipes Section -->




    <!-- Subscribe Section -->
    <x-subscription-section></x-subscription-section>
    <!-- End Subscribe Section -->
@endsection
