@extends('user.site_user.master_user')
@section('title','Power Phoenix')
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
        <li class="breadcrumb-item active">Blog_Detail</li>
</ol>

  <section class="ab-info-main py-md-5 py-4">
        <div class="container py-md-5 py-4">
            <div class="speak">
                <div class="row mt-lg-5 mt-4">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="{{$blog_detail['photo']}}" class="img-fluid" style="width: 800px;height: 400px;
                        margin-top: -35px;" alt="user-image"/>
                    
                    <div class="col-md-12 events-info my-3">
                        <h3></h3>
                        <h4 class="my-3"><a href="#" class="text-dark">{{$blog_detail['title']}}</a>
                        </h4>
                        <!-- p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p> -->
                        <ul class="team-icons new-inf mt-md-4 mt-3 d-flex">
                            {{$blog_detail['created_at']->format('M d-Y')}}
                        </ul>
                        <br>
                         <p style="text-align: justify;">{{$blog_detail['detail']}}</p>
                    </div>
                </div>
                </div>
               <!--  <ul class="social_section_1info">
                    <li class="fallow">Follow Us :</li>
                    <li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook mr-1"></span>facebook</a></li>
                    <li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter mr-1"></span>twitter</a></li>
                    <li class="google"><a href="#"><span class="fa fa-google-plus mr-1"></span>google</a></li>
                    <li class="linkedin"><a href="#"><span class="fa fa-linkedin mr-1"></span>linkedin</a></li>
                </ul> -->
                
            </div>
        </div>
    </section>

@endsection

