@extends('layouts.app')
@section('content')
    <h1>Hello from blade</h1>
    @foreach ($users as $user)
        <h2>{{ $user->first_name }} - {{ $user->last_name }}</h2>
    @endforeach
@endsection
