@if (Auth::id() != $micropost->id)
    @if (Auth::user()->is_favor($micropost->id))
        {{-- 非お気に入りボタンのフォーム --}}
        {!! Form::open(['route' => ['micropost.unfavorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-success btn-block btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {{-- お気に入りボタンのフォーム --}}
        {!! Form::open(['route' => ['micropost.favorite', $micropost->id]]) !!}
            {!! Form::submit('Favorite', ['class' => "btn btn-default btn-block btn-sm"]) !!}
        {!! Form::close() !!}
    @endif
@endif