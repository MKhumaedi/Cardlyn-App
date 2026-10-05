<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!--Viewport -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 Not Found - {{ getAppName() }}</title>
    <!--CSS-->
    <link rel="stylesheet" href=" {{ asset('front/css/bootstrap.min.css') }}"/>
    <link href="{{ env('APP_URL') }}{{ mix('assets/css/custom.css') }}" rel="stylesheet"/>
</head>
<body>
    <div class="container con-404 vh-100 d-flex justify-content-center">
        <div class="row justify-content-md-center d-block">
            <div class="col-md-12 mt-5">
                <img src="{{ asset('assets/img/404-error-image.svg') }}" class="img-fluid img-404 mx-auto d-block">
            </div>
            <div class="col-md-12 text-center error-page-404">
                <h2>Opps! Something's missing...</h2>
                <p class="not-found-subtitle">The page you are looking for doesn't exists / isn't available / was loading incorrectly.</p>
                <a class="btn btn-primary back-btn mt-3" href="{{ url()->previous() }}" >Back to Previous Page</a>
            </div>
        </div>
    </div>
    <script src=" {{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>