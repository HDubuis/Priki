<div class="card" style="margin-bottom: 5px">
    <div class="card-body">
        {{$opinion->description}}
    </div>
    <a href="#" class="card-text text-muted">{{$opinion->user->fullname}}</a>
    <p class="card-text"><small class="text-muted">{{$opinion->created_at->translatedFormat('j F Y') }}</small></p>
    <div>
        @foreach ($opinion->comments as $comment)
            <div class="row">
                <div class="col-3 small text-gray-500">
                    {{ $comment->name }}
                    @if ($comment->pivot->points > 0)
                        +
                    @elseif($comment->pivot->points < 0)
                        -
                    @endif
                </div>
                <div class="col-9 small text-gray-500 mb-2">
                    {{ $comment->pivot->comment }}
                </div>
            </div>
        @endforeach
    </div>
</div>
