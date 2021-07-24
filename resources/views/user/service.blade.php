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
        <li class="breadcrumb-item active">Services</li>
</ol>
<section class="ab-info-main py-md-5 py-4" style="margin-top: -30px;">
        <div class="container py-md-5 py-4">
            <h3 class="tittle text-center mb-lg-5 mb-3">Our Services</h3>
             <div class="row">
                @foreach($service as $ser)
                <div class="col-md-3" >
                    <div style="-webkit-box-shadow: 0px 0px 5px #000;-moz-box-shadow: 0px 0px 5px #000;box-shadow: 0px 0px 5px #000;margin-bottom:20px;height:300px;">
                        <a href="{{url('/serviceDetail/'.$ser->id)}}" title="" >
                            <img src="{{asset('upload/service/'.$ser->photo)}}" style="width: 100%;height: 200px;" alt="" class="img-responsive">
                        </a>
                        <a id="service" href="{{url('/serviceDetail/'.$ser->id)}}">
                            <h4 class="text-center" style="padding: 10px; color: #ff9800; font-size: 19px; ">
                                {{$ser->title}}
                            </h4>
                        </a>
                    </div>                 
                </div>
                @endforeach
            </div>
    </section>
@endsection