@extends('dash')
@section('pageTitle','Create Project')
@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <div class="card-box pb-5">
                    <form method="post" action="{{ route('projects.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="project-name">Name <span class="required">*</span></label>
                            <input placeholder="Enter Name"
                                   id="project-name"
                                   name="name"
                                   class="form-control"
                                   required
                            />
                            <input type="hidden" name="company_id" value="{{ $company_id }}"/>
                        </div>
                        <div class="form-group">
                            <label for="project-description">Description</label>
                            <textarea placeholder="Enter Description"
                                      id="project-description"
                                      name="description"
                                      class="form-control autosize-target text-left"
                                      rows="5"
                                      style="resize: vertical"
                            ></textarea>
                        </div>

                        @if( $companies != null)
                            <div class="form-group">

                                <label for="project-company">Select Company</label><span class="required">*</span>
                                <select name="company_id" id="project-company" class="form-control" required>

                                    @foreach($companies as $company)

                                        <option value="{{ $company->id }}">{{ $company->name }}</option>

                                    @endforeach
                                </select>

                            </div>
                        @endif

                        <div class="form-group">

                            <input type="submit" class="btn btn-outline-primary pull-right" value="Create">

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection