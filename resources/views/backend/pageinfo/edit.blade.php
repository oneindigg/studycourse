@extends('backend.layouts.design')
@section('content')

<div class="container">
    <div class="card card-danger">
        <div class="card-header">
            <h3 class="card-title">Edit pageinfo</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/admin/pageinformation/update/{{$pageinfo->id}}" method="post" enctype="multipart/form-data">
            {{ @csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1"
                        placeholder="Enter Title" value="{{$pageinfo->title}}">
                    @if($errors->has('title'))
                    <div class="error">{{ $errors->first('title') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Sub Title</label>
                    <input type="text" class="form-control" name="sub_title" id="exampleInputEmail1"
                        placeholder="Enter Sub Title" value="{{$pageinfo->sub_title}}">
                    @if($errors->has('sub_title'))
                    <div class="error">{{ $errors->first('sub_title') }}</div>
                    @endif
                </div>


                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea class="form-control" name="description" id="">{{ $pageinfo->description }}
                    </textarea>
                    @if($errors->has('description'))
                    <div class="error">{{ $errors->first('description') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Slug</label>
                    <input type="text" class="form-control" name="slug" id="exampleInputPassword1"
                        placeholder="Description" value="{{$pageinfo->slug}}">
                    @if($errors->has('slug'))
                    <div class="error">{{ $errors->first('slug') }}</div>
                    @endif
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