@extends('layouts.site_admin.site_admin_design')
@section('css')
@endsection

@section('title')
    Admin|Blog
@endsection

@section('nav_bar_text')
    Member List
@endsection
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#insert_modalBox">Create Team Member</button><br><br>
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Team Member List</h4>
                            <p class="card-category"> Here is a subtitle for this table</p>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table" id="datatable">
                                    <thead class=" text-primary">
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Photo
                                    </th>
                                    <th>
                                        Position
                                    </th>
                                    <th>
                                        Detail
                                    </th>
                                    <th>Facebook</th>
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

    {{--****************start insert model--}}
    <div class="modal fade" id="insert_modalBox" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="insert_team" enctype="multipart/form-data">
                    <div class="modal-body">
                        {{csrf_field()}}
                        <input type="hidden" name="id">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" name="name" required>
                        </div><br>

                        <input type="file" name="photo"><br>

                        <div class="form-group">
                            <label for="position" class="col-form-label">Position:</label>
                            <input type="text" class="form-control" name="position" required>
                        </div>

                        <div class="form-group">
                            <label for="detail" class="col-form-label">Detail:</label>
                            <textarea class="form-control" rows="5" name="detail" required></textarea>
                        </div>

                        <div class="form-group">
                        <label for="link" class="col-form-label">Link:</label>
                        <input type="text" id="link" class="form-control" name="fb_link">

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
    {{--**********************end insert model--}}

         <!-- Edit Modal -->
    <div class="modal" id="edit_modalBox">
         <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Member</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form id="update_team" enctype="multipart/form-data">
                    <div class="modal-body">
                        {{csrf_field()}}
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                            <label for="name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

                    <img src="{{asset('images/default.jpg')}}" class="img-thumbnail" alt="" id="imgs" class="imagePreview" style="width: 40%;height: 100px;">

                    <input type="file" name="photo" id="update_photo" onchange="displaySelectedPhoto('update_photo','imgs')" value="">

                    <div class="form-group">
                        <label for="position" class="col-form-label">Position:</label>
                        <input type="text" class="form-control" id="position" name="position">
                    </div>

                    <div class="form-group">
                        <label for="detail" class="col-form-label">Detail:</label>
                        <textarea class="form-control" rows="5" id="detail" name="detail"></textarea>
                    </div>     
                    <div class="form-group">
                        <label for="link" class="col-form-label">Link:</label>
                        <input type="text" id="fb_link" class="form-control" name="fb_link">
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Edit">
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
            var t = $('#datatable').DataTable({
                "ordering": false,
                // "paging": false,
                "bInfo" : false,
                // "bPaginate": false,
                "bLengthChange": false
                // "bFilter": true,
                // "bAutoWidth": false
            })
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
                    type : "get",
                    url : "{{url('/admin/view_team')}}",
                    cache : false,
                    success:function(response){
                        var all_data = JSON.parse(response);
                        // console.log(all_data);
                        t.clear();
                        for(var i=0; i<all_data.length; i++){
                            t.row.add([
                                i+1,
                                all_data[i]['name'],
                                '<img src="'+all_data[i]['photo']+'" alt="" style="width:100px;height:100px">',
                                all_data[i]['position'],
                                all_data[i]['detail'].substr(0,100),
                                '<a href="'+all_data[i]['fb_link']+'" target="_blank">'+all_data[i]['fb_link']+'</a>',
                                '<button class="btn btn-info btn-sm" onclick="edit_team('+all_data[i]['id']+')" data-toggle="modal" data-target="#edit_modalBox" data-keyboard="false" data-backdrop="static">Edit</button>'+
                                '<button class="btn btn-danger btn-sm" onclick="delete_team('+all_data[i]['id']+')">Delete</button>'
                            ]).draw(false);
                        } 
                        $('#insert_team')[0].reset();
                    }
                }).fail(function(error){
                    console.log(error);
                })
            }

            $('#insert_team').on('submit',function(e){
                // alert("it work");
                e.preventDefault();
                var allData = new FormData(this);
                $.ajax({
                    type : "post",
                    url : "{{url('/admin/team/insert')}}",
                    data : allData,
                    cache:false,
                    processData:false,
                    contentType:false,
                    success:function(response){
                        console.log(response);
                        $('#insert_modalBox').modal('hide');
                        load();
                    }
                }).fail(function(error){
                    console.log(error);
                });
                return false;
            });

            edit_team = function(id){
                $.ajax({
                    type : "get",
                    url : "{{url('edit/team')}}/"+id,
                    dataType : "json",
                    success:function(response){
                        // alert(response);
                        $('#id').val(response.id);
                        $('#name').val(response.name);
                        $('#imgs').attr('src',response.photo);
                        $('#position').val(response.position);
                        $('#detail').val(response.detail);
                        $('#fb_link').val(response.fb_link);
                    }
                }).fail(function(error){
                    console.log(error);
                });
            }

            $('#update_team').on('submit',function(e){
                e.preventDefault();
                var edit_data = new FormData(this);
                $.ajax({
                    type : 'post',
                    url : "{{url('/admin/update_team')}}",
                    data : edit_data,
                    processData:false,
                    contentType:false,
                    success: function(response){
                        $('#edit_modalBox').modal('hide');
                        load();
                    }
                }).fail(function(error){
                    console.log(error);
                });
            })

            delete_team = function(id){
            if(confirm('Are u sure u want to delete')){
               $.ajax({
                    type : "POST",
                    url : "{{url('delete/team')}}/"+id,
                    data : {"_method":"delete"},
                    cache: false,
                    success:function(response){
                        alert('Success');
                        load();
                    }
                }) 
            }
        }


        })
    </script>

@endsection
