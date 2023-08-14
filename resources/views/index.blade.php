@extends('layouts.app')
@section('content')
    <h1>Hello from blade</h1>
    @foreach ($users as $user)
        <h2>{{ $user->username }}</h2>
    @endforeach
@endsection
