@extends('layouts.app')
@section('content')
    <h1>Index page</h1>
    <pre>{{ $user->first_name }}  {{ $user->email }}</pre>
@endsection
