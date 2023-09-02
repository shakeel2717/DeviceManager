@extends('layouts.auth')
@section('form')
    <div class="block block-rounded mb-0">
        <div class="block-header block-header-default">
            <h3 class="block-title">Sign In</h3>
            <div class="block-options">
                <a class="btn-block-option fs-sm" href="{{ route('password.email') }}">Forgot
                    Password?</a>
                <a class="btn-block-option" href="op_auth_signup.html" data-bs-toggle="tooltip" data-bs-placement="left"
                    title="New Account">
                    <i class="fa fa-user-plus"></i>
                </a>
            </div>
        </div>
        <div class="block-content">
            <div class="p-sm-3 px-lg-4 px-xxl-5 py-lg-5">
                <h1 class="h2 mb-1">{{ env('APP_NAME') }}</h1>
                <p class="fw-medium text-muted">
                    Welcome, please login.
                </p>
                <form class="" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="py-3">
                        <div class="mb-4">
                            <input type="text" class="form-control form-control-alt form-control-lg" id="username"
                                name="username" placeholder="Username">
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control form-control-alt form-control-lg" id="password"
                                name="password" placeholder="Password">
                        </div>
                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="login-remember"
                                    name="login-remember">
                                <label class="form-check-label" for="login-remember">Remember
                                    Me</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6 col-xl-5">
                            <button type="submit" class="btn w-100 btn-alt-primary">
                                <i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> Sign In
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
