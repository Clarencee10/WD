@extends('Components.layout') 

@section('content')
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
@endsection