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

                                <h2 class="text-custom" data-plugin="counterup">{{$project->count()}}</h2>
                                <h5>Comments</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="card-box widget-user">
                            <div class="text-center">
                                <i class=" text-custom h3  mdi mdi-format-list-checkbox "></i>

                                <h2 class="text-pink" data-plugin="counterup">0</h2>
                                <h5>Tasks</h5>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
@endsection


