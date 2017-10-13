@if (Auth::user()->id != $user->id) 
    @if (Auth::user()->is_favariting($user->id))
        {!! Form::open(['route' => ['users.unfavarite', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('お気に入り削除', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['users.favarite', $user->id]]) !!}
            {!! Form::submit('お気に入り登録', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif