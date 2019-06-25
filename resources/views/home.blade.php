@extends('dash')

@section('pageTitle', 'Dashboard')
@section('content')

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="card-box widget-user">
                            <div class="text-center">
                                <i class=" h3 mdi mdi-atlassian text-pink"></i>
                                <h2 class="text-custom" data-plugin="counterup">{{ $companies->count() }}</h2>
                                <h5>Companies</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card-box widget-user">
                            <div class="text-center">
                                <i class=" text-custom h3 mdi mdi mdi-briefcase-outline "></i>
                                <h2 class="text-pink" data-plugin="counterup">{{ $projects->count() }}</h2>
                                <h5>Projects</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-12">
                        <div class="card-box widget-user">
                            <div class="text-center">
                                <i class=" text-pink h3 mdi mdi-comment-multiple-outline "></i>

                                <h2 class="text-custom" data-plugin="counterup">{{$comments->count()}}</h2>
                                <h5>Comments</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card-box widget-user">
                            <div class="text-center">
                                <i class=" text-custom h3  mdi  mdi mdi-account-multiple"></i>

                                <h2 class="text-pink" data-plugin="counterup">{{ $users->count() }}</h2>
                                <h5>Users</h5>

                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">
                    @foreach( $users as $user)
                    <div class="col-xl-3 col-md-6">
                        <div class="card-box widget-user">
                            <div>
                                <img src="{{url('/upload/avatar.jpg')}}" class="img-responsive rounded-circle" alt="user">
                                <div class="wid-u-info">
                                    <h5 class="mt-0 m-b-5">{{ $user->name }}</h5>
                                    <p class="text-muted m-b-5 font-13">{{ $user->email }}</p>
                                    <small class="text-warning"><b>{{ $user->role->name }}</b></small>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col -->
                    @endforeach

                </div>

                <!-- end row -->


                <div class="row">
                    @if ($comments->count() > 0)
                        <div class="col-xl-4">
                            <div class="card-box">

                                <h4 class="header-title mt-0 m-b-30">Latest Comments</h4>

                                @foreach ($comments as $comment)
                                    <div class="media m-b-20">
                                        <div class="d-flex mr-3">
                                            <a href="#"> <img class="media-object rounded-circle thumb-sm" alt="64x64" src="{{url('/upload/avatar.jpg')}}"> </a>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-0">{{ $comment->user->name }}</h5>
                                            <p class="font-13 text-muted mb-0 text-pink">
                                                {{ $comment->body }}
                                            </p>

                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div><!-- end col -->
                    @endif

                    @if ($projects->count() > 0)
                    <div class="col-xl-8">
                        <div class="card-box">

                            <h4 class="header-title mt-0 m-b-30">Latest Projects</h4>

                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Project Name</th>
                                        <th>Start Date</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Assign</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                @foreach( $projects as $project)
                                    <tr>
                                        <td>{{ $project->id }}</td>
                                        <td>{{ $project->name }}</td>
                                        <td>{{ $project->created_at }}</td>
                                        <td>{{ $project->updated_at }}</td>
                                        <td><span class="badge badge-danger">Released</span></td>
                                        <td>Coderthemes</td>
                                    </tr>
                                @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!-- end col -->
                        @endif

                </div>
                <!-- end row -->
            </div>
        </div>
@endsection


