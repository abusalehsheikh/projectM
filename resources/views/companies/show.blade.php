@extends('dash')
@section('pageTitle', 'Company Details')

@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-8">

                    <div class="card-box task-detail">
                        <div class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a href="/companies/{{ $company->id }}/edit" class="dropdown-item">Edit</a>
                                <!-- item-->
                                <a href="" class="dropdown-item" onclick="
                            var result = confirm('Are you sure you wish to delete this Company?');
                                if( result ){
                                        event.preventDefault();
                                        document.getElementById('delete-form').submit();
                                }
                                    ">Delete</a>
                                <form id="delete-form" action="{{ route('companies.destroy',[$company->id]) }}"
                                      method="POST" style="display: none;">
                                    <input type="hidden" name="_method" value="delete">
                                    @csrf
                                </form>
                                <!-- item-->
                                <a href="{{url('companies/create')}}" class="dropdown-item">Create Company</a>

                            </div>
                        </div>


                        <h4 class="font-600 m-b-20">{{ $company->name }}</h4>

                        <p class="text-muted">
                            {{ $company->description }}
                        </p>

                        @if ($company->created_at != null)


                            <ul class="list-inline task-dates m-b-0 m-t-20">
                                <li>
                                    <h5 class="font-600 m-b-5">Start Date</h5>
                                    <p> {{ $company->created_at->format('d F y') }} <small class="text-muted">{{ $company->created_at->format('h:i A') }}</small></p>
                                </li>

                                <li>
                                    <h5 class="font-600 m-b-5">Update Date</h5>
                                    <p> {{ $company->updated_at->format('d F y') }} <small class="text-muted">{{ $company->updated_at->format('h:i A') }}</small></p>
                                </li>
                            </ul>
                        @endif
                        <div class="clearfix"></div>



                        <div class="assign-team m-t-30">
                            <h5 class="font-600 m-b-5">Assign to</h5>
                            <div>
                                <a href="/{{Auth::user()->id}}"> <img class="rounded-circle thumb-sm" alt="64x64" src="{{url('/upload/avatar.jpg')}}"></a>
                                <a href="#"><span class="add-new-plus"><i class="mdi mdi-plus"></i> </span></a>
                            </div>
                        </div>


                        <div class=" m-t-30">
                            @if($company->projects->isEmpty())
                                <div class="">
                                    <div class="alert alert-danger fade show m-b-0">
                                        <h4>This Company has no Project yet!</h4>
                                        <p>Please create <a href="{{'/projects/create/'.$company->id}}">new Project</a></p>
                                    </div>
                                </div>


                            @else

                            <div class="card-box taskboard-box">
                                <div class="dropdown pull-right">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="{{'/projects/create/'.$company->id}}" class="dropdown-item">Add Project</a>

                                    </div>
                                </div>



                                <h4 class="header-title m-t-0 m-b-30 text-primary">Projects</h4>

                                <ul class="list-unstyled task-list" id="drag-upcoming">

                                    @foreach( $company->projects as $project)
                                        <li>
                                            <div class="card-box shadow bg-lightdark kanban-box">

                                                <div class="kanban-detail">
                                                    <h4><a href="/projects/{{ $project->id }}">{{ $project->name }}</a> </h4>
                                                    <ul class="list-inline m-b-0">

                                                        <li class="list-inline-item">
                                                            3 <i class="mdi mdi-format-align-left"></i>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            {{ $project->comment_count }} <i class="mdi mdi-comment-outline"></i>
                                                        </li>                                                        <li class="list-inline-item">
                                                            <p>
                                                                {{ str_limit($project->description, $limit = 70, $end = ' ...') }}
                                                                <a href="/projects/{{ $project->id }}">View Details</a>
                                                            </p>

                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </li>

                                    @endforeach

                                </ul>

                            </div>
                                @endif
                        </div><!-- end col -->


                    </div>



                </div>
            </div>

{{--            Comment Section--}}
            <div class="row">
                <div class="col-sm-8">
                    <div class="card-box">

                    <form method="post" action="{{ route('comments.store') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="commentable_type" value="App\Company">
                        <input type="hidden" name="commentable_id" value="{{ $company->id }}">

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
        </div>
    </div> <!-- container -->


@endsection