@extends('layouts.app')
@section('content')
    <section class="my-4">
        <div class="container">
            <div class="card card-body shadow-lg border-0">
                <div class="text-center">
                    <img src="{{ $number->country->flag }}" alt="{{ $number->country->name }}" width="120">
                    <h4 class="card-title text-center my-3">{{ $number->country->name }} Phone Number</h4>
                    <h2 class="card-title text-primary text-center my-3">{{ $number->number }}</h2>
                    <a href="{{ route('number.show', ['number' => $number->number]) }}"
                        class="btn btn-outline-primary">Refresh This Page</a>
                </div>
                <div class="content-area my-4">
                    <div class="row g-4">
                        @forelse ($number->messages()->paginate(10) as $message)
                            <div class="col-md-12">
                                <div class="card border-0 border-start border-primary border-5 bg-light ps-2 shadow">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="text-primary mb-0">From: {{ $message->from }}</h5>
                                            <p class="mb-0">{{ now()->parse($message->received_at)->diffForHumans() }}</p>
                                        </div>
                                        <hr>
                                        <p class="mb-0">{{ $message->message }}</p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-md-12">
                                <div class="card border-0 border-start border-primary border-5 bg-light ps-2 shadow">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5 class="text-primary mb-0">No Message Received yet!</h5>
                                        </div>
                                        <hr>
                                        <p class="mb-0">New Message will be show here...</p>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                        <div class="d-flex justify-content-center mt-4">
                            {{ $number->messages()->paginate(10)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
