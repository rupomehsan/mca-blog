@extends('layouts.frontend')
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/12.png)">
        <div class="auto-container">
            <h1>Blog Details</h1>
        </div>
    </section>
    <!--End Page Title-->
    {{-- @dump($singleBlog); --}}
    <!--Sidebar Page Container-->
    <div class="sidebar-page-container recipes-details-area">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Side -->
                <div class="content-side col-lg-12 col-md-12 col-sm-12">
                    <div class="recipe-detail">
                        <div class="inner-box">
                            <div class="image">
                                <img class="img-fluid " style="max-height: 500px;object-fit:cover"
                                    src="{{ asset($singleBlog->thumbnail_image) }}" alt="" />
                            </div>
                            <div class="content" style="background-image:url(images/background/13.png)">

                                <div class="category">
                                    @foreach ($singleBlog->categories as $item)
                                        {{ $item->title }},
                                    @endforeach
                                </div>
                                <h2>{{ $singleBlog->title }}</h2>
                                <div class="post"> <span></span>
                                </div>


                                <ul class="post-meta">

                                    <li><span
                                            class="icon flaticon-clock-3"></span>{{ $singleBlog->created_at->format('D,F Y ') }}
                                    </li>
                                    <li><span class="icon flaticon-business-and-finance"></span>Created By : Admin</li>
                                    <li><span class="icon flaticon-eye"></span>{{ $singleBlog->view_count }} Views</li>
                                </ul>
                            </div>


                            <div class="row clearfix">

                                <div class="column col-lg-12">

                                    <div class="my-tab">
                                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill"
                                                    href="#pills-home" role="tab" aria-controls="pills-home"
                                                    aria-selected="true">Description</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                                    href="#pills-profile" role="tab" aria-controls="pills-profile"
                                                    aria-selected="false">See Video</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill"
                                                    href="#commentSection" role="tab" aria-controls="pills-contact"
                                                    aria-selected="false">Comments</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                                aria-labelledby="pills-home-tab">
                                                <div class="row">
                                                    {!! $singleBlog->description !!}
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                                aria-labelledby="pills-profile-tab">
                                                <!-- Video Boxed -->
                                                <div class="video-boxed">
                                                    @php
                                                        $embeddedUrl = '';
                                                        if ($singleBlog->url) {
                                                            $originalUrl = $singleBlog->url;
                                                            $parsedUrl = parse_url($originalUrl);
                                                            parse_str($parsedUrl['query'], $queryParams);
                                                            $videoId = $queryParams['v'];
                                                            $embeddedUrl = "https://www.youtube.com/embed/{$videoId}";
                                                        }
                                                    @endphp

                                                    <!-- Video Box Two -->
                                                    <div class="video-box-two">
                                                        <div class="image">
                                                            <img src="{{ asset($singleBlog->thumbnail_image) }}"
                                                                alt="" />
                                                            <a href="{{ $embeddedUrl }}"
                                                                class="lightbox-image overlay-box"><span
                                                                    class="flaticon-media-play-symbol"><i
                                                                        class="ripple"></i></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--post-share-options-->
                                                {{-- <div class="post-share-options">
                                                    <div class="post-share-inner clearfix">
                                                        <div class="pull-left tags"><span class="fa fa-share"></span><a
                                                                href="#">Facebook .</a> <a href="#">Twitter
                                                                .</a> <a href="#">Linkein .</a> <a
                                                                href="#">Pinterest .</a>
                                                            <a href="#">Instragram</a>
                                                        </div>
                                                        <div class="pull-right">
                                                            <div class="save"><span
                                                                    class="icon flaticon-bookmark"></span>Save Recipe</div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <div class="tab-pane fade" id="commentSection" role="tabpanel"
                                                aria-labelledby="pills-contact-tab">
                                                <!-- Comment Form -->
                                                <div class="comment-form" id="commentSection">
                                                    <div class="group-title">
                                                        <h2>leave a Reply</h2>
                                                    </div>
                                                    <!--Comment Form-->
                                                    <form method="post" @submit.prevent="submitHandler" id="commentForm">
                                                        <input type="hidden" name="blog_id" value="{{ $singleBlog->id }}">
                                                        <div class="row clearfix">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                                <input type="text" name="name"
                                                                    placeholder="Enter your name"
                                                                    :class="{ 'border-danger': errorMessage.name }">
                                                                <p class="text-danger">@{{ errorMessage.name }}</p>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                                <textarea class="darma" name="comment" placeholder="Type Your Message"
                                                                    :class="{ 'border-danger': errorMessage.comment }"></textarea>
                                                                <p class="text-danger">@{{ errorMessage.comment }}</p>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
                                                                <div class="clearfix">
                                                                    <div class="pull-left">
                                                                        {{-- <div class="rating">
                                                                            Your Rate :
                                                                            <span class="fa fa-star-o"></span>
                                                                            <span class="fa fa-star-o"></span>
                                                                            <span class="fa fa-star-o"></span>
                                                                            <span class="fa fa-star-o"></span>
                                                                            <span class="fa fa-star-o"></span>
                                                                        </div> --}}
                                                                    </div>
                                                                    <div class="pull-right">
                                                                        <button class="theme-btn comment-btn"
                                                                            type="submit" name="submit-form">Post
                                                                            comment</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- End Comment Form -->

                                                <!-- Comments Area -->
                                                <div class="comments-area">

                                                    <div class="comment-box" v-for="bcomment in blogComments"
                                                        :key="bcomment.id">
                                                        <div class="comment">
                                                            <div class="author-thumb"><img src="/dummy.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="comment-info clearfix">
                                                                {{-- <div class="comment-time">1 months ago · 0 Likes</div> --}}
                                                            </div>
                                                            <div class="font-weight-bold text-capitalize">
                                                                @{{ bcomment.name }}</div>
                                                            <div class="text">@{{ bcomment.comment }}</div>
                                                            {{-- <a class="theme-btn reply-btn" href="#"><span
                                                                    class="icon fa fa-reply"></span> Reply</a>
                                                            <a class="theme-btn heart-btn" href="#"><span
                                                                    class="icon fa fa-heart"></span> Like</a> --}}
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>




                            <!-- Related Items -->
                            <div class="related-items">
                                <h4>You may also like</h4>

                                <div class="row clearfix">
                                    @foreach ($relatedBlogs as $blog)
                                        <!-- Recipes Block -->
                                        <div class="recipes-block style-two col-lg-4 col-md-6 col-sm-12">
                                            <div class="inner-box">
                                                <div class="image">
                                                    <a href="{{ route('blog.details', $blog->slug) }}"><img
                                                            src="{{ asset($blog->thumbnail_image) }}"
                                                            alt="" /></a>
                                                </div>
                                                <div class="lower-content">

                                                    <div class="category">
                                                        @foreach ($blog->categories as $item)
                                                            {{ $item->title }},
                                                        @endforeach
                                                    </div>
                                                    <h4><a
                                                            href="{{ route('blog.details', $blog->slug) }}">{{ substr($blog->title, 0, 25) . '....' }}</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>

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

@push('custom-css')
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endpush

@push('custom-js')
    <script src="{{ asset('frontend/js/vue.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script type="text/javascript">
        // Default Configuration
        $(document).ready(function() {
            toastr.options = {
                'closeButton': true,
                'debug': false,
                'newestOnTop': false,
                'progressBar': false,
                'positionClass': 'toast-top-right',
                'preventDuplicates': false,
                'showDuration': '1000',
                'hideDuration': '1000',
                'timeOut': '5000',
                'extendedTimeOut': '1000',
                'showEasing': 'swing',
                'hideEasing': 'linear',
                'showMethod': 'fadeIn',
                'hideMethod': 'fadeOut',
            }
        });
    </script>

    <script>
        new Vue({
            el: '#commentSection',
            data: () => ({
                errorMessage: {
                    comment: '',
                    name: '',
                },
                blogComments: []
            }),
            created: async function() {
                this.get_blog_comment_by_blog_id()
            },
            methods: {
                async submitHandler() {
                    try {
                        const formData = new FormData(event.target);
                        const response = await axios.post('/api/v1/blog-comment', formData);
                        if (response.data.status == 'success') {
                            toastr.success(response.data.message);
                            document.getElementById('commentForm').reset();
                            this.get_blog_comment_by_blog_id()
                        }
                    } catch (error) {
                        if (error.response) {
                            let errResponse = error?.response?.data;
                            if (errResponse.status == 'validation_error') {
                                Object.keys(this.errorMessage).forEach(field => {
                                    this.errorMessage[field] = '';
                                });
                                let errFields = errResponse.errors;
                                for (let field in errFields) {
                                    if (this.errorMessage.hasOwnProperty(field)) {
                                        this.errorMessage[field] = errFields[field][0];
                                    }
                                }
                            }
                        }
                    }
                },

                get_blog_comment_by_blog_id: async function() {
                    let currentUrl = window.location.href;
                    let parts = currentUrl.split('/');
                    let slug = parts[parts.length - 1];
                    let response = await axios.get(`/api/v1/get-blog-comment-by-blog-id/${slug}`)
                    response = response.data
                    if (response.status == "success") {
                        this.blogComments = response.data
                    }

                }

            }
        })
    </script>
@endpush
