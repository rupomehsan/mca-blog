@extends('layouts.frontend')
@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url({{ asset('frontend') }}/images/background/10.jpg)">
    <div class="auto-container">
        <h1>About Us</h1>
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



<!-- Founder Section -->
<section class="founder-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="image-column col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
                <div class="inner-column">
                    <div class="image">
                        <img src="{{ asset('frontend') }}/images/clients/about-us.jpeg" alt="" style="height: 500px;
                            width: 400px;
                            object-fit: cover;" />
                        <div class="year">15 <span>Years</span></div>
                    </div>
                </div>
            </div>
            <!-- Content Column -->
            <div class="content-column col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <!-- Sec Title -->
                    <div class="sec-title text-center">
                        <div class="title">About our CEO</div>
                        <h2> Nazrul Islam </h2>
                    </div>
                    <div class="bold-text text-center">Welcome to the wonderful world of beets! I am delighted you are
                        here.</div>
                    <div class="text text-justify">

                        <p>Chef Nazrul Islam is a seasoned culinary professional with a diverse
                            background and extensive
                            experience in the culinary arts. His journey in the world of gastronomy began with his
                            education, completing his secondary education in 1986, followed by higher secondary
                            education in 1992. He furthered his academic pursuits by obtaining a Bachelor of Arts degree
                            in 1994.</p>

                        <p>Fuelled by his passion for cooking, Chef Nazrul embarked on a series of culinary courses to
                            hone his skills and expertise. He completed Level 1 and Level 2 chef courses, as well as F&B
                            production Level 3 training. Additionally, he earned certifications as a trainer and
                            assessor accredited by NSDA (National Skill Development Authority) and BTEB (Bangladesh
                            Technical Education Board).</p>

                        <p>Chef Nazrul prioritized safety and hygiene in food preparation, undergoing rigorous training
                            in food safety Levels 1 & 2, personal hygiene, basic food hygiene, and HACCP (Hazard
                            Analysis and Critical Control Points).</p>

                        <p>Recognizing the importance of providing excellent customer service, Chef Nazrul also
                            attained proficiency in customer service skills across Levels 1 through 4.</p>

                        <p>Throughout his illustrious career, Chef Nazrul has held various significant roles, each
                            contributing to his wealth of experience and culinary expertise. Notable positions include
                            Executive Chef at Deshi Bistro in 2024 and Chef Trainer & Executive Chef at PCA
                            (Professional Culinary Academy) from 2022 to 2024.</p>

                        <p>His international experiences include serving as a Butcher Chef at Uno (Al Diyar Al Qataria)
                            from 2016 to 2021, on-call positions at Rotana and Nova Park in Sharjah, and a Station Chef
                            at Spinneys Dubai. He has also held positions such as Head Chef at Lazziz Shawarma, Chef de
                            Cuisine at D'Mex Restaurant, and Chef at Il Cafe de Roma Lavazza.</p>

                        <p>Prior to his international ventures, Chef Nazrul gained valuable experience as a Line Chef
                            at SV Catering from 2000 to 2005, a Commis Chef in Thailand in 1989, and a Line Chef at
                            Danson Catering in Kuala Lumpur in 1992.</p>

                        <p>Chef Nazrul Islam's unwavering dedication, combined with his extensive culinary knowledge
                            and international exposure, continues to inspire and elevate the culinary industry.</p>
                    </div>
                </div>
            </div>

            <!-- Image Column -->


        </div>
    </div>
</section>
<!-- End Founder Section -->
<hr>
@endsection
