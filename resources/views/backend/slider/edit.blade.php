@extends('backend.layouts.design')
@section('content')



<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add Slider</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/admin/slider/update/{{$slider->id}}" method="post" enctype="multipart/form-data">
            {{ @csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1"
                        placeholder="Enter Title" value="{{$slider->title}}">
                    @if($errors->has('title'))
                    <div class="error">{{ $errors->first('title') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" class="form-control" name="description" id="exampleInputPassword1"
                        placeholder="Description" value="{{$slider->description}}">
                    @if($errors->has('description'))
                    <div class="error">{{ $errors->first('description') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Link</label>
                    <input type="text" class="form-control" name="link" id="exampleInputPassword1" placeholder="Link"
                        value="{{$slider->link}}">
                    @if($errors->has('link'))
                    <div class="error">{{ $errors->first('link') }}</div>
                    @endif
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
                                <img src="{{asset( 'images/sliderImage').'/'.$slider->image}}" class="img-fluid" alt="">
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
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
</div>
@endsection