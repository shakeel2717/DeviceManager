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
                <div class="col-sm-6 col-xxl-4">
                    <div class="block block-rounded d-flex flex-column h-100 mb-0">
                        <div
                            class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                            <dl class="mb-0">
                                <dt class="fs-3 fw-bold">{{ $devices->count() }}</dt>
                                <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Total Devices</dd>
                            </dl>
                            <div class="item item-rounded-lg bg-body-light">
                                <i class="far fa-gem fs-3 text-primary"></i>
                            </div>
                        </div>
                        <div class="bg-body-light rounded-bottom">
                            <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                href="#">
                                <span>View all Devices</span>
                                <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xxl-4">
                    <div class="block block-rounded d-flex flex-column h-100 mb-0">
                        <div
                            class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                            <dl class="mb-0">
                                <dt class="fs-3 fw-bold">
                                    {{ $devices->whereDate('updated_at', '>=', now()->subHours(24))->count() }}</dt>
                                <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Active Devices</dd>
                            </dl>
                            <div class="item item-rounded-lg bg-body-light">
                                <i class="far fa-gem fs-3 text-primary"></i>
                            </div>
                        </div>
                        <div class="bg-body-light rounded-bottom">
                            <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                href="#">
                                <span>View all Devices</span>
                                <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xxl-4">
                    <div class="block block-rounded d-flex flex-column h-100 mb-0">
                        <div
                            class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                            <dl class="mb-0">
                                <dt class="fs-3 fw-bold">
                                    {{ $devices->whereDate('updated_at', '<=', now()->subHours(24))->count() }}</dt>
                                <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Offline Devices</dd>
                            </dl>
                            <div class="item item-rounded-lg bg-body-light">
                                <i class="far fa-gem fs-3 text-primary"></i>
                            </div>
                        </div>
                        <div class="bg-body-light rounded-bottom">
                            <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                href="#">
                                <span>View all Devices</span>
                                <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xxl-3">
                    <div class="block block-rounded d-flex flex-column h-100 mb-0">
                        <div
                            class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                            <dl class="mb-0">
                                <dt class="fs-3 fw-bold">
                                    {{ $devices->count() }}</dt>
                                <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Devices Upto 90% Battery Level
                                </dd>
                            </dl>
                            <div class="item item-rounded-lg bg-body-light">
                                <i class="far fa-gem fs-3 text-primary"></i>
                            </div>
                        </div>
                        <div class="bg-body-light rounded-bottom">
                            <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                href="#">
                                <span>View all Devices</span>
                                <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xxl-3">
                    <div class="block block-rounded d-flex flex-column h-100 mb-0">
                        <div
                            class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                            <dl class="mb-0">
                                <dt class="fs-3 fw-bold">
                                    {{ $devices->count() }}</dt>
                                <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Devices Upto 50% Battery Level
                                </dd>
                            </dl>
                            <div class="item item-rounded-lg bg-body-light">
                                <i class="far fa-gem fs-3 text-primary"></i>
                            </div>
                        </div>
                        <div class="bg-body-light rounded-bottom">
                            <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                href="#">
                                <span>View all Devices</span>
                                <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xxl-3">
                    <div class="block block-rounded d-flex flex-column h-100 mb-0">
                        <div
                            class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                            <dl class="mb-0">
                                <dt class="fs-3 fw-bold">
                                    {{ $devices->count() }}</dt>
                                <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Devices Upto 30% Battery Level
                                </dd>
                            </dl>
                            <div class="item item-rounded-lg bg-body-light">
                                <i class="far fa-gem fs-3 text-primary"></i>
                            </div>
                        </div>
                        <div class="bg-body-light rounded-bottom">
                            <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                href="#">
                                <span>View all Devices</span>
                                <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xxl-3">
                    <div class="block block-rounded d-flex flex-column h-100 mb-0">
                        <div
                            class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                            <dl class="mb-0">
                                <dt class="fs-3 fw-bold">
                                    {{ $devices->count() }}</dt>
                                <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">Devices Upto 15% Battery Level
                                </dd>
                            </dl>
                            <div class="item item-rounded-lg bg-body-light">
                                <i class="far fa-gem fs-3 text-primary"></i>
                            </div>
                        </div>
                        <div class="bg-body-light rounded-bottom">
                            <a class="block-content block-content-full block-content-sm fs-sm fw-medium d-flex align-items-center justify-content-between"
                                href="#">
                                <span>View all Devices</span>
                                <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
