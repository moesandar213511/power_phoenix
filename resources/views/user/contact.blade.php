@extends('user.site_user.master_user')
@section('title','Power Phoenix')
@section('css')
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection
@section('content')
<!-- banner -->
<div class="banner_w3lspvt" id="home">
    <div class="csslider infinity" id="slider1">
        <input type="radio" name="slides" checked="checked" id="slides_1"/>
        <input type="radio" name="slides" id="slides_2"/>
        <input type="radio" name="slides" id="slides_3"/>
        <input type="radio" name="slides" id="slides_4"/>
        <div class="navigation"> 
            <div>
              <label for="slides_1"></label>
              <label for="slides_2"></label>
              <label for="slides_3"></label>
              <label for="slides_4"></label>
            </div>
        </div>
    </div>
</div>
<!-- //banner -->
<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
</ol>

<!-- Contact -->
<section class="contact py-5" id="contact">
    <div class="container py-sm-3">
        <h1 class="heading text-capitalize mb-lg-5 mb-4" style="text-align: center;">Contact Us</h1>
        <form action="{{url('/create_contact')}}" method="post">
            {{csrf_field()}}
            <div class="row main-agile-sectns">
                <div class="col-md-6 agileits-btm-spc form-text1">
                    <input type="text" name="name" placeholder="Enter Your Name" required="">
                </div>
                <div class="col-md-6 agileits-btm-spc form-text2">
                    <input type="text" name="phone" placeholder="Enter Phone Number" required="">
                </div>
            </div>
            <div class="row main-agile-sectns">
                <div class="col-md-6 agileits-btm-spc form-text1">
                    <input type="text" name="subject" placeholder="Enter Subject">
                </div>
                
                <div class="col-md-6 agileits-btm-spc form-text1">
                    <input type="email" name="email" placeholder="Enter Your Email" required="">
                </div>
            </div>
            <div class="main-agile-sectns ">
                <div class="agileits-btm-spc form-text2 p-0">
                    <textarea name="message" placeholder="Enter Your Message Here"></textarea>
                </div>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</section>
<!-- //Contact -->

<section class="map">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1910.0190173616393!2d96.17086838165731!3d16.77478320558348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1edcd4d08c745%3A0x8eb38c43cdfd3082!2sPower+Phoenix+(Yangon)!5e0!3m2!1smy!2smm!4v1561273397151!5m2!1smy!2smm" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>

@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  @if(Session::has('success'))
    <script type="text/javascript">
    toastr.success("{{Session('success')}}");</script>
  @endif
@endsection