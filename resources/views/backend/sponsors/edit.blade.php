@extends('backend.layouts.design')
@section('content')

<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Sponsors</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/admin/sponsor/update/{{$sponsor->id}}" method="post" enctype="multipart/form-data">
            {{ @csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Name"
                        value="{{$sponsor->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                        <div class="row">
                            <div class="custom-file col-md-10">
                                <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="col-md-2">
                                <img src="{{asset( 'images/sponsorImage').'/'.$sponsor->image}}" class="img-fluid"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>
@endsection