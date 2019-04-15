@extends('dash')
@section('pageTitle', 'Profile')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card-box task-detail">
                    <div class="media m-b-30">
                    <img class="d-flex mr-3 rounded-circle" alt="64x64" src="/upload/{{$user->avatar}}" style="width: 100px; height: 100px;">
                    <div class="media-body">
                        <h2 class="media-heading mb-0 mt-5">{{$user->name}}</h2>
                    </div>
                </div>

                <div class="p-20">
                            <form role="form" method="post" action="{{url('/profile')}}" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group row">
                                    <label class="col-2 col-form-label">Full Name</label>
                                    <div class="col-10">
                                        <input type="text" name="name" class="form-control" value="{{$user->name}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-2 col-form-label" for="example-email">Email</label>
                                    <div class="col-10">
                                        <input type="email" value="{{$user->email}}" name="email" class="form-control" placeholder="Email" >
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-2 col-form-label" for="example-email">City</label>
                                    <div class="col-10">
                                        <input type="text" value="{{$user->city}}" name="city" class="form-control" placeholder="Enter City">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload Profile Picture</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" name="avatar" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose Photo</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right m-t-30">
                                    <input type="submit" class="btn btn-success" value="Update">

                                    <button type="button" class="btn btn-light waves-effect">Cancel
                                    </button>
                                </div>

                            </form>
                        </div>

            </div>

            </div>
        </div><!-- end col -->

    </div>
    </div>







    @endsection