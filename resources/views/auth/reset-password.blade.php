@extends('layouts.auth')
@section('form')
    <div class="block block-rounded mb-0">
        <div class="block-header block-header-default">
            <h3 class="block-title">Reset Password?</h3>
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
                    <input type="hidden" name="token" value="{{ $request->token }}">
                    <input type="hidden" name="email" value="{{ $request->email }}">
                    <div class="pt-3">
                        <div class="mb-4">
                            <input type="password" class="form-control form-control-alt form-control-lg" id="password"
                                name="password" placeholder="New Password">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="mb-0">
                            <input type="password" class="form-control form-control-alt form-control-lg" id="password_confirmation"
                                name="password_confirmation" placeholder="Confirm New Password">
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
