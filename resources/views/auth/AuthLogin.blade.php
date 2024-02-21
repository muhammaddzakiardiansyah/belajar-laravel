@extends('layouts.mainLayout')

@section('title', 'Login')

@section('main')
<div class="login-form">
    <div class="form">
        @if (session('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif (session('auth-failed'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Error!</strong> {{ session('auth-failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h2 class="text-center fw-bolder mb-4">Login Roku id</h2>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label fw-semibold">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="input username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label fw-semibold">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="input password">
            </div>
            <div class="btn-login">
                <button type="submit" class="btn btn-outline-primary d-block mx-auto">Login</button>
            </div>
        </form>
        <p class="text-copyright mt-4">Copyright roku.id</p>
    </div>
</div>
@endsection