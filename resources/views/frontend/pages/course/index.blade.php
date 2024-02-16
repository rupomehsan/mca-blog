@extends('layouts.frontend')
@section('content')
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/10.jpg)">
        <div class="auto-container">
            <h1>Our Courses</h1>
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
    <section class="popular-recipes-section style-three recipes-three-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title">
                        <div class="clearfix">
                            <div class="text-center">
                                <h2>Populer Course </h2>
                                <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt
                                    ut</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-12 recipes-block">
                    <div class="inner-box">
                        <div class="image">
                            <a href="{{ route('course.details', 'slug') }}"><img
                                    src="{{ asset('frontend') }}/images/resource/recipe-1.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img
                                        src="{{ asset('frontend') }}/images/resource/author-3.jpg" alt="" /></a>
                            </div>
                            <div class="category">CHICKEN</div>
                            <h4><a href="{{ route('course.details', 'slug') }}">Pressure-Cooker Beef Short Ribs with
                                    Chutney</a></h4>
                            <div class="text">Discover a sleighload of tasty snacks that are just right for holiday
                                feasting. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ex dolor
                                maxime dolores inventore quae.</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                            </ul>
                        </div>
                    </div>
                    <div class="inner-box">
                        <div class="image">
                            <a href="{{ route('course.details', 'slug') }}"><img
                                    src="{{ asset('frontend') }}/images/resource/recipe-2.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><img src="{{ asset('frontend') }}/images/resource/author-3.jpg"
                                    alt="" /></div>
                            <div class="category">FEATURED COLLECTION</div>
                            <h4><a href="{{ route('course.details', 'slug') }}">Cold-Weather Weeknight Dinners</a></h4>
                            <div class="text">Discover a sleighload of tasty snacks that are just right for holiday
                                feasting. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ex dolor
                                maxime dolores inventore quae.</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                            </ul>
                        </div>
                    </div>
                    <div class="inner-box">
                        <div class="image">
                            <a href="{{ route('course.details', 'slug') }}"><img
                                    src="{{ asset('frontend') }}/images/resource/recipe-3.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img
                                        src="{{ asset('frontend') }}/images/resource/author-3.jpg" alt="" /></a>
                            </div>
                            <div class="category">DINNER</div>
                            <h4><a href="{{ route('course.details', 'slug') }}">Hamburger Steak with Onions and Gravy</a>
                            </h4>
                            <div class="text">Discover a sleighload of tasty snacks that are just right for holiday
                                feasting. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ex dolor
                                maxime dolores inventore quae.</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                            </ul>
                        </div>
                    </div>
                    <div class="inner-box">
                        <div class="image">
                            <a href="{{ route('course.details', 'slug') }}"><img
                                    src="{{ asset('frontend') }}/images/resource/recipe-4.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img
                                        src="{{ asset('frontend') }}/images/resource/author-3.jpg" alt="" /></a>
                            </div>
                            <div class="category">LUNCH</div>
                            <h4><a href="{{ route('course.details', 'slug') }}">Pressure-Cooker Beef Short Ribs with
                                    Chutney</a></h4>
                            <div class="text">Discover a sleighload of tasty snacks that are just right for holiday
                                feasting. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ex dolor
                                maxime dolores inventore quae.</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                            </ul>
                        </div>
                    </div>
                    <div class="inner-box">
                        <div class="image">
                            <a href="{{ route('course.details', 'slug') }}"><img
                                    src="{{ asset('frontend') }}/images/resource/recipe-5.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img
                                        src="{{ asset('frontend') }}/images/resource/author-3.jpg" alt="" /></a>
                            </div>
                            <div class="category">DINNER</div>
                            <h4><a href="{{ route('course.details', 'slug') }}">Pressure-Cooker Beef Short Ribs with
                                    Chutney</a></h4>
                            <div class="text">Discover a sleighload of tasty snacks that are just right for holiday
                                feasting. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ex dolor
                                maxime dolores inventore quae.</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                            </ul>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="recipes.html" class="theme-btn btn-style-one"><span class="txt">Load More</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Popular Recipes Section -->

    <!-- Entertaining Section -->
    <section class="entertaining-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2>Most Favourited Recipes</h2>
            </div>

            <div class="row clearfix">

                <!-- Entertaining Block -->
                <div class="entertaining-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="{{ route('course.details', 'slug') }}"><img
                                    src="{{ asset('frontend') }}/images/resource/entertaining-1.jpg"
                                    alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><span class="icon "></span>21 Jan ,2020</li>
                                <li><span class="icon flaticon-comment"></span>4</li>
                                <li><span class="icon flaticon-heart"></span>5</li>
                            </ul>
                            <h4><a href="{{ route('course.details', 'slug') }}">Pop-Tarts Dropping New Pretzel Flavors
                                    Nationwide</a></h4>
                            <a href="{{ route('course.details', 'slug') }}" class="theme-btn read-more">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Entertaining Block -->
                <div class="entertaining-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="{{ route('course.details', 'slug') }}"><img
                                    src="{{ asset('frontend') }}/images/resource/entertaining-2.jpg"
                                    alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><span class="icon "></span>21 Jan ,2020</li>
                                <li><span class="icon flaticon-comment"></span>4</li>
                                <li><span class="icon flaticon-heart"></span>5</li>
                            </ul>
                            <h4><a href="{{ route('course.details', 'slug') }}">The Cosmic Crisp Apple Is Here and We’re
                                    Already Obsessed</a>
                            </h4>
                            <a href="{{ route('course.details', 'slug') }}" class="theme-btn read-more">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Entertaining Block -->
                <div class="entertaining-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="{{ route('course.details', 'slug') }}"><img
                                    src="{{ asset('frontend') }}/images/resource/entertaining-3.jpg"
                                    alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><span class="icon "></span>21 Jan ,2020</li>
                                <li><span class="icon flaticon-comment"></span>4</li>
                                <li><span class="icon flaticon-heart"></span>5</li>
                            </ul>
                            <h4><a href="{{ route('course.details', 'slug') }}">Good Grief! 9 Ideas for a Charlie Brown
                                    Christmas Party</a>
                            </h4>
                            <a href="{{ route('course.details', 'slug') }}" class="theme-btn read-more">Read More</a>
                        </div>
                    </div>
                </div>

                <!-- Entertaining Block -->
                <div class="entertaining-block col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="{{ route('course.details', 'slug') }}"><img
                                    src="{{ asset('frontend') }}/images/resource/entertaining-4.jpg"
                                    alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <ul class="post-meta">
                                <li><span class="icon "></span>21 Jan ,2020</li>
                                <li><span class="icon flaticon-comment"></span>4</li>
                                <li><span class="icon flaticon-heart"></span>5</li>
                            </ul>
                            <h4><a href="{{ route('course.details', 'slug') }}">How to Remove Sulfites from Wine the Easy
                                    Way</a></h4>
                            <a href="{{ route('course.details', 'slug') }}" class="theme-btn read-more">Read More</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Entertaining Section -->

    <!-- Subscribe Section -->
    <section class="subscribe-section" style="background-image: url(images/background/9.png)">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <h1>Subscribe to the best <br> recipes feed.</h1>
                    <!-- Subscribe Form -->
                    <div class="subscribe-form">
                        <form method="post" action="https://gico.io/spcica/contact.html">
                            <div class="form-group clearfix">
                                <input type="email" name="email" value="" placeholder="Enter your email"
                                    required>
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
                    <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-1.jpg"
                            alt=""></figure>
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
                    <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-2.jpg"
                            alt=""></figure>
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
                    <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-3.jpg"
                            alt=""></figure>
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
                    <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-4.jpg"
                            alt=""></figure>
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
                    <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-5.jpg"
                            alt=""></figure>
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
                    <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-6.jpg"
                            alt=""></figure>
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
                    <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-1.jpg"
                            alt=""></figure>
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
                    <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-2.jpg"
                            alt=""></figure>
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
                    <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-3.jpg"
                            alt=""></figure>
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
                    <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-4.jpg"
                            alt=""></figure>
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
                    <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-5.jpg"
                            alt=""></figure>
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
                    <figure class="image-box"><img src="{{ asset('frontend') }}/images/resource/instagram-6.jpg"
                            alt=""></figure>
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