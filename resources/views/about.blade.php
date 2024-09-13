@extends('Components.layout') 

@section('content')
<div class="about_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="about_taital">About Our Shop</h1>
            <div class="bulit_icon">
               <img src="{{ asset('images/bulit-icon.png') }}" alt="Decorative Bullet Icon">
            </div>
         </div>
      </div>
      <div class="about_section_2 layout_padding">
         <div >
            <img src="{{ asset('images/about-img.png') }}" class="about_img" alt="Illustration representing our shop">
         </div>
         <div>
            <h1 class="about_taital_1">Our Story</h1>
            <p class="about_text">
               Our journey began with a passion for great coffee and a desire to create a welcoming space for our
               community. Since our opening, we have been dedicated to delivering quality products and exceptional
               customer service.
            </p>
            <p class="about_text">
               From our humble beginnings to becoming a well-loved spot in the neighborhood, our commitment to
               excellence remains at the heart of everything we do. We invite you to be part of our story as we continue
               to grow and evolve.
            </p>
            <div class="readmore_btn">
               <a href="#">Read More</a>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection