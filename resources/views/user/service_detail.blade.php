@extends('user.site_user.master_user')
@section('title','Power Phoenix')
@section('content')
<!-- banner -->
{{session('service_detail')}}
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
        <li class="breadcrumb-item active">Service Detail</li>
</ol>

  <section class="ab-info-main py-md-5 py-4" style="margin-top: -30px;">
        <div class="container py-md-5 py-4">
            <h3 class="title text-center mb-lg-5 mb-3">{{$service_detail['title']}}</h3>
            <div class="speak">
                <div class="row mt-lg-5 mt-4">
                    <div class="col-md-6 events-img">
                        <img src="{{$service_detail['photo']}}" class="img-fluid" width="400px" height="400px" alt="user-image"/>
                    </div>
                    <div class="col-md-6 events-info my-3">
                       <div class="myanmar">{{$service_detail['detail']}}</div>
                       <!-- <br>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure rerum nulla tenetur in accusamus reprehenderit odit sapiente vel, quas minima et atque soluta veritatis corporis consequuntur? Fugit, fugiat aliquid quaerat.</p> -->
                    </div>
                    
                 
                </div>
              
            </div>
        </div>
    </section>
@endsection