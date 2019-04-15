@if(!$comments->isEmpty())
    <div class="card-box">
        <h5><i class="mdi mdi-comment-outline"></i>  Comments ({{$comments->count()}})</h5>
        @foreach($comments as $comment)
        <div class="comment">
            <img src="{{url('/upload/avatar.jpg')}}" alt="" class="comment-avatar">
            <div class="comment-body">
                <div class="comment-text">
                    <div class="comment-header">
                        <a href="#" title="">{{ $comment->user->name}}</a><span>{{ $comment->created_at}}</span>
                    </div>
                    {{ $comment->body }}
                </div>
            </div>
        </div>
            @endforeach
    </div>
    @endif

