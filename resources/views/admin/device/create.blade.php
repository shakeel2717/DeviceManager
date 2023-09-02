@extends('layouts.dashboard')
@section('content')
    <main id="main-container">
        <div class="content">
            <div
                class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center py-2 text-center text-md-start">
                <div class="flex-grow-1 mb-1 mb-md-0">
                    <h1 class="h3 fw-bold mb-1">
                        Dashboard
                    </h1>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="row items-push">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <form action="{{ route('admin.device.store') }}" method="POST">
                            @csrf
                            <div class="from-group mb-2">
                                <label for="name">Device Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Device Name">
                            </div>
                            <div class="from-group mb-2">
                                <label for="code">Device Code</label>
                                <input type="text" name="code" id="code" class="form-control"
                                    placeholder="Device Code">
                            </div>
                            <div class="from-group mb-2">
                                <button type="submit" class="btn btn-primary btn-lg mt-4"><i class="fa fa-plus-square"
                                        aria-hidden="true"></i> Add Device</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
