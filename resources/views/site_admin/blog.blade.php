@extends('layouts.site_admin.site_admin_design')
@section('css')
@endsection

@section('title')
    Admin|Blog
@endsection

@section('nav_bar_text')
    Blog List
@endsection
@section('content')

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#modalBox">Create Blog</button><br><br>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Blog List</h4>
                            <p class="card-category"> Here is a subtitle for this table</p>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="datatable">
                                    <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        Detail
                                    </th>
                                    <th>
                                        Photo
                                    </th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{--****************start model--}}  
    <div class="modal fade" id="modalBox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="insert_blog" class="md-form" enctype="multipart/form-data">
                    <div class="modal-body">
                        {{csrf_field()}}
                        <input type="hidden" value="" name="blog_id">
                        <div class="form-group">
                            <label for="title" class="col-form-label">Title:</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>

                        <div class="form-group">
                            <label for="detail" class="col-form-label">Detail:</label>
                            <textarea class="form-control" rows="5" name="detail" required></textarea>
                        </div>

                        <input type="file" name="photo" required>

                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                         <button type="submit" class="btn btn-primary pull-right" id="btn_submit">Create</button>
                        <!-- <input type="submit" value="Create" class="btn btn-success"> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--**********************end model--}}

           <!-- Edit Modal -->
    <div class="modal" id="edit_modalBox">
         <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Blog</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form id="update_blog" enctype="multipart/form-data">
                    <div class="modal-body">
                        {{csrf_field()}}
                    <img src="{{asset('images/default.jpg')}}" class="img-thumbnail" alt="" id="imgs" class="imagePreview" style="width: 100%;height: 150px;">
                    <div class="col-md-4">
                         <label class="btn btn-primary upload_btn">
                        Upload<input type="file" onchange="displaySelectedPhoto('update_photo','imgs')" id="update_photo" name="photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                        </label>
                    </div>

                    <input type="hidden" name="id" id="blog_id">
                    <div class="form-group">
                        <label for="title" class="col-form-label">Title:</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="form-group">
                        <label for="detail" class="col-form-label">Detail:</label>
                        <textarea class="form-control" rows="4" id="detail" name="detail"></textarea>
                    </div>                
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Change">
                    </div>
                </form>

            </div>
        </div>
    </div>
        <!--End of Edit Modal -->

    </div>
@endsection

@section('js')
    <script>
         $(document).ready(function(){
        var t = $("#datatable").DataTable();

        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });

        function reset(){
            $('#update_data')[0].reset();
        }

        load();

        function load(){
            $.ajax({
                type: "get",
                url: "{{url('/admin/view_blog')}}",
                cache:false,
                success:function(data){
                    // console.log(data);
                    var data_return = JSON.parse(data);
                    t.clear();
                    for(var i = 0; i<data_return.length; i++){
                        t.row.add([
                            i+1,
                            data_return[i]['title'],
                            data_return[i]['detail'].substr(0,100),
                            '<img src="'+data_return[i]['photo']+'" alt="" style="width:100px;height:100px">',
                             '<button class="btn btn-info btn-sm" onclick="edit_blog('+data_return[i]['id']+')" data-target="#edit_modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static">Edit</button>'+
                            '<button class="btn btn-danger btn-sm" onclick="delete_blog('+data_return[i]['id']+')">Delete</button>'
                            ]).draw(false);
                    }
                    $('#insert_blog')[0].reset();
                }
            }).fail(function(error){
                console.log(error);
            });
        }

        $('#insert_blog').on('submit',function(e){
            // alert("it work");
            e.preventDefault();
            var alldata = new FormData(this);
            $.ajax
            ({
                type: "POST",
                url: "{{url('/admin/blog/insert')}}",
                data: alldata,
                cache:false,
                processData:false,
                contentType:false,
                success:function(data){
                    console.log('data');
                    $('#modalBox').modal('hide');
                    load();
                }
            });
                return false;
        });

       
        delete_blog=function(id){
        if(confirm('Are u want to delete!')){
            $.ajax({
                type: "POST",
                data: { "_method" : "delete"},
                url : "{{url('delete/blog')}}/"+id,
                cache: false,
                success:function(data){
                    alert('Success');
                    load();
                }
            })
        }
    }    


        edit_blog=function(id){
            $.ajax({
                url: "{{url('edit/blog')}}/"+id,
                type : "get",
                dataType : "json"
            }).done(function(response){
                // alert(response);
                $("#title").val(response.title);
                $("#detail").val(response.detail);
                $("#imgs").attr('src',response.photo);
                $("#blog_id").val(response.id);
            }).fail(function(error){
                console.log(error);
            });
        }

        $('#update_blog').on('submit',function(e)
        {        
            e.preventDefault();
            var form_data=new FormData(this);
            $.ajax({
                url : "{{url('/admin/update_blog')}}",
                type : "post",
                data : form_data,
                processData:false,
                contentType:false,
            }).done(function(response){
                if(response){
                    load();
                    $("#edit_modalBox").modal('hide');
                }
            }).fail(function(error){
                console.log(error);
            });
        });

        // // start summernote
        //       $("#summernote").summernote({
        //         height : "150px",
        //         placeholder: 'Description',
        //       });

        //       $(document).on('click','.note-btn',function(){
        //         $(".note-group-select-from-files label").text("Upload image");
        //         $(".note-group-select-from-files label").attr('class','btn btn-primary');
        //         $(".note-group-select-from-files label").attr("for","photo_summernote");
        //         $(".note-group-select-from-files input:file").attr("id","photo_summernote");
        //       });
            });
    </script>

@endsection