@extends('backend.layouts.design')
@section('content')



<div class="container">
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Add Staff</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/admin/staff/update/{{ $staff->id }}" method="post" enctype="multipart/form-data">
            {{ @csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Name"
                        value="{{$staff->name}}">
                    @if($errors->has('name'))
                    <div class="error">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Designation</label>
                    <input type="text" class="form-control" name="designation" id="exampleInputPassword1"
                        placeholder="Designation" value="{{ $staff->designation}}">
                    @if($errors->has('designation'))
                    <div class="error">{{ $errors->first('designation') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Facebook Link</label>
                    <input type="text" class="form-control" name="facebook_link" id="exampleInputPassword1"
                        placeholder="Facebook Link" value="{{ $staff->facebook_link}}">
                </div>
                @if($errors->has('facebook_link'))
                <div class="error">{{ $errors->first('facebook_link') }}</div>
                @endif

                <div class="form-group">
                    <label for="exampleInputPassword1">Twitter Link</label>
                    <input type="text" class="form-control" name="twitter_link" id="exampleInputPassword1"
                        placeholder="Twitter Link" value="{{ $staff->twitter_link}}">
                </div>
                @if($errors->has('twitter_link'))
                <div class="error">{{ $errors->first('twitter_link') }}</div>
                @endif

                <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                        <div class="row">

                            <div class="custom-file col-md-10">
                                <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>

                            <div class="col-md-2">
                                <img src="{{asset( 'images/staffImage').'/'.$staff->image}}" class="img-fluid" alt="">
                            </div>

                            @if($errors->has('image'))
                            <div class="error">{{ $errors->first('image') }}</div>
                            @endif
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
                <button type="submit" class="btn btn-secondary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>
@endsection