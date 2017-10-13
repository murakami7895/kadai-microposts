@extends('layouts.app')

@section('content')
    @include('users.users_favarite', ['users' => $users])
@endsection