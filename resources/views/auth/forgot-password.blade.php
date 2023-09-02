@extends('layouts.auth')
@section('form')
    <div class="block block-rounded mb-0">
        <div class="block-header block-header-default">
            <h3 class="block-title">Forgot Password?</h3>
            <div class="block-options">
                <a class="btn-block-option fs-sm" href="{{ route('login') }}">Remember Password?</a>
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
                    Reset Your Password
                </p>
                <form class="" action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="py-3">
                        <div class="mb-4">
                            <input type="text" class="form-control form-control-alt form-control-lg" id="email"
                                name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6 col-xl-5">
                            <button type="submit" class="btn w-100 btn-alt-primary"> Reset Password
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
