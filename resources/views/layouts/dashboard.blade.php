<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>{{ env('APP_NAME') }} - {{ env('APP_DESC ') }}</title>

    <meta name="description" content="{{ env('APP_DESC') }}">
    <meta name="author" content="Asan Webs Development">
    <meta name="robots" content="noindex, nofollow">

    <link rel="shortcut icon" href="/assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/media/favicons/apple-touch-icon-180x180.png">

    <link rel="stylesheet" id="css-main" href="/assets/css/oneui.min.css">
    @yield('head')
    @vite(['resources/js/app.js'])
    @livewireStyles()
</head>

<body>

    <div id="page-container"
        class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">
        <nav id="sidebar" aria-label="Main Navigation">
            <div class="content-header">
                <a class="fw-semibold text-dual" href="index.html">
                    <span class="smini-visible">
                        <i class="fa fa-circle-notch text-primary"></i>
                    </span>
                    <span class="smini-hide fs-5 tracking-wider">{{ env('APP_NAME') }}</span>
                </a>

                <div>

                    <button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout"
                        data-action="dark_mode_toggle">
                        <i class="far fa-moon"></i>
                    </button>

                    <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout"
                        data-action="sidebar_close" href="javascript:void(0)">
                        <i class="fa fa-fw fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="js-sidebar-scroll">
                <div class="content-side">
                    <ul class="nav-main">
                        <li class="nav-main-item">
                            <a class="nav-main-link active" href="{{ route('admin.index') }}">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-main-heading">Device Management</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ route('admin.device.index') }}">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">All Devices</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="{{ route('admin.device.create') }}">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Add new Device</span>
                            </a>
                        </li>
                        <li class="nav-main-heading">Battery Level</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link"
                                href="{{ route('admin.device.battery_level', ['from' => 90, 'to' => 100]) }}">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Between 90% to 100%</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link"
                                href="{{ route('admin.device.battery_level', ['from' => 60, 'to' => 90]) }}">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Between 60% to 90%</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link"
                                href="{{ route('admin.device.battery_level', ['from' => 40, 'to' => 60]) }}">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Between 40% to 60%</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link"
                                href="{{ route('admin.device.battery_level', ['from' => 20, 'to' => 40]) }}">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Between 20% to 40%</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link"
                                href="{{ route('admin.device.battery_level', ['from' => 10, 'to' => 20]) }}">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Between 10% to 20%</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link"
                                href="{{ route('admin.device.battery_level', ['from' => 0, 'to' => 10]) }}">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Between 0% to 10%</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <header id="page-header">
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-lg-none" data-toggle="layout"
                        data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <button type="button" class="btn btn-sm btn-alt-secondary me-2 d-none d-lg-inline-block"
                        data-toggle="layout" data-action="sidebar_mini_toggle">
                        <i class="fa fa-fw fa-ellipsis-v"></i>
                    </button>
                </div>

                <div class="d-flex align-items-center">

                    <div class="dropdown d-inline-block ms-2">
                        <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center"
                            id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="rounded-circle" src="/assets/media/avatars/avatar10.jpg" alt="Header Avatar"
                                style="width: 21px;">
                            <span class="d-none d-sm-inline-block ms-2">{{ auth()->user()->name }}</span>
                            <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1 mt-1"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0"
                            aria-labelledby="page-header-user-dropdown">
                            <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                                <img class="img-avatar img-avatar48 img-avatar-thumb"
                                    src="/assets/media/avatars/avatar10.jpg" alt="">
                                <p class="mt-2 mb-0 fw-medium">{{ auth()->user()->name }}</p>
                                <p class="mb-0 text-muted fs-sm fw-medium">{{ auth()->user()->email }}</p>
                            </div>
                            <div role="separator" class="dropdown-divider m-0"></div>
                            <div class="p-2">
                                <form id="logout" action="{{ route('logout') }}" method="POST">
                                    @csrf

                                </form>
                                <a class="dropdown-item d-flex align-items-center justify-content-between"
                                    onclick="document.getElementById('logout').submit();" href="javascript:void(0);">
                                    <span class="fs-sm fw-medium">Log Out</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block ms-2">
                        <button type="button" class="btn btn-sm btn-alt-secondary"
                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-fw fa-bell"></i>
                            <span class="text-primary">•</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 border-0 fs-sm"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-2 bg-body-light border-bottom text-center rounded-top">
                                <h5 class="dropdown-header text-uppercase">Notifications</h5>
                            </div>
                            <ul class="nav-items mb-0">

                            </ul>
                            <div class="p-2 border-top text-center">
                                <a class="d-inline-block fw-medium" href="javascript:void(0)">
                                    <i class="fa fa-fw fa-arrow-down me-1 opacity-50"></i> Load More..
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="page-header-loader" class="overlay-header bg-body-extra-light">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')
        <footer id="page-footer" class="bg-body-light">
            <div class="content py-3">
                <div class="row fs-sm">
                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                        <a class="fw-semibold" href="#" target="_blank">{{ env('APP_NAME') }}</a>
                        &copy; <span>{{ date('Y') }}</span>. All Rights Reserved
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="/assets/js/oneui.app.min.js"></script>

    <script src="/assets/js/plugins/chart.js/chart.umd.js"></script>

    <script src="/assets/js/pages/be_pages_dashboard.min.js"></script>
    @yield('footer')
    <x-alert />

    @livewireScripts()
</body>

</html>
