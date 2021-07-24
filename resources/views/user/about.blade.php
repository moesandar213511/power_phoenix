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
        <li class="breadcrumb-item active">About</li>
</ol>

<!-- section -->
<section class="section py-5">
    <div class="container py-md-5">
        <div class="row section_grids">
            <div class="col-lg-6">
                <h3>Welcome To Our Website</h3>
                <p class="my-4">Nulla felis tortor, rutrum eget feugiat non, blandit nec tellus. Nam pharetra ipsum ligula volutpat, a finibus. Vivamus eget est
                init odio tempor interdum. Mauris maximus fermentum arcu, ac finibus ante. Sed mattis risus at ipsum elementum,ut auctor turpis cursus.
                Sed sed odio pharetra, aliquet velit cursus, vehicula enim.</p>
                <p>Nam pharetra ipsum,  ligula volutpat a finibus.Vivamus eget est ac</p>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5 img">
                <img src="images/banner3.jpg" class="img-fluid" alt=""/>
            </div>
        </div>
     <div class="row service-grid-grids text-center pt-lg-5 mt-3">
            <div class="col-lg-4 col-md-6 service-grid service-grid1">
                <div class="service-icon">
                    <span class="fa fa-pencil-square-o" aria-hidden="true"></span>
                </div>
                <h4 class="mt-3">Best Solutions</h4>
                <p class="mt-3">Perspiciatis unde omnis iste natus doloret ipsum volupte ut accusal ntium dolor remque laudantium, totam dolor.</p>
            </div>
            <div class="col-lg-4 col-md-6 service-grid service-grid2 mt-md-0 mt-5">
                <div class="service-icon">
                    <span class="fa fa-bullseye " aria-hidden="true"></span>
                </div>
                <h4 class="mt-3">Creative Work</h4>
                <p class="mt-3">Perspiciatis unde omnis iste natus doloret ipsum volupte ut accusal ntium dolor remque laudantium, totam dolor.</p>
            </div>
            <div class="col-lg-4 col-md-6 service-grid service-grid3 mt-lg-0 mt-5">
                <div class="service-icon">
                    <span class="fa fa-database" aria-hidden="true"></span>
                </div>
                <h4 class="mt-3">Great Designs</h4>
                <p class="mt-3">Perspiciatis unde omnis iste natus doloret ipsum volupte ut accusal ntium dolor remque laudantium, totam dolor.</p>
            </div>
    </div>
</section>
<!-- //section -->
    <!-- facts -->
<section class="facts" id="facts">
    <div class="container">
        <div class="row">
        <div class="col-lg-4 p-lg-0 text-center">
                <img src="images/2.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 pt-5">
                <div class="row inner-heading">
                    <h3 class="tittle text-capitalize text-left my-md-4"> Why Choose Us</h3>
                    <p class="mt-md-0 mt-2">We carefully listen to your desire and objective. By fully focusing on your business model, we provide suitable, reasonable and effective suggestions. 

                    Timing is everything.
                    
                    Trustable Technicians is our team are experienced,skillful,and studied Engineering and Information Technology for Six years in Russian,one of the World leading Technological Country.</p>
                </div>
                <div class="row mt-5 fact-grid-main">
                    <div class="col-sm-4 stats-grid">
                        <span class="fa fa-tasks"></span>
                        <span>250</span>
                        <h4>Completed Work</h4>
                    </div>
                    <div class="col-sm-4 stats-grid">
                        <span class="fa fa-copy"></span>
                        <span>50+</span>
                        <h4>Projects</h4>
                    </div>
                    <div class="col-sm-4 stats-grid">
                        <span class="fa fa-smile-o"></span>
                        <span>2000+</span>
                        <h4>Satisfied clients</h4>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- //facts -->

<!-- team -->
<section class="team-wthree py-5" id="team">
    <div class="container py-lg-3">
        <h3 class="heading text-capitalize mb-4" style="text-align: center;">our team</h3>
        <div class="team-members">
            <div class="row">
                @foreach($team as $member)
                 <div class="col-lg-3 col-md-6 mt-lg-0 mt-4" data-toggle="modal" data-target="#myModal">
                    <div class="">
                        <img data-id="{{$member[
                        'id']}}" src="{{asset('upload/team/'.$member['photo'])}}" style="width: 100%; height: 200px" alt="" class="team-member img-fluid" />
                       <!--  <ul class="icon">
                            <li><a href="{{$member['fb_link']}}" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-link"></a></li>
                        </ul> -->
                       <!--  <div class="box-content">
                            <h3 class="title">{{$member['name']}}</h3>
                            <span class="post">{{$member['position']}}</span>
                        </div> -->
                    </div>
                    <!-- <p class="text">{{$member['detail']}}</p> -->
                </div>

                @endforeach

            </div>
        </div>
</section>
<!-- //team -->

<div class="container" style="margin-bottom: 30px;">
    <h3 class="heading text-capitalize mb-4" style="text-align: center;">Our Office</h3>
    <div class="row">            
            <div class="col-md-4">
                <p style="background-color: #ffc107;
                border-color: 1px solid blue;line-height: 30px; font-size: 20px;
                text-align: center; color: white; font-weight: bold; padding: 10px;">Pyin Oo Lwin</p>
                <div class="body" style="text-align: center; font-weight: bold; font-size: 20px; color: white; background-color: #ffc107; padding: 25px; ">
                    <p>{{$officeOne->name}}</p>
                    <p>{{$officeOne->address}}</p>
                    <p>{{$officeOne->phone}}</p>
                </div>
            </div>
            <div class="col-md-4">
                <p style="background-color:#ffc107;
                border-color: 1px solid blue;line-height: 30px; font-size: 20px;
                text-align: center; color: white; font-weight: bold; padding: 10px;">Yangon</p>
                <div class="body" style="text-align: center; font-weight: bold; font-size: 20px; color: white; background-color: #ffc107; padding: 25px; ">
                    <p>{{$officeTwo->name}}</p>
                    <p>{{$officeTwo->address}}</p>
                    <p>{{$officeTwo->phone}}</p>
                </div>
            </div>
            <div class="col-md-4">
                <p style="background-color:#ffc107;
                border-color: 1px solid blue;line-height: 30px; font-size: 20px;
                text-align: center; color: white; font-weight: bold; padding: 10px;">Mandalay</p>
                <div class="body" style="text-align: center; font-weight: bold; font-size: 20px; color: white; background-color: #ffc107; padding:25px; ">
                    <p>{{$officeThree->name}}</p>
                    <p>{{$officeThree->address}}</p>
                    <p>{{$officeThree->phone}}</p>
                </div>
            </div>
    </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <!-- Modal content-->
 <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <input type="hidden" id="hidden_id" name="id">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <img src="" style="width: 100%;height: 150px" alt="" id="img">
                <span class="text-muted text-center team-member-name"></span><br>
                <span class="text-muted text-center position"></span><br>
                <span class="text-muted text-center link"></span>
            </div>
        </div>
         <div class="row">
            <div class="col-md-12">
                <p class="team-member-detail text-center"></p>
            </div>
        </div>

      </div>
    </div>

  </div>
</div>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

            // image edit
            $(document).on('click','.team-member',function(event){
              event.preventDefault();
              let id=$(this).data('id');
              // alert(id);
              $.ajax({
                      url : "{{ url('/view_team') }}/"+id,
                      type : "get",
                      dataType : "json"
                  }).done(function(response){
                    console.log(response);
                    $(".team-member-name").text(response.name);
                    $("#img").attr('src',response.photo);
                    $(".position").text(response.position);
                    $(".team-member-detail").text(response.detail);
                    $(".link").html('<a target="_blank" href="'+response.fb_link+'"><i class="fa fa-facebook-official" style="font-size:34px"></i></a>');
                  }).fail(function(error){
                    console.log(error);
              });
            });
    </script>
@endsection