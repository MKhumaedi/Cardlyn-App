<!--public_pages-->
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
@if(!empty($metas))
@if($metas['home_title'] && $metas['site_title'])
<title>{{ $metas['home_title'] }} - {{ $metas['site_title'] }}</title>
<meta name="title" content="{{ $metas['home_title'] }} - {{ $metas['site_title'] }}">
@else
<title>@yield('title')</title>
<meta name="title" content="@yield('title')">
@endif
@if($metas['meta_description'])
<meta name="description" content="{{ $metas['meta_description'] }}">
@endif
@if($metas['meta_keyword'])
<meta name="keywords" content="{{ $metas['meta_keyword'] }}">
<meta name="news_keywords" content="{{ $metas['meta_keyword'] }}">
@endif
@else
<title>@yield('title')</title>
<meta name="title" content="@yield('title')">
<meta name="description" content="@if(!empty($metas)) @if($metas['meta_description']) {{ $metas['meta_description'] }} @endif @else {{ env('GLOBAL_DESC') }} @endif">
<meta name="keywords" content="{{ env('GLOBAL_KEY') }}">
<meta name="news_keywords" content="{{ env('GLOBAL_KEY') }}">
@endif
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
<meta property="og:type" content="article">
<meta property="og:site_name" content="{{ env('APP_NAME') }}">
<meta property="og:url" content="{{ url()->current(); }}">
<meta property="og:headline" content="@if(!empty($metas)) @if($metas['home_title'] && $metas['site_title']) {{ $metas['home_title'] }} - {{ $metas['site_title'] }} @else @yield('title') @endif @else @yield('title') @endif">
<meta property="og:title" content="@if(!empty($metas)) @if($metas['home_title'] && $metas['site_title']) {{ $metas['home_title'] }} - {{ $metas['site_title'] }} @else @yield('title') @endif @else @yield('title') @endif">
<meta property="og:description" content="@if(!empty($metas)) @if($metas['meta_description']) {{ $metas['meta_description'] }} @endif @else {{ env('GLOBAL_DESC') }} @endif">
<meta property="og:image" content="{{ env('APP_URL') }}/assets/img/kartunama/kartunamapro.png">
<meta property="og:image:alt" content="@if(!empty($metas)) @if($metas['home_title'] && $metas['site_title']) {{ $metas['home_title'] }} - {{ $metas['site_title'] }} @else @yield('title') @endif @else @yield('title') @endif">
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
<meta name="twitter:title" content="@if(!empty($metas)) @if($metas['home_title'] && $metas['site_title']) {{ $metas['home_title'] }} - {{ $metas['site_title'] }} @else @yield('title') @endif @else @yield('title') @endif">
<meta name="twitter:url" content="{{ url()->current(); }}">
<meta name="twitter:description" content="@if(!empty($metas)) @if($metas['meta_description']) {{ $metas['meta_description'] }} @endif @else {{ env('GLOBAL_DESC') }} @endif">
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="{{ asset('front/css/slick.css') }}" rel="stylesheet">
<link href="{{ asset('front/css/slick-theme.css') }}" rel="stylesheet">
<link href="{{ asset('front/scss/style.css') }}?{{ env('APP_VERDEV') }}" rel="stylesheet">
<link href="{{ asset('front/scss/layout.css') }}?{{ env('APP_VERDEV') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/third-party.css') }}">
<link href="{{ asset('assets/css/front/front-custom.css') }}?{{ env('APP_VERDEV') }}" rel="stylesheet">

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
<!--WebSite-->
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebSite","@id":"#WebSite","name":"{{ env('APP_NAME') }} - {{ env('APP_TAGLINE') }}","alternateName":"{{ env('APP_NAME') }} - {{ env('APP_TAGLINE') }} - {{ env('APP_BRAND') }}","headline":"{{ env('APP_NAME') }} - {{ env('APP_TAGLINE') }}","url":"{{ env('APP_URL') }}","description":"{{ env('GLOBAL_DESC') }}","disambiguatingDescription":"{{ env('GLOBAL_DESC') }} - {{ env('APP_NAME') }} - {{ env('APP_TAGLINE') }} - {{ env('APP_BRAND') }}","keywords":["Kartu nama","Bio link","vCard indonesia","Kartu nama digital","Pembuat vCard","Bio link terbaik","Kartu nama bisnis","Bio link bisnis","Kartu nama online","Web kartu nama"],"genre":["vCards","Marketing","Business","Website","Software","Tool"],"image":{"@type":"ImageObject","@id":"#ImageWebSite","inLanguage":"id-ID","url":"{{ env('APP_URL') }}/assets/img/kartunama/kartunamapro.png","caption":"{{ env('APP_NAME') }} - {{ env('APP_TAGLINE') }}"},"inLanguage":"id-ID","sameAs":["https://facebook.com/kartunamaxd","https://twitter.com/401xdgroup","https://instagram.com/kartunamaxd","https://linkedin.com/company/401xdgroup","https://pinterest.com/401xdgroup","https://youtube.com/c/mycodingxd"],"potentialAction":{"@type":"SearchAction","target":"{{ env('APP_URL') }}/?q={query}","query-input":"required name=query"},"publisher":{"@id":"#Organization"},"sponsor":{"@id":"#Corporation"}}
</script>
<!--Organization-->
<script type="application/ld+json">
{"@context":"https://schema.org/","@type":"Organization","@id":"#Organization","url":"{{ env('APP_URL') }}","name":"{{ env('APP_NAME') }} - {{ env('APP_TAGLINE') }}","description":"{{ env('GLOBAL_DESC') }}","sameAs":["https://facebook.com/kartunamaxd","https://twitter.com/401xdgroup","https://instagram.com/kartunamaxd","https://linkedin.com/company/401xdgroup","https://pinterest.com/401xdgroup","https://youtube.com/c/mycodingxd"],"logo":{"@type":"ImageObject","@id":"#LogoOrganization","inLanguage":"id-ID","url":"{{ env('APP_URL') }}/assets/img/kartunama/logo.png","caption":"{{ env('APP_NAME') }} - {{ env('APP_TAGLINE') }}"},"image":{"@type":"ImageObject","@id":"#ImageWebSite","inLanguage":"id-ID","url":"{{ env('APP_URL') }}/assets/img/kartunama/kartunamapro.png","caption":"{{ env('APP_NAME') }} - {{ env('APP_TAGLINE') }}"},"address":{"@type":"PostalAddress","@id":"#PostalAddressOrganization","streetAddress":"{{ env('APP_COMPANY') }}, Jl. Sumbawa, Ulak Karang Utara, Kec. Padang Utara","addressLocality":"Kota Padang","addressRegion":"Sumatera Barat","postalCode":"25133","addressCountry":"Indonesia"},"founder":{"@type":"Person","name":"Adi Gunawan","honorificSuffix":"S.Kom., M.Kom.","jobTitle":"Owner","url":"https://adigunawan.id/","sameAs":["https://orcid.org/0000-0002-5954-8068","https://www.researchgate.net/profile/Adi-Gunawan-3","https://scholar.google.com/citations?user=mDVQUgQAAAAJ","https://independent.academia.edu/AdiGunawanXD","https://www.facebook.com/AdigunawanXD","https://www.instagram.com/AdiGunawanXD"]},"aggregateRating":{"@type":"AggregateRating","ratingValue":"4.9","reviewCount":"1{{ date('Y') }}"},"review":{"@type":"Review","@id":"#ReviewOrganization","name":"Ulasan {{ env('APP_NAME') }}","author":{"@type":"Person","name":"Adi Gunawan","honorificSuffix":"S.Kom., M.Kom.","url":"https://adigunawan.id/","sameAs":["https://orcid.org/0000-0002-5954-8068","https://www.researchgate.net/profile/Adi-Gunawan-3","https://scholar.google.com/citations?user=mDVQUgQAAAAJ","https://independent.academia.edu/AdiGunawanXD","https://www.facebook.com/AdigunawanXD","https://www.instagram.com/AdiGunawanXD"]},"description":"Platform pembuat halaman web kartu nama digital vCard premium dan bio link profesional","reviewRating":{"@type":"Rating","ratingValue":"4.9","worstRating":"1","bestRating":"5"}}}
</script>
<!--Corporation-->
<script type="application/ld+json">
{"@context":"https://schema.org/","@type":"Corporation","@id":"#Corporation","url":"https://401xd.com","name":"{{ env('APP_COMPANY') }}","alternateName":"{{ env('APP_COMPANY') }} Indonesia","description":"{{ env('APP_COMPANY') }} adalah perusahaan yang memiliki spesialisasi dalam bidang teknologi, pengembangan software, kecerdasan buatan, internet, portal media online, digital marketing, teknologi finansial dan e-commerce di Indonesia.","disambiguatingDescription":"{{ env('APP_COMPANY') }} adalah perusahaan yang memiliki spesialisasi dalam bidang teknologi, pengembangan software, kecerdasan buatan, internet, portal media online, digital marketing, teknologi finansial dan e-commerce di Indonesia. Berawal dari sebuah organisasi komunitas pada tahun 2009, {{ env('APP_COMPANY') }} saat ini berdiri sebagai perusahaan yang memiliki 20+ startup penyedia produk, layanan jasa, dan portal media informasi online.","telephone":"+6282377823390","sameAs":["https://g.page/401xd","https://facebook.com/401xd","https://twitter.com/401xdgroup","https://instagram.com/401xdgroup","https://linkedin.com/company/401xdgroup","https://pinterest.com/401xdgroup"],"logo":{"@type":"ImageObject","@id":"#LogoCorporation","inLanguage":"id-ID","url":"{{ env('APP_URL') }}/assets/img/kartunama/401XDGroup.png","caption":"{{ env('APP_COMPANY') }}"},"image":{"@type":"ImageObject","@id":"#ImageCorporation","inLanguage":"id-ID","url":"{{ env('APP_URL') }}/assets/img/kartunama/401XDGroupIndonesia.png","caption":"{{ env('APP_COMPANY') }}"},"address":{"@type":"PostalAddress","@id":"#PostalAddressCorporation","streetAddress":"{{ env('APP_COMPANY') }}, Jl. Sumbawa, Ulak Karang Utara, Kec. Padang Utara","addressLocality":"Kota Padang","addressRegion":"Sumatera Barat","postalCode":"25133","addressCountry":"Indonesia"},"aggregateRating":{"@type":"AggregateRating","ratingValue":"4.9","reviewCount":"2{{ date('m') }}"},"review":{"@type":"Review","@id":"#ReviewCorporation","name":"Ulasan {{ env('APP_NAME') }}","author":{"@type":"Person","name":"Adi Gunawan S.Kom., M.Kom.","url":"https://adigunawan.id/","sameAs":["https://orcid.org/0000-0002-5954-8068","https://www.researchgate.net/profile/Adi-Gunawan-3","https://scholar.google.com/citations?user=mDVQUgQAAAAJ","https://independent.academia.edu/AdiGunawanXD","https://www.facebook.com/AdigunawanXD","https://www.instagram.com/AdiGunawanXD"]},"description":"Platform pembuat halaman web kartu nama digital vCard premium dan bio link profesional","reviewRating":{"@type":"Rating","ratingValue":"4.9","worstRating":"1","bestRating":"5"}}}
</script>
<!--ImageObject-->
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"ImageObject","@id":"#ImageObject","name":"@if(!empty($metas)) @if($metas['home_title'] && $metas['site_title']) {{ $metas['home_title'] }} - {{ $metas['site_title'] }} @else @yield('title') @endif @else @yield('title') @endif","alternateName":"@if(!empty($metas)) @if($metas['home_title'] && $metas['site_title']) {{ $metas['home_title'] }} - {{ $metas['site_title'] }} @else @yield('title') @endif @else @yield('title') @endif - {{ env('APP_NAME') }}","headline":"@if(!empty($metas)) @if($metas['home_title'] && $metas['site_title']) {{ $metas['home_title'] }} - {{ $metas['site_title'] }} @else @yield('title') @endif @else @yield('title') @endif","alternativeHeadline":"@if(!empty($metas)) @if($metas['home_title'] && $metas['site_title']) {{ $metas['home_title'] }} - {{ $metas['site_title'] }} @else @yield('title') @endif @else @yield('title') @endif - {{ env('APP_NAME') }}","description":"@if(!empty($metas)) @if($metas['meta_description']) {{ $metas['meta_description'] }} @endif @else @if(!empty($metas)) @if($metas['meta_description']) {{ $metas['meta_description'] }} @endif @else {{ env('GLOBAL_DESC') }} @endif @endif","disambiguatingDescription":"@if(!empty($metas)) @if($metas['meta_description']) {{ $metas['meta_description'] }} @endif @else @if(!empty($metas)) @if($metas['meta_description']) {{ $metas['meta_description'] }} @endif @else {{ env('GLOBAL_DESC') }} @endif @endif - {{ env('APP_NAME') }}","abstract":"@if(!empty($metas)) @if($metas['meta_description']) {{ $metas['meta_description'] }} @endif @else @if(!empty($metas)) @if($metas['meta_description']) {{ $metas['meta_description'] }} @endif @else {{ env('GLOBAL_DESC') }} @endif @endif - {{ env('APP_NAME') }}","keywords":["Kartu nama","Bio link","vCard indonesia","Kartu nama digital","Pembuat vCard","Bio link terbaik","Kartu nama bisnis","Bio link bisnis","Kartu nama online","Web kartu nama"],"genre":["Kartu nama","Bio link","vCard indonesia","Kartu nama digital","Pembuat vCard","Bio link terbaik","Kartu nama bisnis","Bio link bisnis","Kartu nama online","Web kartu nama"],"caption":"@if(!empty($metas)) @if($metas['home_title'] && $metas['site_title']) {{ $metas['home_title'] }} - {{ $metas['site_title'] }} @else @yield('title') @endif @else @yield('title') @endif","contentUrl":"{{ env('APP_URL') }}/assets/img/kartunama/kartunamapro.png","inLanguage":"{{ str_replace('_', '-', app()->getLocale()) }}","license":"https://mycoding.id/terms-conditions","acquireLicensePage":"{{ url()->current(); }}","creditText":"{{ env('APP_NAME') }}","creator":{"@type":"Person","name":"Adi Gunawan S.Kom., M.Kom.","url":"https://adigunawan.id/","sameAs":["https://orcid.org/0000-0002-5954-8068","https://www.researchgate.net/profile/Adi-Gunawan-3","https://scholar.google.com/citations?user=mDVQUgQAAAAJ","https://independent.academia.edu/AdiGunawanXD","https://www.facebook.com/AdigunawanXD","https://www.instagram.com/AdiGunawanXD"]},"copyrightNotice":"{{ env('APP_NAME') }}","isBasedOnUrl":"{{ url()->current(); }}"}
</script>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="71">
<!-- start header section -->
@include('front.layouts.header')
@yield('content')
@include('front.layouts.footer')
<script src="{{ asset('assets/js/front-third-party.js') }}"></script>
<script src="{{ asset('front/js/slick.min.js') }}"></script>
<script src="{{ env('APP_URL') }}{{ mix('assets/js/custom/helpers.js') }}"></script>
<script src="{{ env('APP_URL') }}{{ mix('assets/js/custom/custom.js') }}"></script>
<script src="{{ env('APP_URL') }}{{ mix('assets/js/home_page/home_page.js') }}"></script>
@routes
@yield('page_js')
@yield('scripts')
<script>
    $('.pricing-carousel').slick({
        dots: true,
        centerMode: true,
        centerPadding: '0',
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                    centerPadding: '250px',
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                    centerPadding: '150px',
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                    centerPadding: '100px',
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    centerMode: true,
                    centerPadding: '50px',
                    arrows:false
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    arrows:false
                }
            }
        ]
    });
    $('.testimonial-carousel').slick({
        dots: false,
        centerPadding: '0',
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    $(window).scroll(function(){
        var sticky = $('.header'),
            scroll = $(window).scrollTop();

        if (scroll >= 120) sticky.addClass('fixed');
        else sticky.removeClass('fixed');
    });
</script>
<!--Lazy load img-->
<script src="{{ asset('assets/js/lazysizes.src.js') }}" async></script>
<script src="{{ asset('assets/js/lazyload.min.js') }}" async></script>
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