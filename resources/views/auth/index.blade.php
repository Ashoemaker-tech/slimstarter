@extends('layouts.app')

@section('content')
    <div class="shadow rounded-lg border-2 w-1/2 p-4 mt-10 mx-auto space-y-6 text-center">
        <h1 class="text-xl sm:text-6xl text-gray-900 font-semibold">Your Account</h1>
        <h2 class="sm:text-2xl">Welcome {{ $user->username }}</h2>
    </div>
@endsection
