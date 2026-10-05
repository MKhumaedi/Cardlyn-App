<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!--Viewport -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{__('messages.payment.payment_cancel')}}</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-vcard.css') }}">

</head>
<body>

    <div class="container main-payment">
        <div class="payment-section position-relative py-5 px-sm-3">
            <div>
                <img src="{{asset('assets/img/payment.png')}}" class="img-fluid">
            </div>
            <div class="payment-heading position-absolute top-50 translate-middle-y">
                <h1 class="payment-title">{{__('messages.payment.payment')}}</h1>
                <p class="payment-text">{{__('messages.payment.cancelled')}}</p>
                <a href="{{route('subscription.upgrade')}}" type="button" class="btn payment-btn">{{__('messages.common.back')}}</a>
            </div>
        </div>
    </div>

    <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
