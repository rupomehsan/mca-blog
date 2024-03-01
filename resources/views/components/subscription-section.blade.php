<section class="subscribe-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Column -->
            <div class="column col-lg-6 col-md-12 col-sm-12">
                <h1>Subscribe to the best <br> recipes feed.</h1>
                <!-- Subscribe Form -->
                <div class="subscribe-form">
                    <form method="post" action="#">
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

                <ul class="subscribe-list">
                    <li>Address : {{ $web_settings['address'] }} </li><br>
                    <li>Email : {{ isset($web_settings['gmail']) ? $web_settings['gmail'] : ' N/A' }}</li><br>
                    <li>Phone : {{ $web_settings['contact number'] }} </li><br>
                </ul>
            </div>

        </div>
    </div>
</section>
