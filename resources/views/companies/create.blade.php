@extends('dash')
@section('pageTitle','Create Company')
@section('content')


    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-8">
                    <div class="card-box pb-5">
                            <form method="post" action="{{ route('companies.store') }}">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="compnany-name">Name <span class="required">*</span></label>
                                    <input placeholder="Enter Name"
                                           id="compnany-name"
                                           name="name"
                                           class="form-control"
                                           required

                                    />
                                </div>
                                <div class="form-group">
                                    <label for="compnany-description">Description</label>
                                    <textarea placeholder="Enter Description"
                                              id="compnany-description"
                                              name="description"
                                              class="form-control autosize-target text-left"
                                              rows="5"
                                              style="resize: vertical"
                                    ></textarea>
                                </div>
                                <div class="p-t-10 pull-right">
                                    <button class="btn btn-sm btn-primary waves-effect waves-light" type="submit">Create</button>
                                </div>

                            </form>
                    </div>
                </div>
            </div>


        </div>
    </div>


@endsection