@if (session()->has('errors'))
    <div class="alert alert-dismissable  background-danger text-center">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>
            {!! session()->get('errors') !!}
        </strong>
    </div>
@endif