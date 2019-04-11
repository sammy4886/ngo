@extends('frontend.layouts.app')



@section('content')



<!-- page-title -->
<section class="page-title centred" style="background-image: url(images/background/page-title.jpg);">
    <div class="container">
        <div class="content-box">
            <div class="title">Mission and Vision</div>
            <ul class="bread-crumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>About Us</li>
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
                        <div class="content-style-one">
                            <div class="inner-title">Mission</div>
                            <div class="text">
                                <p>“To empower marginalized and hard to reach section of communities and create opportunities for women, girls, youth and local governments to develop the skills and resources needed for the upliftment of society.” </p>
                            </div>
                        </div>
                        <div class="content-style-two">
                            <div class="inner-title">Vision</div>
                            <div class="text">
                                <p> Transform lives towards a healthy, prosperous and peaceful society and nation.</p>
                            </div>
                        </div>
                        <div class="content-style-three">
                            <div class="inner-title">Norms and Values</div>
                            <div class="text">
                                <p><b>CUSUN</b>believes in peace, sustainability, integrity, development, transparency, equity, inclusive participation and good governance as the implementation process of development activities. </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- contact-section end -->

@endsection
