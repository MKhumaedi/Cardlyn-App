<!--user_pages-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<!--Viewport-->
<meta charset="UTF-8"><meta name="HandheldFriendly" content="True"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<!--Canonical-->
<link rel="home" href="{{ env('APP_URL') }}">
<link rel="canonical" href="{{ url()->current(); }}">
<link rel="alternate" type="application/rss+xml" title="{{ env('APP_NAME') }}" href="{{ env('APP_URL') }}/rss.xml">
<link rel="shortcut icon" href="{{ getFaviconUrl() }}" type="image/x-icon">
<!--Robots-->
<meta name="robots" content="all, index, follow, max-image-preview:large"><meta name="googlebot-news" content="all, index, follow, max-image-preview:large">
<!-- Title -->
<title>@yield('title') - {{ getAppName() }}</title>
<meta name="title" content="@yield('title') - {{ getAppName() }}">
<meta name="description" content="{{ env('GLOBAL_DESC') }}">
<meta name="keywords" content="{{ env('GLOBAL_KEY') }}">
<meta name="news_keywords" content="{{ env('GLOBAL_KEY') }}">
<!--Author-->
<meta name="publisher" content="{{ env('APP_NAME') }}">
<meta name="author" content="Adi Gunawan">
<meta name="publisher" content="{{ env('APP_COMPANY') }}">
<!--Location-->
<link rel="alternate" href="{{ url()->current(); }}" hreflang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="alternate" href="{{ url()->current(); }}" hreflang="x-default">
<meta content="{{ str_replace('_', '-', app()->getLocale()) }}" name="geo.region">
<meta content="{{ str_replace('_', '-', app()->getLocale()) }}" name="geo.country">
<meta content="{{ str_replace('_', '-', app()->getLocale()) }}" name="geo.placename">
<meta content="x;x" name="geo.position">
<meta content="x,x" name="ICBM">
<!-- OG -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="{{ env('APP_NAME') }}">
<meta property="og:url" content="{{ url()->current(); }}">
<meta property="og:headline" content="@yield('title') - {{ getAppName() }}">
<meta property="og:title" content="@yield('title') - {{ getAppName() }}">
<meta property="og:description" content="{{ env('GLOBAL_DESC') }}">
<meta property="og:image" content="{{ env('APP_URL') }}/assets/img/kartunama/kartunamapro.png">
<meta property="og:image:alt" content="@yield('title') - {{ getAppName() }}">
<meta property="og:rich_attachment" content="true">
<meta property="og:locale" content="id_ID">
<meta property="og:locale:alternate" content="en_US">
<meta property="fb:app_id" content="1411872802675627">
<meta property="fb:pages" content="103417799098875"> 
<meta property="fb:profile_id" content="103417799098875">
<meta property="pinterest-rich-pin" content="true">
<meta property="article:author" content="{{ env('APP_NAME') }}">
<meta name="og:image:width" content="1200">
<meta name="og:image:height" content="auto">
<meta name="twitter:title" content="@yield('title') - {{ getAppName() }}">
<meta name="twitter:url" content="{{ url()->current(); }}">
<meta name="twitter:description" content="{{ env('GLOBAL_DESC') }}">
<meta name="twitter:site" content="{{ env('APP_URL') }}">
<meta name="twitter:image" content="{{ env('APP_URL') }}/assets/img/kartunama/kartunamapro.png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:app:country" content="ID">
<meta name="twitter:app:name:iphone" content="{{ env('APP_NAME') }}">
<meta name="twitter:app:name:ipad" content="{{ env('APP_NAME') }}">
<meta name="twitter:app:name:googleplay" content="Kartunama Pro">
<meta name="twitter:app:id:googleplay" content="id.mcproject.kartunamapro">
<!-- Webapp -->
<link rel="manifest" href="{{ env('APP_URL') }}/manifest.json">
<meta name="msapplication-starturl" content="{{ env('APP_URL') }}">
<meta name="start_url" content="/">
<meta name="application-name" content="{{ env('APP_NAME') }}">
<meta name="apple-mobile-web-app-title" content="{{ env('APP_NAME') }}">
<meta name="msapplication-tooltip" content="{{ env('APP_NAME') }}">
<meta name="theme-color" content="#0078D2">
<meta name="background_color" content="#FFFFFF">
<meta name="msapplication-navbutton-color" content="#0078D2">
<meta name="msapplication-TileColor" content="#0078D2">
<meta name="apple-mobile-web-app-status-bar-style" content="#0078D2">
<meta name="mssmarttagspreventparsing" content="true">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="msapplication-TileImage" content="{{ env('APP_URL') }}/assets/img/logo/kartunama-144.png">
<link rel="apple-touch-icon" href="{{ env('APP_URL') }}/assets/img/logo/apple-icon.png">
<!--Resource-->
<link href="//fonts.gstatic.com" rel="preconnect dns-prefetch" crossorigin><link href="//ajax.googleapis.com" rel="dns-prefetch"><link href="//fonts.googleapis.com" rel="preconnect dns-prefetch"><link href="//www.google-analytics.com" rel="dns-prefetch"><link href="//www.googletagservices.com" rel="dns-prefetch"><link href="//partner.googleadservices.com" rel="dns-prefetch"><link href="//www.google.com" rel="preconnect dns-prefetch"><link href="//www.youtube.com" rel="preconnect dns-prefetch"><link href="//www.recaptcha.net" rel="preconnect dns-prefetch"><link href="//www.gstatic.com" rel="preconnect dns-prefetch"><link href="//www.googletagmanager.com" rel="preconnect dns-prefetch"><link href="//ajax.cloudflare.com" rel="preconnect dns-prefetch"><link href="//cdn.jsdelivr.net" rel="preconnect dns-prefetch"><link href="//connect.facebook.net" rel="preconnect dns-prefetch"><link href="//pagead2.googlesyndication.com" rel="preconnect dns-prefetch"><link href="//googleads.g.doubleclick.net" rel="preconnect dns-prefetch"><link href="//ad.doubleclick.net" rel="preconnect dns-prefetch"><link href="//static.doubleclick.net" rel="preconnect dns-prefetch"><link href="//tpc.googlesyndication.com" rel="preconnect dns-prefetch"><link href="//adservice.google.com" rel="preconnect dns-prefetch">

<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700&display=swap"/>
<!-- General CSS Files -->
<link rel="stylesheet" href="{{ asset('assets/css/third-party.css') }}">
<link rel="stylesheet" href="{{ env('APP_URL') }}{{ mix('assets/css/page.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
@if(!getLogInUser()->theme_mode)
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
@else
<link rel="stylesheet" href="{{ asset('css/plugins.dark.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.dark.css') }}">
@endif
@livewireStyles
@livewireScripts
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
data-turbolinks-eval="false" data-turbo-eval="false"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
<script src="{{ asset('assets/js/third-party.js') }}"></script>
<script src="{{ asset('assets/js/messages.js') }}"></script>
<script data-turbo-eval="false">
    let stripe = ''
    @if (config('services.stripe.key'))
    stripe = Stripe('{{ config('services.stripe.key') }}')
    @endif
    let noData = "{{__('messages.no_data')}}"
    let utilsScript = "{{asset('assets/js/inttel/js/utils.min.js') }}"
    let defaultProfileUrl = "{{ asset('web/media/avatars/150-26.jpg') }}"
    let defaultTemplate = "{{ asset('assets/images/default_cover_image.jpg') }}"
    let defaultServiceIconUrl = "{{ asset('assets/images/default_service.png') }}"
    let defaultCoverUrl = "{{ asset('assets/images/default_cover_image.jpg') }}"
    let defaultGalleryUrl = "{{ asset('assets/images/default_service.png') }}"
    let defaultAppLogoUrl = "{{ asset(getAppLogo()) }}"
    let defaultFaviconUrl = "{{ getFaviconUrl() }}"
    let getLoggedInUserdata = "{{ getLogInUser() }}";
    let getLoggedInUserLang = "{{getCurrentLanguageName()}}";
    let getCurrencyCode = "{{getMaximumCurrencyCode()}}";
    let sweetAlertIcon = "{{ asset('images/remove.png') }}"
    let options = {
        'key': "{{ config('payments.razorpay.key') }}",
        'amount': 0, //  100 refers to 1
        'currency': 'INR',
        'name': "{{getAppName()}}",
        'order_id': '',
        'description': '',
        'image': '{{ asset(getAppLogo()) }}', // logo here
        'callback_url': "{{ route('razorpay.success') }}",
        'prefill': {
            'email': '', // recipient email here
            'name': '', // recipient name here
            'contact': '', // recipient phone here
        },
        'readonly': {
            'name': 'true',
            'email': 'true',
            'contact': 'true',
        },
        'theme': {
            'color': '#0ea6e9',
        },
        'modal': {
            'ondismiss': function () {
                $('#paymentGatewayModal').modal('hide');
                displayErrorMessage(Lang.get('messages.placeholder.payment_not_complete'));
                setTimeout(function () {
                    Turbo.visit(window.location.href);
                }, 1000);
            },
        },
    };
    $(document).ready(function(){
        $('[data-bs-toggle="tooltip"]').tooltip()
    })
</script>
@routes
<script src="{{ env('APP_URL') }}{{ mix('assets/js/pages.js') }}"></script>
<!--Adblock-->
<style>
/*Adblock*/
@keyframes fadeInDown{0%{opacity:0;transform:translateY(-20px);}100%{opacity:1;transform:translateY(0);}} @keyframes rubberBand{from{transform:scale3d(1,1,1)}30%{transform:scale3d(1.25,0.75,1);}40%{transform:scale3d(0.75,1.25,1)}50%{transform:scale3d(1.15,0.85,1)}65%{transform:scale3d(.95,1.05,1)}75%{transform:scale3d(1.05,.95,1)}to{transform:scale3d(1,1,1);}} #seosecretidnadblock{background:rgba(0,0,0,0.65);position:fixed;margin:auto;left:0;right:0;top:0;bottom:0;overflow:auto;z-index:999999;animation:fadeInDown 1s;} #seosecretidnadblock .header{margin:0 0 15px 0;} #seosecretidnadblock .inner{background:#CC3333;color:#F5F5F5;box-shadow:0 5px 20px rgba(0,0,0,0.1);text-align:center;width:600px;padding:30px;border-radius:5px;margin:7% auto 2% auto;animation:rubberBand 2s;} #seosecretidnadblock button{padding:10px 20px;border:0;background:rgba(0,0,0,0.15);color:#F5F5F5;margin:10px 5px;cursor:pointer;transition:all .3s;} #seosecretidnadblock button:hover{background:rgba(0,0,0,0.35);color:#fff;outline:none;} #seosecretidnadblock button.active,#arlinablock button:hover.active{background:#F5F5F5;color:#333333;outline:none;} #seosecretidnadblock .fixblock{background:#FFFFFF;text-align:left;color:#333333;padding:10px 0px;height:300px;overflow:auto;line-height:30px;} #seosecretidnadblock .fixblock div{display:none;} #seosecretidnadblock .fixblock div.active{display:block;} #seosecretidnadblock ol{margin-left:0px;} @media(max-width:768px){#seosecretidnadblock .inner{width:calc(100% - 30px);margin:10px auto;padding:15px;}}
/*Scroll Bar*/
html{scrollbar-width:thin;}html::-webkit-scrollbar{width:5px;background-color:#F5F5F5;}html::-webkit-scrollbar-thumb{background-color:#0078D2;border-radius:0px;}.element{scrollbar-width:thin;}.element::-webkit-scrollbar{width:5px;background-color:#F5F5F5;}.element::-webkit-scrollbar-thumb{background-color:#0078D2;border-radius:0px;}
</style>
<!--Back to Top-->
<style>
.back-top{display:none;position:fixed;bottom:80px;right:26px;width:40px;height:40px;background:#0078D2;cursor:pointer;overflow:hidden;font-size:22px;color:#ffffff;text-align:center;line-height:40px;border-radius:50px;z-index:9999;}.back-top:hover{opacity:1;background:#065FB4;}@media screen and(max-width:880px){.navbar-scrolled.back-top{opacity:0!important;}}
</style>
<!--SR-Only and Custom-->
<style>
.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}body,html{word-wrap:break-word!important;padding:0!important;margin:0!important;touch-action:manipulation!important;}img{max-width:100%;border-radius:5px}img.lazyload:not([src]){visibility:hidden;}img:-moz-broken{opacity:0;}img{position:relative;}img::after{content:"";display:block;position:absolute;top:0;left:0;width:100%;height:100%;background-color:white;}iframe{border-radius:5px;}
</style>
<!--Hyperlink Nofollow Js-->
<script>
document.addEventListener('DOMContentLoaded', function () { var links = document.getElementsByTagName("a"); var i; for (i = 0; i < links.length; i++) { if (!links[i].rel && location.hostname !== links[i].hostname) { links[i].rel = "nofollow noopener noreferrer"; } } });
</script>
<!--google analytics code-->
@if(!empty($metas['google_analytics']))
    {!! $metas['google_analytics'] !!}
@endif
</head>
<body>
    <div class="d-flex flex-column flex-root vh-100">
        <div class="d-flex flex-row flex-column-fluid">
            @include('layouts.sidebar')
            <div class="wrapper d-flex flex-column flex-row-fluid">
                <div class='container-fluid d-flex align-items-stretch justify-content-between px-0'>
                    @include('layouts.header')
                </div>
                <div class='content d-flex flex-column flex-column-fluid pt-7'>
                    @yield('header_toolbar')
                    <div class='d-flex flex-wrap flex-column-fluid'>
                        @yield('content')
                    </div>
                </div>
                <div class='container-fluid'>
                    @include('layouts.footer')
                </div>
            </div>
        </div>
    </div>
    @include('profile.changePassword')
    @include('profile.changelanguage')
    <!--Lazy load img-->
    <script src="{{ asset('assets/js/lazysizes.src.js') }}" async></script>
    <script src="{{ asset('assets/js/lazyload.min.js') }}" async></script>
    <!--Auto Title Alt-->
    <script>
    //<![CDATA[
    let imgs = document.querySelectorAll('img');let as = document.querySelectorAll('a');let iframes = document.querySelectorAll('iframe');let forms = document.querySelectorAll('form');let inputs = document.querySelectorAll('input');let buttons = document.querySelectorAll('button');let navs = document.querySelectorAll('nav');let sections = document.querySelectorAll('section');for (let i=0;i<imgs.length;i++){if(!imgs[i].title){imgs[i].title=imgs[i].alt;}if(!imgs[i].alt){imgs[i].alt=imgs[i].title;}if(!imgs[i].title && !imgs[i].alt){imgs[i].title="View";imgs[i].alt="View";}}for (let i=0;i<as.length;i++){if(!as[i].title){as[i].title="Open";}}for (let i=0;i<iframes.length;i++){if(!iframes[i].title){iframes[i].title="Preview";}}for (let i=0;i<forms.length;i++){if(!forms[i].title){forms[i].title="Form";}}for (let i=0;i<inputs.length;i++){if(!inputs[i].title){inputs[i].title="Input";}}for (let i=0;i<buttons.length;i++){if(!buttons[i].title){buttons[i].title="Action";}}for (let i=0;i<navs.length;i++){if(!navs[i].title){navs[i].title="Navigation";}}for (let i=0;i<sections.length;i++){if(!sections[i].title){sections[i].title="Section";}}
    //]]>
    </script>
    <!--Adblock-->
    <script>
    //<![CDATA[
    setTimeout(function downloadJSAtOnload() {var e=document.createElement("script");e.src="https://cdn.jsdelivr.net/gh/adigunawanxd/pluginsgalaxymag@master/seosecretidnblockads.js",document.body.appendChild(e);window.addEventListener?window.addEventListener("load",downloadJSAtOnload,!1):window.attachEvent?window.attachEvent("onload",downloadJSAtOnload):window.onload=downloadJSAtOnload},8000);
    //]]>
    </script>
    <!--Indicator Scroll-->
    <div class="progress-container">
        <div class="progress-bar" id="progressbar"></div>
    </div>
    <script>
    //<![CDATA[
    window.addEventListener('scroll', myFunction); function myFunction() { var winScroll = document.body.scrollTop || document.documentElement.scrollTop; var height = document.documentElement.scrollHeight - document.documentElement.clientHeight; var scrolled = (winScroll / height) * 100; document.getElementById('progressbar').style.width = scrolled + '%'; }
    //]]>
    </script>
    <!--Back to Top-->
    <script>
    //<![CDATA[
    $(function() { $('.back-top').each(function() { var $this = $(this); $(window).on('scroll', function() { $(this).scrollTop() >= 100 ? $this.fadeIn(250) : $this.fadeOut(250) }), $this.click(function() { $('html, body').animate({ scrollTop: 0 }, 500) }) }); });
    //]]>
    </script>
    <div class="back-top" title="Kembali ke Atas"> ↑ </div>
</body>
</html>
