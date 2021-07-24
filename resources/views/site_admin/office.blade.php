@extends('layouts.site_admin.site_admin_design')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('title')
    Admin|Blog
@endsection

@section('nav_bar_text')
    Office List
@endsection
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Office Information</h4>
                            <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                        </div>
                    </div>  
                </div>
                <div class="col-md-4">
                    <h3>Pyin Oo Lwin</h3><br>  
                    <form action="{{url('/admin/update_office')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                    <input type="hidden" name="id" id="id" value="{{$officeOne->id}}">
                    <div class="form-group">
                        <!-- <label for="name" class="col-form-label">Name:</label> -->
                        <input type="text" class="form-control" id="name" name="name" value="{{$officeOne->name}}">
                    </div>
                    <div class="form-group">
                        <!-- <label for="address" class="col-form-label">Address:</label> -->
                        <textarea class="form-control" rows="3" id="address" name="address">{{$officeOne->address}}</textarea>
                    </div>
                     <div class="form-group">
                        <!-- <label for="phone" class="col-form-label">Phone No:</label> -->
                        <input type="tel" class="form-control" id="phone" name="phone" value="{{$officeOne->phone}}">
                    </div><br>
                    <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Edit">
                </form>  
                </div>   

                <div class="col-md-4">
                    <h3>Yangon</h3><br> 
                    <form action="{{url('/admin/update_office')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                    <input type="hidden" name="id" id="id" value="{{$officeTwo->id}}">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" value="{{$officeTwo->name}}">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" rows="3" id="address" name="address">{{$officeTwo->address}}</textarea>
                    </div>

                     <div class="form-group">
                        <input type="tel" class="form-control" id="phone" name="phone" value="{{$officeTwo->phone}}">
                    </div><br>
                    <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Edit">
                </form>  
                </div>

                <div class="col-md-4">  
                    <h3>Mandalay</h3><br>   
                    <form action="{{url('/admin/update_office')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                    <input type="hidden" name="id" id="id" value="{{$officeThree->id}}">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" value="{{$officeThree->name}}">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" rows="3" id="address" name="address">{{$officeThree->address}}</textarea>
                    </div>

                     <div class="form-group">
                        <input type="tel" class="form-control" id="phone" name="phone" value="{{$officeThree->phone}}">
                    </div><br>
                    <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Edit">
                </form>  
                </div>
        
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        function editBlog(id){
           $('#blog').modal('show');
           var title = document.getElementById('title'+id).innerHTML;
           var detail = document.getElementById('detail'+id).innerHTML;
           var img = document.getElementById('img'+id).innerHTML;
           $('#blog_id').val(id);
           $('#title').val(title);
           $('#detail').val(detail);
           $('#photo').val(img);
           
        }
        function deleteBlog(deletelay){

           var trueName =  confirm("Are You Want To Delete?");
           if(trueName){
               window.open(deletelay,'_self');
           }else {
              alert("You not deleted");
           }
        }

    </script>

@endsection
