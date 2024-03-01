@extends('layouts.frontend')
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/12.png)">
        <div class="auto-container">
            <h1>Course Details</h1>
        </div>
    </section>
    <!--End Page Title-->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-12 col-md-12 col-sm-12">
                    <div class="recipe-detail">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset($singleCourse->image) }}" alt="" />
                            </div>
                            <div class="content" style="background-image:url(images/background/13.png)">

                                <div class="category">{{ $singleCourse->categories->title }}</div>
                                <h2>{{ $singleCourse->title }}</h2>
                                <div class="post">{{ $singleCourse->created_at->format('F d, Y') }} <span>Created By :
                                        Admin</span></div>
                            </div>
                            <div class="row clearfix">
                                {!! $singleCourse->description !!}
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <!-- Subscribe Section -->
    <x-subscription-section></x-subscription-section>
    <!-- End Subscribe Section -->
@endsection
