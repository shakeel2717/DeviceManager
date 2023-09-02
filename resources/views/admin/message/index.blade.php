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
                <div class="col-md-12">
                    <div class="card card-body">
                        <livewire:admin.all-messages/>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
