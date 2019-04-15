@extends('dash')
@section('pageTitle','Project Details')
@section('content')

        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-8">
                        <div class="card-box task-detail">
                            <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="/projects/{{ $project->id }}/edit" class="dropdown-item">Edit</a>
                                    <a href="" class="dropdown-item" onclick="
                            var result = confirm('Are you sure you wish to delete this Company?');
                                if( result ){
                                        event.preventDefault();
                                        document.getElementById('delete-form').submit();
                                }
                                    ">Delete</a>
                                    <form id="delete-form" action="{{ route('projects.destroy',[$project->id]) }}"
                                          method="POST" style="display: none;">
                                        <input type="hidden" name="_method" value="delete">
                                        @csrf
                                    </form>
                                    <!-- item-->
                                    <a href="{{url('projects/create')}}" class="dropdown-item">Create Project</a>

                                </div>
                            </div>
                            <h4 class="font-600 m-b-20">{{ $project->name }}</h4>
                            <p class="text-success text-uppercase m-b-20 font-14"><a href="/companies/{{$project->company->id}}"> {{ $project->company->name}}</a></p>
                            <p class="text-muted">
                                {{ $project->description }}
                            </p>
                            <ul class="list-inline task-dates m-b-0 m-t-20">
                                <li>
                                    <h5 class="font-600 m-b-5">Start Date</h5>
                                    <p> {{ $project->created_at->format('d F y') }} <small class="text-muted">{{ $project->created_at->format('h:i A') }}</small></p>
                                </li>

                                <li>
                                    <h5 class="font-600 m-b-5">Update Date</h5>
                                    <p> {{ $project->updated_at->format('d F y') }} <small class="text-muted">{{ $project->updated_at->format('h:i A') }}</small></p>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                            <div class="assign-team m-t-30">
                                <h5 class="font-600 m-b-5">Assign to</h5>
                                <div>
                                    <a href="/{{Auth::user()->id}}"> <img class="rounded-circle thumb-sm" alt="64x64" src="{{url('/upload/avatar.jpg')}}"></a>
                                    <a href="#"><span class="add-new-plus"><i class="mdi mdi-plus"></i> </span></a>
                                </div>
                            </div>



                        </div>
                    </div><!-- end col -->


                </div>
                {{--            Comment Section--}}
                <div class="row">
                    <div class="col-sm-8">
                        <div class="card-box">

                            <form method="post" action="{{ route('comments.store') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="commentable_type" value="App\Project">
                                <input type="hidden" name="commentable_id" value="{{ $project->id }}">

                                <span class="input-icon icon-right">
                            <textarea placeholder="Enter Comment"
                                      id="comment-content"
                                      name="body"
                                      class="form-control autosize-target text-left"
                                      rows="5"
                                      required
                                      style="resize: vertical"
                            ></textarea>
                        </span>
                                <div class="p-t-10 pull-right">
                                    <button class="btn btn-sm btn-primary waves-effect waves-light" type="submit">Send</button>
                                </div>
                                <ul class="nav nav-pills profile-pills m-t-10">
                                    <li>
                                        <a href="#"><i class="fa fa-user"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-location-arrow"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class=" fa fa-camera"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-smile-o"></i></a>
                                    </li>
                                </ul>

                            </form>
                            {{--                    --}}
                        </div>
                        @include('partials.comment')
                    </div>
                </div>

                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

@endsection