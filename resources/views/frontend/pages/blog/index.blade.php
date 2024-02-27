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
                <div class="pull-left">
                    <h2>Populer Recipes Posts</h2>
                    <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt ut</div>
                </div>
                <div class="pull-right">
                    <a href="recipes.html" class="theme-btn btn-style-one"><span class="txt">See all Post</span></a>
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

<!-- Call To Action Section -->
<section class="call-to-action-section" style="background-image:url({{ asset('frontend') }}/images/background/2.jpg)">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Column -->
            <div class="column col-lg-6 col-md-12 col-sm-12">
                <!-- Sec Title -->
                <div class="sec-title light">
                    <div class="title">Pizza</div>
                    <h2>Your Complete Christmas <br> Dinner Planning Guide</h2>
                    <div class="text">Special occasions call for extraordinary food. Whether your gathering is big or
                        small, casual or formal, here's everything you need to create a crowd-pleasing holiday feast
                    </div>
                </div>
                <a href="recipes-2.html" class="theme-btn btn-style-two"><span class="txt">Check Recipe</span></a>
            </div>

            <!-- Column -->
            <div class="column col-lg-6 col-md-12 col-sm-12">
                <!-- Sec Title -->
                <div class="sec-title light">
                    <div class="title">Breakfast</div>
                    <h2>How to Meal Prep Breakfast Sandwiches for the <br> Week Ahead</h2>
                    <div class="text">Special occasions call for extraordinary food. Whether your gathering is big or
                        small, casual or formal, here's everything you need to create a crowd-pleasing holiday feast
                    </div>
                </div>
                <a href="recipes-2.html" class="theme-btn btn-style-two"><span class="txt">Check Recipe</span></a>
            </div>

        </div>
    </div>
</section>
<!-- End Call To Action Section -->

<!-- Subscribe Section -->
<section class="subscribe-section" style="background-image: url({{ asset('frontend') }}/images/background/9.png)">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Column -->
            <div class="column col-lg-6 col-md-12 col-sm-12">
                <h1>Subscribe to the best <br> recipes feed.</h1>
                <!-- Subscribe Form -->
                <div class="subscribe-form">
                    <form method="post" action="https://gico.io/spcica/contact.html">
                        <div class="form-group clearfix">
                            <input type="email" name="email" value="" placeholder="Enter your email" required>
                            <button type="submit" class="theme-btn send-btn flaticon-paper-plane-2"></button>
                        </div>
                    </form>
                </div>
                <div class="inbox">Get recipes, tips, and news delivered to your inbox.</div>
            </div>

            <!-- Column -->
            <div class="column col-lg-6 col-md-12 col-sm-12">
                <h1>Visit our store</h1>
                <div class="bold-text">Here you’ll find a carefully chosen kitchen inventory.</div>
                <ul class="subscribe-list">
                    <li>Taste of Home is America's #1 <br> cooking magazine</li>
                    <li>Midnight Chocolate <br> Midnight Chocolate 2% <br> Very Berry Strawberry</li>
                </ul>
            </div>

        </div>
    </div>
</section>
<!-- End Subscribe Section -->

<!-- Instagram Section -->
<section class="instagram-section">
    <div class="auto-container">
        <!-- Title Box -->
        <div class="title-box">
            <div class="profile"><span class="fa fa-pinterest"></span> Follow On Pinterest </div>
        </div>
    </div>

    <div class="instagram-carousel owl-carousel owl-theme">

        <!-- Instagram Block -->
        <div class="instagram-block">
            <div class="inner-box">
                <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-1.jpg" alt="">
                </figure>
                <!--Overlay Box-->
                <div class="overlay-box">
                    <div class="overlay-inner">
                        <div class="content">
                            <a href="images/resource/instagram-1.jpg" data-fancybox="instagram" data-caption=""
                                class="lightbox-image option-btn" title="Image Caption Here"
                                data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Block -->
        <div class="instagram-block">
            <div class="inner-box">
                <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-2.jpg" alt="">
                </figure>
                <!--Overlay Box-->
                <div class="overlay-box">
                    <div class="overlay-inner">
                        <div class="content">
                            <a href="images/resource/instagram-2.jpg" data-fancybox="instagram" data-caption=""
                                class="lightbox-image option-btn" title="Image Caption Here"
                                data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Block -->
        <div class="instagram-block">
            <div class="inner-box">
                <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-3.jpg" alt="">
                </figure>
                <!--Overlay Box-->
                <div class="overlay-box">
                    <div class="overlay-inner">
                        <div class="content">
                            <a href="images/resource/instagram-3.jpg" data-fancybox="instagram" data-caption=""
                                class="lightbox-image option-btn" title="Image Caption Here"
                                data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Block -->
        <div class="instagram-block">
            <div class="inner-box">
                <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-4.jpg" alt="">
                </figure>
                <!--Overlay Box-->
                <div class="overlay-box">
                    <div class="overlay-inner">
                        <div class="content">
                            <a href="images/resource/instagram-4.jpg" data-fancybox="instagram" data-caption=""
                                class="lightbox-image option-btn" title="Image Caption Here"
                                data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Block -->
        <div class="instagram-block">
            <div class="inner-box">
                <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-5.jpg" alt="">
                </figure>
                <!--Overlay Box-->
                <div class="overlay-box">
                    <div class="overlay-inner">
                        <div class="content">
                            <a href="images/resource/instagram-5.jpg" data-fancybox="instagram" data-caption=""
                                class="lightbox-image option-btn" title="Image Caption Here"
                                data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Block -->
        <div class="instagram-block">
            <div class="inner-box">
                <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-6.jpg" alt="">
                </figure>
                <!--Overlay Box-->
                <div class="overlay-box">
                    <div class="overlay-inner">
                        <div class="content">
                            <a href="images/resource/instagram-6.jpg" data-fancybox="instagram" data-caption=""
                                class="lightbox-image option-btn" title="Image Caption Here"
                                data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Block -->
        <div class="instagram-block">
            <div class="inner-box">
                <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-1.jpg" alt="">
                </figure>
                <!--Overlay Box-->
                <div class="overlay-box">
                    <div class="overlay-inner">
                        <div class="content">
                            <a href="images/resource/instagram-1.jpg" data-fancybox="instagram" data-caption=""
                                class="lightbox-image option-btn" title="Image Caption Here"
                                data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Block -->
        <div class="instagram-block">
            <div class="inner-box">
                <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-2.jpg" alt="">
                </figure>
                <!--Overlay Box-->
                <div class="overlay-box">
                    <div class="overlay-inner">
                        <div class="content">
                            <a href="images/resource/instagram-2.jpg" data-fancybox="instagram" data-caption=""
                                class="lightbox-image option-btn" title="Image Caption Here"
                                data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Block -->
        <div class="instagram-block">
            <div class="inner-box">
                <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-3.jpg" alt="">
                </figure>
                <!--Overlay Box-->
                <div class="overlay-box">
                    <div class="overlay-inner">
                        <div class="content">
                            <a href="images/resource/instagram-3.jpg" data-fancybox="instagram" data-caption=""
                                class="lightbox-image option-btn" title="Image Caption Here"
                                data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Block -->
        <div class="instagram-block">
            <div class="inner-box">
                <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-4.jpg" alt="">
                </figure>
                <!--Overlay Box-->
                <div class="overlay-box">
                    <div class="overlay-inner">
                        <div class="content">
                            <a href="images/resource/instagram-4.jpg" data-fancybox="instagram" data-caption=""
                                class="lightbox-image option-btn" title="Image Caption Here"
                                data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Block -->
        <div class="instagram-block">
            <div class="inner-box">
                <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-5.jpg" alt="">
                </figure>
                <!--Overlay Box-->
                <div class="overlay-box">
                    <div class="overlay-inner">
                        <div class="content">
                            <a href="images/resource/instagram-5.jpg" data-fancybox="instagram" data-caption=""
                                class="lightbox-image option-btn" title="Image Caption Here"
                                data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Block -->
        <div class="instagram-block">
            <div class="inner-box">
                <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-6.jpg" alt="">
                </figure>
                <!--Overlay Box-->
                <div class="overlay-box">
                    <div class="overlay-inner">
                        <div class="content">
                            <a href="images/resource/instagram-6.jpg" data-fancybox="instagram" data-caption=""
                                class="lightbox-image option-btn" title="Image Caption Here"
                                data-fancybox-group="example-gallery"><span class="fa fa-search"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<!-- End Instagram Section -->
@endsection
