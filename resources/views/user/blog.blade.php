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
        <li class="breadcrumb-item active">Blog</li>
</ol>
<section class="ab-info-main py-md-5 py-4" style="margin-top: -30px;">
        <div class="container py-md-5 py-4">
            <h3 class="tittle text-center mb-lg-5 mb-3">Blog</h3>
            @if(count($blog) >0)
                @foreach($blog as $index=>$data)
                   @if(($index+1)%2 == 0)
                    <div class="row mt-lg-5 mt-4">
                        <div class="col-md-6 events-info">
                            <h3><span class="sub-tittle">0{{$index+1}}</span></h3>
                            <h4 class="my-3"><a href="{{url('/blogDetail/'.$data->id)}}" class="text-dark">{{$data['title']}}</a></h4>
                             <ul class="events-icons new-inf mt-md-4 mt-3 d-flex">
                                <li><a href="#"><span class="fa fa-calendar"></span></a> 
                                    {{$data['created_at']->format('M d-Y')}}</li>
                            </ul>
                            <div class="myanmar" style="margin-top: 20px;">{{str_limit($data['detail'],200)}}</div>
                        </div>
                        <div class="col-md-6 events-image">
                            <a href="{{url('/blogDetail/'.$data->id)}}"><img src="{{asset('upload/blog/'.$data['photo'])}}" class="img-fluid" width="500px" height="400px" alt="user-image" /></a>
                        </div>
                    </div>
                    @else
                     <div class="row mt-lg-5 mt-4">
                        <div class="col-md-6 events-image">
                            <a href="{{url('/blogDetail/'.$data->id)}}"><img src="{{asset('upload/blog/'.$data['photo'])}}" class="img-fluid" width="500px" height="400px" alt="user-image" /></a>
                        </div>
                        <div class="col-md-6 events-info">
                            <h3><span class="sub-tittle">0{{$index+1}}</span></h3>
                            <h4 class="my-3"><a href="{{url('/blogDetail/'.$data->id)}}" class="text-dark">{{$data['title']}}</a></h4>
                             <ul class="events-icons new-inf mt-md-4 mt-3 d-flex">
                                <li><a href="#"><span class="fa fa-calendar"></span></a> {{$data['created_at']->format('M d-Y')}}</li>
                            </ul>
                            <p style="margin-top: 20px;">{{str_limit($data['detail'],200)}}</p>
                        </div>
                    </div>
                   @endif
               @endforeach
            @else
            <h2 style="text-align: center;">No Post</h2>
            @endif

        </div>
</section>

<div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 40px;">
                <div>
                    <!-- {{$blog->links()}} -->
                    {{$blog->render()}}
                </div>
            </div>

        </div>
</div>
@endsection
