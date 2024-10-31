@extends('layouts.app')
@section('title', 'Keranjang')
@section('content')
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4">Login</h3>

            <!-- Login Form -->
            <form action="" method="POST">
                @csrf

                <!-- Username or Email Field -->
                <div class="mb-3">
                    <label for="username" class="form-label">Username or Email</label>
                    <input type="text" name="username" id="username" class="form-control"
                        placeholder="Enter your username or email" required>
                </div>

                <!-- Password Field -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control"
                        placeholder="Enter your password" required>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>
@endsection
