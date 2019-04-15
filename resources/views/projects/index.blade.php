<?php
use App\Company;
use App\User;
use App\Project;
?>
@extends('dash')
@section('pageTitle', 'Projects' )
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <a href="{{'projects/create'}}" class="btn btn-purple btn-rounded w-md waves-effect waves-light m-b-20"> <i class="mdi mdi-briefcase-plus mdi-18px m-r-5"></i>  Create Project</a>
                </div>

            </div>
    <!-- end row -->


    <div class="row">

        @if($projects->isEmpty())
            <div class="col-md-6">
                <div class="alert alert-danger fade show m-b-0">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>You have no Project yet!</h4>
                    <p>Please create <a href="/{{'projects/create'}}">new Project</a></p>
                </div>
            </div>
        @endif

        @foreach($projects as $project)



        <div class="col-xl-4">
            <div class="card-box project-box">

                <h3 class="mt-0"><a href="projects/{{ $project->id }}" class="text-inverse">{{ $project->name }}</a></h3>

                <p class="text-success text-uppercase m-b-20 font-14">{{ $project->company->name}}</p>
                <p class="text-muted font-13">{{ $project->description }}<a href="projects/{{ $project->id }}" class="font-600 text-muted"> view more</a>
                </p>

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="card-box widget-user">
                            <div class="text-center">
                                <i class=" text-custom h2  mdi mdi-format-list-checkbox "></i>
                                <h2 class="text-custom" data-plugin="counterup">0</h2>
                                <h5>Tasks</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="card-box widget-user">
                            <div class="text-center">
                                <i class=" text-pink h2 mdi mdi-comment-multiple-outline "></i>

                                <h2 class="text-pink" data-plugin="counterup">{{ $project->comment_count }}</h2>
                                <h5>Comments</h5>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="project-members m-b-20">
                    <span class="m-r-5 font-600">Admin :</span>
                    <a href="{{ $project->user_id }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{\App\User::where('id', $project->user_id)->first()->name}}">
                        <img src="{{asset('assets/images/avatar.jpg')}}" class="rounded-circle thumb-sm" alt="friend" />
                    </a>
                    <a class="btn btn-info btn-rounded pull-right" href="/projects/{{ $project->id }}">View Details</a>

                </div>

            </div>
        </div><!-- end col-->
            @endforeach

    </div>
    </div>
    </div>

@endsection