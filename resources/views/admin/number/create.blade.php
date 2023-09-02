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
                        <form action="{{ route('admin.numbers.store') }}" method="POST">
                            @csrf
                            <div class="from-group mb-2">
                                <label for="name">Select Country</label>
                                <select name="country_id" id="country_id" class="form-control">
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="from-group mb-2">
                                <label for="number">Add Number</label>
                                <input type="text" name="number" id="number" class="form-control"
                                    placeholder="+923037702717">
                            </div>
                            <div class="from-group mb-2">
                                <button type="submit" class="btn btn-primary btn-lg mt-4"><i class="fa fa-plus-square"
                                        aria-hidden="true"></i> Add Number</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
