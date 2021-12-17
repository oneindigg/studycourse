@extends('backend.layouts.design')
@section('content')



<div class="container">
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Facilities Description</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/admin/facilities-desc/store" method="post" enctype="multipart/form-data">
            {{ @csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1"
                        placeholder="Enter Title">
                    @if($errors->has('title'))
                    <div class="error">{{ $errors->first('title') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Sub Title</label>
                    <input type="text" class="form-control" name="sub_title" id="exampleInputEmail1"
                        placeholder="Enter Sub-Title">
                    @if($errors->has('sub_title'))
                    <div class="error">{{ $errors->first('sub_title') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control" name="description" id="exampleInputEmail1"
                        placeholder="Enter Description">
                    @if($errors->has('description'))
                    <div class="error">{{ $errors->first('description') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Link</label>
                    <input type="text" class="form-control" name="link" id="exampleInputPassword1" placeholder="Link">
                    @if($errors->has('link'))
                    <div class="error">{{ $errors->first('link') }}</div>
                    @endif
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