@extends('Components.layout') 

@section('content')
<!-- banner section start -->
<div class="banner_section layout_padding">
    <div class="container">
        <div id="banner_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner_img"><img src="{{ asset('images/banner-img.png') }}" alt="Banner Image">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner_taital_main">
                                <h1 class="banner_taital">coffee</h1>
                                <h5 class="tasty_text">Tasty Of WebDev Cafe</h5>
                                <p class="banner_text">more-or-less normal distribution of letters, as opposed
                                    to using</p>
                                <div class="btn_main">
                                    <div class="about_bt"><a href="#">About Us</a></div>
                                    <div class="callnow_bt active"><a href="#">Call Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner_img"><img src="{{ asset('images/banner-img.png') }}" alt="Banner Image">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner_taital_main">
                                <h1 class="banner_taital">coffee</h1>
                                <h5 class="tasty_text">Tasty Of DozeCafe</h5>
                                <p class="banner_text">more-or-less normal distribution of letters, as opposed
                                    to using</p>
                                <div class="btn_main">
                                    <div class="about_bt"><a href="#">About Us</a></div>
                                    <div class="callnow_bt active"><a href="#">Call Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="banner_img"><img src="{{ asset('images/banner-img.png') }}" alt="Banner Image">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="banner_taital_main">
                                <h1 class="banner_taital">coffee</h1>
                                <h5 class="tasty_text">Tasty Of DozeCafe</h5>
                                <p class="banner_text">more-or-less normal distribution of letters, as opposed
                                    to using</p>
                                <div class="btn_main">
                                    <div class="about_bt"><a href="#">About Us</a></div>
                                    <div class="callnow_bt active"><a href="#">Call Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

<!-- banner section end -->
</div>
<!-- header section end -->
<!-- coffee section start -->
<div class="coffee_section layout_padding">
    <div class="container">
        <div class="row">
            <h1 class="coffee_taital">OUR Coffee OFFER</h1>
            <div class="bulit_icon"><img src="{{ asset('images/bulit-icon.png') }}" alt="Bullet Icon"></div>
        </div>
    </div>
    <div class="coffee_section_2">
        <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="coffee_img"><img src="{{ asset('images/img-1.png') }}"
                                        alt="Types of Coffee"></div>
                                <h3 class="types_text">TYPES OF COFFEE</h3>
                                <p class="looking_text">looking at its layout. The point of</p>
                                <div class="read_bt"><a href="#">Read More</a></div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="coffee_img"><img src="{{ asset('images/img-2.png') }}" alt="Bean Varieties">
                                </div>
                                <h3 class="types_text">BEAN VARIETIES</h3>
                                <p class="looking_text">looking at its layout. The point of</p>
                                <div class="read_bt"><a href="#">Read More</a></div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="coffee_img"><img src="{{ asset('images/img-3.png') }}"
                                        alt="Coffee & Pastry"></div>
                                <h3 class="types_text">COFFEE & PASTRY</h3>
                                <p class="looking_text">looking at its layout. The point of</p>
                                <div class="read_bt"><a href="#">Read More</a></div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="coffee_img"><img src="{{ asset('images/img-4.png') }}" alt="Coffee to Go">
                                </div>
                                <h3 class="types_text">COFFEE TO GO</h3>
                                <p class="looking_text">looking at its layout. The point of</p>
                                <div class="read_bt"><a href="#">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="coffee_img"><img src="{{ asset('images/img-1.png') }}"
                                        alt="Types of Coffee"></div>
                                <h3 class="types_text">TYPES OF COFFEE</h3>
                                <p class="looking_text">looking at its layout. The point of</p>
                                <div class="read_bt"><a href="#">Read More</a></div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="coffee_img"><img src="{{ asset('images/img-2.png') }}" alt="Bean Varieties">
                                </div>
                                <h3 class="types_text">BEAN VARIETIES</h3>
                                <p class="looking_text">looking at its layout. The point of</p>
                                <div class="read_bt"><a href="#">Read More</a></div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="coffee_img"><img src="{{ asset('images/img-3.png') }}"
                                        alt="Coffee & Pastry"></div>
                                <h3 class="types_text">COFFEE & PASTRY</h3>
                                <p class="looking_text">looking at its layout. The point of</p>
                                <div class="read_bt"><a href="#">Read More</a></div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="coffee_img"><img src="{{ asset('images/img-4.png') }}" alt="Coffee to Go">
                                </div>
                                <h3 class="types_text">COFFEE TO GO</h3>
                                <p class="looking_text">looking at its layout. The point of</p>
                                <div class="read_bt"><a href="#">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="coffee_img"><img src="{{ asset('images/img-1.png') }}"
                                        alt="Types of Coffee"></div>
                                <h3 class="types_text">TYPES OF COFFEE</h3>
                                <p class="looking_text">looking at its layout. The point of</p>
                                <div class="read_bt"><a href="#">Read More</a></div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="coffee_img"><img src="{{ asset('images/img-2.png') }}" alt="Bean Varieties">
                                </div>
                                <h3 class="types_text">BEAN VARIETIES</h3>
                                <p class="looking_text">looking at its layout. The point of</p>
                                <div class="read_bt"><a href="#">Read More</a></div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="coffee_img"><img src="{{ asset('images/img-3.png') }}"
                                        alt="Coffee & Pastry"></div>
                                <h3 class="types_text">COFFEE & PASTRY</h3>
                                <p class="looking_text">looking at its layout. The point of</p>
                                <div class="read_bt"><a href="#">Read More</a></div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="coffee_img"><img src="{{ asset('images/img-4.png') }}" alt="Coffee to Go">
                                </div>
                                <h3 class="types_text">COFFEE TO GO</h3>
                                <p class="looking_text">looking at its layout. The point of</p>
                                <div class="read_bt"><a href="#">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i class="fa fa-arrow-left"></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>

<!-- coffee section end -->
<!-- about section start -->
<div class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="about_taital">About Our Shop</h1>
                <div class="bulit_icon"><img src="{{ asset('images/bulit-icon.png') }}" alt="Bullet Icon"></div>
            </div>
        </div>
        <div class="about_section_2 layout_padding">
            <div class="image_iman"><img src="{{ asset('images/about-img.png') }}" class="about_img" alt="About Image">
            </div>
            <div class="about_taital_box">
                <h1 class="about_taital_1">Coffee Distribution</h1>
                <p class="about_text">
                    has a more-or-less normal distribution of letters, as opposed to using
                    'Content here, content here', making it look like readable English. Many desktop publishing
                    packages and web page editor has a more-or-less normal distribution of letters, as opposed to
                    using 'Content here, content here', making it look like readable English. Many desktop
                    publishing packages and web page editor.
                </p>
                <div class="readmore_btn"><a href="#">Read More</a></div>
            </div>
        </div>
    </div>
</div>

<!-- about section end -->
<!-- client section start -->
<div class="client_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="about_taital">What says customers</h1>
                <div class="bulit_icon"><img src="{{ asset('images/bulit-icon.png') }}" alt="Bullet Icon"></div>
            </div>
        </div>
        <div class="client_section_2">
            <div class="client_taital_main">
                <div class="client_left">
                    <div class="client_img"><img src="{{ asset('images/client-img1.png') }}" alt="Client Image 1">
                    </div>
                </div>
                <div class="client_right">
                    <h3 class="moark_text">Joy Moark</h3>
                    <p class="client_text">
                        now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover
                        many
                        web sites still in their infancy now use Lorem Ipsum as their default model text,
                    </p>
                </div>
            </div>
            <div class="client_taital_main">
                <div class="client_left">
                    <div class="client_img"><img src="{{ asset('images/client-img2.png') }}" alt="Client Image 2">
                    </div>
                </div>
                <div class="client_right">
                    <h3 class="moark_text">Mihacal</h3>
                    <p class="client_text">
                        now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover
                        many
                        web sites still in their infancy now use Lorem Ipsum as their default model text,
                    </p>
                </div>
            </div>
            <div class="client_taital_main">
                <div class="client_left">
                    <div class="client_img"><img src="{{ asset('images/client-img3.png') }}" alt="Client Image 3">
                    </div>
                </div>
                <div class="client_right">
                    <h3 class="moark_text">Uliya Den</h3>
                    <p class="client_text">
                        now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover
                        many
                        web sites still in their infancy now use Lorem Ipsum as their default model text,
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- client section end -->
<!-- blog section start -->
<div class="blog_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="about_taital">Our Blog</h1>
                <div class="bulit_icon"><img src="{{ asset('images/bulit-icon.png') }}" alt="Bullet Icon"></div>
            </div>
        </div>
        <div class="blog_section_2">
            <div class="row">
                <div class="col-md-6">
                    <div class="blog_box">
                        <div class="blog_img"><img src="{{ asset('images/blog-img1.png') }}" alt="Blog Image 1">
                        </div>
                        <h4 class="date_text">05 April</h4>
                        <h4 class="prep_text">PREP TECHNIQUES Coffee</h4>
                        <p class="lorem_text">
                            distracted by the readable content of a page when looking at its layout. The point of
                            using Lorem Ipsum is that it has a more distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more
                        </p>
                    </div>
                    <div class="read_bt"><a href="#">Read More</a></div>
                </div>
                <div class="col-md-6">
                    <div class="blog_box">
                        <div class="blog_img"><img src="{{ asset('images/blog-img2.png') }}" alt="Blog Image 2">
                        </div>
                        <h4 class="date_text">05 April</h4>
                        <h4 class="prep_text">PREP TECHNIQUES Coffee</h4>
                        <p class="lorem_text">
                            distracted by the readable content of a page when looking at its layout. The point of
                            using Lorem Ipsum is that it has a more distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more
                        </p>
                    </div>
                    <div class="read_bt"><a href="#">Read More</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- blog section end -->
<!-- contact section start -->
<div class="contact_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="contact_taital">Get In Touch</h1>
                <div class="bulit_icon"><img src="{{ asset('images/bulit-icon.png') }}" alt="Bullet Icon"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="contact_section_2">
            <div class="row">
                <div class="col-md-12">
                    <div class="mail_section_1">
                        <input type="text" class="mail_text" placeholder="Your Name" name="Your Name">
                        <input type="text" class="mail_text" placeholder="Your Email" name="Your Email">
                        <input type="text" class="mail_text" placeholder="Your Phone" name="Your Phone">
                        <textarea class="massage-bt" placeholder="Message" rows="5" id="comment"
                            name="Message"></textarea>
                        <div class="send_bt"><a href="#">SEND</a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection