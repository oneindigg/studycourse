@extends('backend.layouts.design')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Sliders</h3><br>
                    <a href="/admin/create-slider" class="button btn btn-success btn-sm active" role="button"
                        aria-pressed="false">Add Slider</a>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($sliders->count()> 0)
                            @foreach($sliders as $slider)
                            <tr>
                                <td>{{ $slider->title }}</td>
                                <td> {{ $slider->description }}</td>
                                <td>
                                    <img style="height: 100px; width:100px;"
                                        src="{{asset('images/sliderImage').'/'.$slider->image}}"
                                        alt="{{ $slider->image }}">
                                </td>
                                <td>{{ $slider->link }}</td>
                                <td>
                                    <a href="/admin/slider/edit/{{$slider->id}}" class="btn btn-primary active">Edit</a>
                                    <button type="button" class="btn btn-danger active" data-toggle="modal"
                                        data-target="#del{{$slider->id}}">Delete</button>
                                    <div id="del{{$slider->id}}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>


                                                <form method="post" action="/admin/slider/delete/{{$slider->id}}">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <div class="modal-body">
                                                        Are you sure you want to Delete this?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Confirm</button>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>

                                            </div>

                                        </div>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td> Oops! No record found</td>
                            </tr>
                            @endif



                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
</div>

@endsection