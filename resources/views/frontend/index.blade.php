@extends('layouts.frontend')
@section('content')
    <!-- Banner Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-theme owl-carousel">

            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{ asset('frontend') }}/images/main-slider/2.jpg);">
                </div>
                <div class="auto-container">
                    <div class="content-box">
                        <h1>Roasted Pumpkin and Beet Salad</h1>
                        <div class="text">Lorem ipsum dolor sit amet, consectetuer <br> adipiscing elit, sed
                            tinciduntut laore dolore </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{ asset('frontend') }}/images/main-slider/3.jpg);">
                </div>
                <div class="auto-container">
                    <div class="content-box">
                        <h1>Roasted Pumpkin and Beet Salad</h1>
                        <div class="text">Lorem ipsum dolor sit amet, consectetuer <br> adipiscing elit, sed
                            tinciduntut laore dolore </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{ asset('frontend') }}/images/main-slider/4.jpg);">
                </div>
                <div class="auto-container">
                    <div class="content-box">
                        <h1>Roasted Pumpkin and Beet Salad</h1>
                        <div class="text">Lorem ipsum dolor sit amet, consectetuer <br> adipiscing elit, sed
                            tinciduntut laore dolore </div>
                    </div>
                </div>
            </div>

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
                            <h2>Md. Nazrul Islam (CEO)</h2>
                            <div class="text">Preheat oven to 325°. In a small bowl, mix the first 5 ingredients.
                                Place roast in a roasting pan, fat side up; rub with seasoning mixture.Roast 2-1/4
                                to 2-3/4 hours or until meat reaches desired doneness (for medium-rare, a
                                thermometer should read 135°; medium, 140°; medium-well, 145°). Remove roast from
                                oven; tent with foil. Let stand 15 minutes before carving.</div>
                        </div>
                        <div class="bold-text">To separate the fat from the drippings with ease, try this tool from
                            OXO ($14).</div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-5 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="{{ asset('frontend') }}/images/clients/ceo.jpeg" alt=""
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
                        <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt ut
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

                <!-- Recipes Block -->
                <div class="recipes-block style-two col-lg-3 col-md-6 col-sm-12 ">
                    <div class="inner-box border">
                        <div class="image">
                            <a href="recipes-detail.html"><img
                                    src="http://127.0.0.1:8000/frontend/images/resource/recipe-5.jpg" alt=""></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img src="images/resource/author-3.jpg"
                                        alt=""></a></div>
                            <div class="category">CHICKEN</div>
                            <h4><a href="recipes-detail.html">Pressure-Cooker Beef Short <br> Ribs with Chutney</a>
                            </h4>
                            <div class="text">Discover a sleighload of tasty snacks that are just right for holiday
                                feasting.</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipes Block -->
                <div class="recipes-block style-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box border">
                        <div class="image">
                            <a href="recipes-detail.html"><img
                                    src="http://127.0.0.1:8000/frontend/images/resource/recipe-5.jpg" alt=""></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img src="images/resource/author-3.jpg"
                                        alt=""></a></div>
                            <div class="category">CHICKEN</div>
                            <h4><a href="recipes-detail.html">Pressure-Cooker Beef Short <br> Ribs with Chutney</a>
                            </h4>
                            <div class="text">Discover a sleighload of tasty snacks that are just right for holiday
                                feasting.</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipes Block -->
                <div class="recipes-block style-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box border">
                        <div class="image">
                            <a href="recipes-detail.html"><img
                                    src="http://127.0.0.1:8000/frontend/images/resource/recipe-5.jpg" alt=""></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img src="images/resource/author-3.jpg"
                                        alt=""></a></div>
                            <div class="category">CHICKEN</div>
                            <h4><a href="recipes-detail.html">Pressure-Cooker Beef Short <br> Ribs with Chutney</a>
                            </h4>
                            <div class="text">Discover a sleighload of tasty snacks that are just right for holiday
                                feasting.</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipes Block -->
                <div class="recipes-block style-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box border">
                        <div class="image">
                            <a href="recipes-detail.html"><img
                                    src="http://127.0.0.1:8000/frontend/images/resource/recipe-5.jpg" alt=""></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img
                                        src="images/resource/author-3.jpg" alt=""></a></div>
                            <div class="category">CHICKEN</div>
                            <h4><a href="recipes-detail.html">Pressure-Cooker Beef Short <br> Ribs with Chutney</a>
                            </h4>
                            <div class="text">Discover a sleighload of tasty snacks that are just right for holiday
                                feasting.</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                            </ul>
                        </div>
                    </div>
                </div>

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
                        <div class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt ut
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

                <!-- Recipes Block -->
                <div class="recipes-block style-two col-lg-3 col-md-6 col-sm-12 ">
                    <div class="inner-box border">
                        <div class="image">
                            <a href="recipes-detail.html"><img
                                    src="http://127.0.0.1:8000/frontend/images/resource/recipe-5.jpg" alt=""></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img
                                        src="images/resource/author-3.jpg" alt=""></a></div>
                            <div class="category">CHICKEN</div>
                            <h4><a href="recipes-detail.html">Pressure-Cooker Beef Short <br> Ribs with Chutney</a>
                            </h4>
                            <div class="text">Discover a sleighload of tasty snacks that are just right for holiday
                                feasting.</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipes Block -->
                <div class="recipes-block style-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box border">
                        <div class="image">
                            <a href="recipes-detail.html"><img
                                    src="http://127.0.0.1:8000/frontend/images/resource/recipe-5.jpg" alt=""></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img
                                        src="images/resource/author-3.jpg" alt=""></a></div>
                            <div class="category">CHICKEN</div>
                            <h4><a href="recipes-detail.html">Pressure-Cooker Beef Short <br> Ribs with Chutney</a>
                            </h4>
                            <div class="text">Discover a sleighload of tasty snacks that are just right for holiday
                                feasting.</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipes Block -->
                <div class="recipes-block style-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box border">
                        <div class="image">
                            <a href="recipes-detail.html"><img
                                    src="http://127.0.0.1:8000/frontend/images/resource/recipe-5.jpg" alt=""></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img
                                        src="images/resource/author-3.jpg" alt=""></a></div>
                            <div class="category">CHICKEN</div>
                            <h4><a href="recipes-detail.html">Pressure-Cooker Beef Short <br> Ribs with Chutney</a>
                            </h4>
                            <div class="text">Discover a sleighload of tasty snacks that are just right for holiday
                                feasting.</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Recipes Block -->
                <div class="recipes-block style-two col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box border">
                        <div class="image">
                            <a href="recipes-detail.html"><img
                                    src="http://127.0.0.1:8000/frontend/images/resource/recipe-5.jpg" alt=""></a>
                        </div>
                        <div class="lower-content">
                            <div class="author-image"><a href="author-details.html"><img
                                        src="images/resource/author-3.jpg" alt=""></a></div>
                            <div class="category">CHICKEN</div>
                            <h4><a href="recipes-detail.html">Pressure-Cooker Beef Short <br> Ribs with Chutney</a>
                            </h4>
                            <div class="text">Discover a sleighload of tasty snacks that are just right for holiday
                                feasting.</div>
                            <ul class="post-meta">
                                <li><span class="icon flaticon-dish"></span>4 ingredients</li>
                                <li><span class="icon flaticon-clock-3"></span>6 Min</li>
                                <li><span class="icon flaticon-business-and-finance"></span>4 People</li>
                            </ul>
                        </div>
                    </div>
                </div>

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
                        <div class="text">Special occasions call for extraordinary food. Whether your gathering is
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
                        <h2>How to Meal Prep Breakfast Sandwiches for the <br> Week Ahead</h2>
                        <div class="text">Special occasions call for extraordinary food. Whether your gathering is
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
                            <img src="{{ asset('frontend') }}/images/resource/video-1.jpg" alt="" />
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
                            <img src="{{ asset('frontend') }}/images/resource/video-2.jpg" alt="" />
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
                            <img src="{{ asset('frontend') }}/images/resource/video-1.jpg" alt="" />
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
                            <img src="{{ asset('frontend') }}/images/resource/video-2.jpg" alt="" />
                            <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span
                                    class="flaticon-media-play-symbol"><i class="ripple"></i></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Video Section -->





    <!-- Clients Section -->
    <section class="clients-section">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>Our Partners </h2>
            </div>
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="{{ asset('frontend') }}/images/clients/1.png" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="{{ asset('frontend') }}/images/clients/2.png" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="{{ asset('frontend') }}/images/clients/3.png" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="{{ asset('frontend') }}/images/clients/4.png" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="{{ asset('frontend') }}/images/clients/5.png" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="{{ asset('frontend') }}/images/clients/1.png" alt=""></a>
                        </figure>
                    </li>
                    <li class="slide-item">
                        <figure class="image-box"><a href="#"><img
                                    src="{{ asset('frontend') }}/images/clients/2.png" alt=""></a>
                        </figure>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <!-- End Clients Section -->

    <!-- Subscribe Section -->
    <section class="subscribe-section">
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
@endsection
