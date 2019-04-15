<?php
use  App\User;
use  App\Comment;
use  App\Company;


?>
@extends('dash')

@section('pageTitle', 'Company')
@section('content')

    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-4">
                    <a href="/companies/create"><button type="button" class="btn btn-purple btn-rounded w-md waves-effect waves-light m-b-20">Create Company</button></a>
                </div>
            </div>
            <!-- end row -->


            <div class="row">

                @if($companies->isEmpty())
                <div class="col-md-6">
                    <div class="alert alert-danger fade show m-b-0">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4>You have no Comany yet!</h4>
                        <p>Please create <a href="/companies/create">new Company</a></p>
                    </div>
                </div>
                @endif


                @foreach($companies as $company)
                <div class="col-xl-4">
                    <div class="card-box project-box">
                        <h4 class="mt-0 text-success text-uppercase"><a href="companies/{{ $company->id }}" class="text-inverse">{{ $company->name }}</a></h4>

                        <p class="text-muted font-14">{{ $company->description }}<a href="companies/{{ $company->id }}" class="font-600 text-muted"> view more</a>
                        </p>

                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="card-box widget-user">
                                    <div class="text-center">
                                        <i class=" text-custom h3 mdi mdi mdi-briefcase-outline "></i>
                                        <h2 class="text-custom" data-plugin="counterup">{{ $company->project_count }}</h2>
                                        <h5>Projects</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="card-box widget-user">
                                    <div class="text-center">
                                        <i class=" text-pink h3 mdi mdi-comment-multiple-outline "></i>

                                        <h2 class="text-pink" data-plugin="counterup">{{$company->comment_count}}</h2>
                                        <h5>Comments</h5>

                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="project-members m-b-20">
                            <span class="m-r-5 font-600">Admin :</span>
                            <a href="{{ $company->user_id }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{User::where('id', $company->user_id)->first()->name}}">
                                <img src="{{url('/upload/avatar.jpg')}}" class="rounded-circle thumb-sm" alt="friend" />
                            </a>
                            <a class="btn btn-info btn-rounded pull-right" href="/companies/{{ $company->id }}">View Details</a>

                        </div>


                    </div>
                </div><!-- end col-->
                    @endforeach


            </div>
            <!-- end row -->


        </div> <!-- container -->

    </div>




    @endsection