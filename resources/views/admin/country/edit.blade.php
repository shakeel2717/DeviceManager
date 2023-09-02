@extends('layouts.dashboard')
@section('head')
    <link rel="stylesheet" href="/assets/js/plugins/simplemde/simplemde.min.css">
@endsection
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
                        <form action="{{ route('admin.countries.update',['country' => $country->id]) }}" method="POST">
                            @csrf
                            @method("PATCH")
                            <div class="from-group mb-2">
                                <label for="name">Country Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    placeholder="Country Name" value="{{ $country->name }}">
                            </div>
                            <div class="from-group mb-2">
                                <label for="flag">Country Flag Link</label>
                                <input type="text" name="flag" id="flag" class="form-control"
                                    placeholder="Country Flag Link" value="{{ $country->flag }}">
                            </div>
                            <div class="from-group mb-2">
                                <label for="description">Country Description</label>
                                <textarea class="js-simplemde" id="simplemde" name="description">{{ $country->description }}</textarea>
                            </div>
                            <div class="from-group mb-2">
                                <button type="submit" class="btn btn-primary btn-lg mt-4"><i class="fa fa-plus-square"
                                        aria-hidden="true"></i> Update Country</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('footer')
    <script src="/assets/js/plugins/simplemde/simplemde.min.js"></script>
    <script>
        One.helpersOnLoad(['js-ckeditor', 'js-simplemde']);
    </script>
@endsection
