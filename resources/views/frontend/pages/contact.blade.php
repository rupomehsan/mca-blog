@extends('layouts.frontend')
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/14.jpg)">
        <div class="auto-container">
            <h1>Contact us</h1>
        </div>
    </section>
    <!--End Page Title-->
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
    <!-- Contact Page Container -->
    <div class="contact-page-container">
        <div class="pattern-layer" style="background-image:url({{ asset('frontend') }}/images/background/16.png)"></div>
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Info Column -->
                <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <h2>Get in touch <br> and let us know how <br> we can help.</h2>
                        </div>
                        <ul class="contact-info-list">
                            <li>Address : {{ $web_settings['address'] }}</li>
                            <li>Email : {{ $web_settings['gmail'] }}</li>
                            <li>Phone : {{ $web_settings['contact number'] }}</li>
                        </ul>
                        <div class="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7300.5379791342975!2d90.37354294082226!3d23.809032050550258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c12a141a4435%3A0x77a48c000c7ef95b!2sSection%2010%2C%20Dhaka%201216!5e0!3m2!1sen!2sbd!4v1709298209460!5m2!1sen!2sbd"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">

                        <!-- Contact Form -->
                        <div class="contact-form" id="contactForm">

                            <!-- Contact Form -->
                            <form method="post" @submit.prevent="submitHandler" id="contact-form">


                                <div class="form-group">
                                    <input type="text" name="subject" placeholder="Subject"
                                        :class="{ 'border-danger': errorMessage.subject }">
                                    <p class="text-danger">@{{ errorMessage.subject }}</p>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Name"
                                        :class="{ 'border-danger': errorMessage.name }">
                                    <p class="text-danger">@{{ errorMessage.name }}</p>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="email" placeholder="Email"
                                        :class="{ 'border-danger': errorMessage.email }">
                                    <p class="text-danger">@{{ errorMessage.email }}</p>
                                </div>

                                <div class="form-group">
                                    <textarea class="darma" name="message" placeholder="Type Your Message"
                                        :class="{ 'border-danger': errorMessage.message }"></textarea>
                                    <p class="text-danger">@{{ errorMessage.message }}</p>
                                </div>

                                <div class="form-group text-center">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span
                                            class="txt">Submit</span>
                                    </button>
                                </div>

                            </form>

                        </div>
                        <!-- End Contact Form -->

                    </div>
                </div>

            </div>
        </div>
    </div>
    <hr>
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
            el: '#contactForm',
            data: () => ({
                errorMessage: {
                    subject: '',
                    name: '',
                    email: '',
                    message: ''
                },
            }),
            methods: {
                async submitHandler() {
                    try {
                        const formData = new FormData(event.target);
                        const response = await axios.post('api/v1/contactuses', formData);
                        if (response.data.status == 'success') {
                            toastr.success(response.data.message);
                            document.getElementById('contact-form').reset();
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
                }
            }
        })
    </script>
@endpush
