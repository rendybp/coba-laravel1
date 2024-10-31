@extends('layouts.app')
@section('title', 'Profile')
@section('content')
<div class="container d-flex flex-column align-items-center mt-5">
    <!-- Profile Image -->
    <img src="{{ asset('images/profile.png') }}" alt="Profile Picture" class="rounded-circle" style="width: 150px; height: 150px;">

    <!-- Profile Name and ID -->
    <h1 class="mt-3">Rendi Buana Perdana</h1>
    <h5 class="text-muted">210103115</h5>
</div>
@endsection
