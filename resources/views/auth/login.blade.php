@extends('layouts.frontend')
@section('content')
<!-- Page Title -->
<section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/17.png)">
    <div class="auto-container">
        <h1>Admin login</h1>
    </div>
</section>
<!-- End Page Title -->

<!-- Login Container -->
<div class="login-container margin">
    <div class="top-layer" style="background-image:url(images/background/20.png)"></div>
    <div class="bottom-layer" style="background-image:url(images/background/21.png)"></div>
    <div class="auto-container">
        <div class="inner-container">

            <div class="image">
                <img src="{{ asset('frontend') }}/images/resource/login.jpg" alt="" />

                <!-- Login Form -->
                <div class="login-form">
                    <div class="pattern-layer" style="background-image:url(images/background/18.png)"></div>
                    <div class="pattern-layer-2" style="background-image:url(images/background/19.png)"></div>
                    <div id="errorMsgShow">

                    </div>


                    <div class="fill">Please enter your valid creadentials for login</div>

                    <!-- Register Form -->
                    <form method="post" onsubmit="submitHandler()">

                        <div class="form-group">
                            <input type="text" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" placeholder="Enter your password" required>
                        </div>

                        <div class="form-group">
                            <div class="check-box"><input type="checkbox" name="shipping-option" id="account-option">
                                &ensp; <label for="account-option">Remember me</label> <a href="#">Forgot
                                    password?</a></div>
                        </div>


                        <div class="form-group">
                            <button class="theme-btn btn-style-one" type="submit" name="submit-form" id="spiner">
                                <span class="txt">Login</span>
                                <span class="spinner-border spinner-border-sm d-none mx-2" role="status"
                                    aria-hidden="true"></span>
                                <span class="d-none">Loading...</span>
                            </button>
                        </div>

                    </form>
                    <script>
                        function submitHandler() {
                                event.preventDefault()

                                var spiner = document.getElementById('spiner')
                                loadHandler(spiner, response = false)

                                fetch('login', {
                                        method: "POST",
                                        body: new FormData(event.target),
                                        headers: {
                                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                                        }
                                    })
                                    .then(res => res.json())
                                    .then(data => {

                                        if (data.status == "error") {
                                            let target = document.getElementById('errorMsgShow')
                                            target.innerHTML = `
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <strong>Error!</strong> ${data.message}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            `;

                                            loadHandler(spiner, response = true)
                                        }

                                        if (data.access_token) {
                                            localStorage.setItem('token', data.access_token)
                                            window.location.href = 'admin'
                                        }

                                    })
                            }

                            function loadHandler(target, response) {
                                if (response) {
                                    target.removeAttribute('disabled')
                                    target.children[0].classList.remove('d-none')
                                    target.children[1].classList.add('d-none')
                                    target.children[2].classList.add('d-none')
                                } else {
                                    target.setAttribute('disabled', true)
                                    target.children[0].classList.add('d-none')
                                    target.children[1].classList.remove('d-none')
                                    target.children[2].classList.remove('d-none')
                                }

                            }
                    </script>

                </div>
                <!-- End Register Form -->

            </div>

        </div>
    </div>
</div>
<!-- End Register Container -->

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
