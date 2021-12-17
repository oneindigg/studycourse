@extends('backend.layouts.design')
@section('content')

<div class="container">
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Company Info</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/admin/companyinfo/update/{{$info->id}}" method="post" enctype="multipart/form-data">
            {{ @csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                        placeholder="Enter Company Name" value="{{$info->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Slogan</label>
                    <input type="text" class="form-control" name="slogan" id="exampleInputPassword1"
                        placeholder="Slogan" value="{{$info->slogan}}">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Logo</label>
                    <input type="text" class="form-control" name="logo" id="exampleInputPassword1" placeholder="Logo"
                        value="{{$info->logo}}">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" name="address" id="exampleInputPassword1"
                        placeholder="Address" value="{{$info->address}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="text" class="form-control" name="phone" id="exampleInputPassword1" placeholder="phone"
                        value="{{$info->phone}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" name="email" id="exampleInputPassword1" placeholder="Email"
                        value="{{$info->email}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Facebook Link</label>
                    <input type="text" class="form-control" name="facebook_link" id="exampleInputPassword1"
                        placeholder="Facebook Link" value="{{$info->facebook_link}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Twitter Link</label>
                    <input type="text" class="form-control" name="twitter_link" id="exampleInputPassword1"
                        placeholder="Twitter Link" value="{{$info->twitter_link}}">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Instagram Link</label>
                    <input type="text" class="form-control" name="instagram_link" id="exampleInputPassword1"
                        placeholder="Instagram Link" value="{{$info->instagram_link}}">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Linkedin Link</label>
                    <input type="text" class="form-control" name="linkedin_link" id="exampleInputPassword1"
                        placeholder="Linkedin Link" value="{{$info->linkedin_link}}">
                </div>
                <!-- <div class="form-group">
                    <label for="exampleInputFile">Logo</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                </div> -->

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