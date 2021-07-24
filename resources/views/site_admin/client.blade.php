@extends('layouts.site_admin.site_admin_design')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('title')
    Admin|Blog
@endsection

@section('nav_bar_text')
    Client List
@endsection
@section('content')

    {{--****************start model--}}
    <div class="modal fade" id="insert_modalBox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="insert_client" enctype="multipart/form-data">
                    <div class="modal-body">
                        {{csrf_field()}}
                        <input type="hidden" id="id" name="id">
                        <div class="form-group">
                            <img src="" alt="">
                            <label for="photo" class="col-form-label btn btn-primary d-block rounded-0">Upload Photo</label>
                            <input id="photo" type="file" class="form-control" name="photo" required>
                        </div>
                        <div class="form-group">
                            <label for="link" class="col-form-label">Link:</label>
                            <input type="text" class="form-control" name="link" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" value="Create" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--**********************end model--}}

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- <button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#insert_form">Create Client</button><br><br> -->
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Client List</h4>
                            <p class="card-category"> Here is a subtitle for this table<button type="button" class="btn btn-primary pull-right" data-toggle="modal" style="margin-top: -25px;" data-target="#insert_modalBox">Create Client</button><br><br></p>
                        </div>

                        <div class="card-body row image_data">
                           <!-- image data show -->
                        </div>
                    </div>  
                </div>
            </div>
        </div>             
      </div>
     <!-- Edit Modal -->
    <div class="modal" id="editClient">
         <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Client</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form id="update_client" enctype="multipart/form-data">
                  <div class="modal-body">
                        {{csrf_field()}}
                    <input type="hidden" name="id" id="client_id">   
                        <!-- <label for="photo" class="col-form-label btn btn-primary d-block rounded-0">Upload Photo</label> -->
                    <img src="{{asset('images/default.jpg')}}" class="img-thumbnail" alt="" id="imgs" class="imagePreview" style="width: 100%;height: 150px;">
                    <input type="file" onchange="displaySelectedPhoto('update_photo','imgs')" class="form-control" id="update_photo" name="photo">
                    
                    <div class="form-group">
                        <label for="link" class="col-form-label">Link:</label>
                        <input type="text" id="link" class="form-control" name="link">
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Edit">
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
        <!--End of Edit Modal -->             
@endsection

@section('js')
    <script>

          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
       $('document').ready(function(){
        imageUpload();

        function reset(){
            $('#update_data')[0].reset();
        }
      // image upload data
        function imageUpload(){
                $(".image_data").empty();
                $.ajax({
                      url : "{{url('admin/view_client')}}",
                      type : "get",
                      dataType : "json"
                  }).done(function(response){
                    //   console.log(response);
                      $.each(response,function(index,data){
                        console.log(data);
                        let id=data.id;
                        let image=data.photo;
                        let link=data.link;
                        $(".image_data").append('<div class="col-md-4 upload_image" data-id="'+id+'"><div class="card"><img src="'+image+'" class="rounded imagePreview" style="width:100%;height:200px;" alt="..."><p>Link : <a href="'+link+'" target="_blank">'+link+'</a></p>'+
                        '<div class="row action_'+id+'"><div class="col-md-6"><button class="btn btn-outline-info btn-sm rounded-0 image_edit" data-toggle="modal" data-target="#editClient" onclick="edit_client('+id+')" data-id="'+id+'">Edit</button></div>'+
                        '<div class="col-md-6"><button data-id="'+id+'" class="btn btn-danger rounded-0 float-right btn-sm image_delete" onclick="delete_client('+id+')">Delete</button></div></div></div></div>');          
                      });
                      $('#insert_client')[0].reset();
                  }).fail(function(error){
                      console.log(error);
                  });
            }


      $('#insert_client').on('submit',function(e){
          e.preventDefault();
          var form_data = new FormData(this);
          $.ajax({
            type : "post",
            url : "{{url('/admin/client/insert')}}",
            data : form_data,
            cache:false,
            processData:false,
            contentType:false,
            success: function(response){
              $('#insert_modalBox').modal('hide');
              imageUpload();
            }
          }).fail(function(error){
            console.log(error);
          });
      })

      edit_client=function(id){
            $.ajax({
                url: "{{url('edit/client')}}/"+id,
                type : "get",
                dataType : "json"
            }).done(function(response){
              console.log(response.id);
                // alert(response);
                $("#imgs").attr('src',response.photo);
                $("#link").val(response.link);
                $("#client_id").val(response.id);
            }).fail(function(error){
                console.log(error);
            });
        }

        $('#update_client').on('submit',function(e)
        {        
            e.preventDefault();
            var form_data=new FormData(this);
            $.ajax({
                url : "{{url('/admin/update_client')}}",
                type : "post",
                data : form_data,
                processData:false,
                contentType:false,
            }).done(function(response){
              // console.log(response);
                if(response){
                    imageUpload();
                    $("#editClient").modal('hide');
                }
            }).fail(function(error){
                console.log(error);
            });
        });

      delete_client=function(id){
        if(confirm('Are u want to delete!')){
            $.ajax({
                type: "POST",
                data: { "_method" : "delete"},
                url : "{{url('delete/client')}}/"+id,
                cache: false,
                success:function(data){
                    alert('Success');
                    imageUpload();
                }
            })
        }
    }    

    }) 

    </script>

@endsection
