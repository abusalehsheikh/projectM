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
                                <h2 class="text-custom" data-plugin="counterup">{{ $company->count() }}</h2>
                                <h5>Companies</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card-box widget-user">
                            <div class="text-center">
                                <i class=" text-custom h3 mdi mdi mdi-briefcase-outline "></i>
                                <h2 class="text-pink" data-plugin="counterup">{{ $project->count() }}</h2>
                                <h5>Projects</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-12">
                        <div class="card-box widget-user">
                            <div class="text-center">
                                <i class=" text-pink h3 mdi mdi-comment-multiple-outline "></i>

                                <h2 class="text-custom" data-plugin="counterup">{{$comment->count()}}</h2>
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
            </div>
        </div>
@endsection


