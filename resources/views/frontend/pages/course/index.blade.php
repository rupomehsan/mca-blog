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
                    @foreach ($courses as $course)
                        <div class="inner-box">
                            <div class="image">
                                <a href="{{ route('course.details', $course->slug) }}"><img
                                        src="{{ asset($course->image) }}" alt="" /></a>
                            </div>
                            <div class="lower-content">

                                <div class="category">{{ $course->categories->title }}</div>
                                <h4><a href="{{ route('course.details', $course->slug) }}">{{ $course->title }}</a></h4>
                                <ul class="post-meta">
                                    <li><span
                                            class="icon flaticon-clock-3"></span>{{ $course->created_at->format('d F, Y') }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-center">
                {{ $courses->links() }}
            </div>
        </div>
    </section>
    <!-- End Popular Recipes Section -->
@endsection
