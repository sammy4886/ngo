
@extends('frontend.layouts.app')

@section('title','contact-us')

@section('content')


<!-- page-title -->
    <section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
        <div class="container">
            <div class="content-box">
                <div class="title">Contact Us</div>
                <ul class="bread-crumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- contact-section -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="inner-content">



                        <div class="contact-form-area">
                            <form id="contact-form" name="contact_form" class="default-form" action="http://html.tonatheme.com/2019/Aculia/inc/sendmail.php" method="post">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" name="form_name" required="">
                                </div>
                                <div class="form-group">
                                    <label>Your Email</label>
                                    <input type="email" name="form_email" required="">
                                </div>
                                <div class="form-group">
                                    <label>Your Phone</label>
                                    <input type="text" name="form_subject" required="">
                                </div>
                                <div class="form-group">
                                    <label>Your Message</label>
                                    <textarea name="form_message" required=""></textarea>
                                </div>
                                <div class="contact-button">
                                    <button type="submit" class="theme-btn" data-loading-text="Please wait...">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-column">
                    <div class="sidebar-content">
                        <div class="single-item">
                            <h4>Address</h4>
                            <div class="text">Durga Bhagawati Rural Municipality-3 ,Rautahat, Nepal</div>
                        </div>
                        <div class="single-item">
                            <h4>Contact information</h4>
                            <div class="text">
                                <p>Telephone:  +977-055-400050, +977-9851075205 (Mobile)</p>
                                <p>Email:  cusun.nepal@gmail.com </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->


@endsection
