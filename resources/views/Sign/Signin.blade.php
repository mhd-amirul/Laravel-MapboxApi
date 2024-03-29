@extends('layouts.app')

@section('container')
    <div class="row justify-content-center mt-5">
        <div class="col-lg-5 mt-4">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <main class="form-signin mt-5">
                <h1 class="h3 mb-3 fw-normal text-center">Sign In</h1>
                <form action="{{ route('signin.store') }}" method="post">
                    @csrf
                    <div class="form-floating">
                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email" value="{{ old('email') }}" required>
                        <label for="email">Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input name="password" type="password" class="form-control" id="password" placeholder="password" required>
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                </form>
                <small class="d-block text-center mt-3">
                    Dont Have Account? <a href="{{ route('signup.view') }}">Register Now!</a>
                </small>
            </main>
        </div>
    </div>
@endsection
