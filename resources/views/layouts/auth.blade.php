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
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/media/favicons/apple-touch-icon-180x180.png">

    <link rel="stylesheet" id="css-main" href="/assets/css/oneui.min.css">
</head>

<body>
    <div id="page-container">
        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="hero-static d-flex align-items-center">
                <div class="content">
                    <div class="row justify-content-center push">
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            @yield('form')
                        </div>
                    </div>
                    <div class="fs-sm text-muted text-center">
                        <strong>{{ env('APP_NAME') }}</strong> &copy; <span>{{ date('Y') }}. All Rights
                            Reserved</span>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- END Page Container -->
    <script src="/assets/js/oneui.app.min.js"></script>
    <script src="/assets/js/lib/jquery.min.js"></script>
    <script src="/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="/assets/js/pages/op_auth_signin.min.js"></script>
    <x-alert/>
</body>

</html>
