<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<!--Viewport -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Title -->
<title>Rendy Budiman - Frontend Developer</title>
<meta name="description" content="Rendy Budiman - Frontend Developer. Kartu nama digital dan bio link Rendy Budiman. Berikut informasi lengkap Rendy Budiman, alamat, kontak, sosial media dan website official Rendy Budiman di Kartunama Pro - Kartu Nama Digital dan Bio Link.">
<meta name="keywords" content="Rendy Budiman, Kartu Nama Rendy Budiman, Link Bio Rendy Budiman, Bio Link Rendy Budiman, Kartunama Pro, Kartu Nama Digital">
<!-- Canonical -->
<meta name="robots" content="all,index,follow">
<link rel="home" href="{{ env('APP_URL') }}">
<link rel="canonical" href="{{ url()->current(); }}">
<!--Author-->
<meta name="author" content="Rendy Budiman">
<meta name="publisher" content="{{ env('APP_COMPANY') }}">
<!-- OG -->
<meta property="og:site_name" content="{{ env('APP_NAME') }}">
<meta property="og:title" content="Rendy Budiman - Frontend Developer">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current(); }}">
<meta property="og:description" content="Rendy Budiman - Frontend Developer. Kartu nama digital dan bio link Rendy Budiman. Berikut informasi lengkap Rendy Budiman, alamat, kontak, sosial media dan website official Rendy Budiman di Kartunama Pro - Kartu Nama Digital dan Bio Link.">
<meta property="og:image" content="{{ asset('assets/img/vcard4/profile.png') }}">
<meta property="og:locale" content="id_ID">
<meta property="og:locale:alternate" content="en_US">
<meta property="fb:app_id" content="1411872802675627">
<meta property="pinterest-rich-pin" content="true">
<meta property="article:author" content="Rendy Budiman">
<meta property="og:rich_attachment" content="true">
<meta name="og:image:width" content="1200">
<meta name="og:image:height" content="auto">
<meta name="twitter:title" content="Rendy Budiman - Frontend Developer">
<meta name="twitter:url" content="{{ url()->current(); }}">
<meta name="twitter:description" content="Rendy Budiman - Frontend Developer. Kartu nama digital dan bio link Rendy Budiman. Berikut informasi lengkap Rendy Budiman, alamat, kontak, sosial media dan website official Rendy Budiman di Kartunama Pro - Kartu Nama Digital dan Bio Link.">
<meta name="twitter:site" content="{{ env('APP_URL') }}">
<meta name="twitter:image" content="{{ asset('assets/img/vcard4/profile.png') }}">
<meta name="twitter:card" content="summary_large_image">
<!--Resource-->
<link href="//fonts.gstatic.com" rel="dns-prefetch">
<link href="//ajax.googleapis.com" rel="dns-prefetch">
<link href="//fonts.googleapis.com" rel="dns-prefetch">
<link href="//www.google-analytics.com" rel="dns-prefetch">
<link href="//www.googletagservices.com" rel="dns-prefetch">
<link href="//partner.googleadservices.com" rel="dns-prefetch">
<link href="//www.google.com" rel="preconnect dns-prefetch">
<link href="//www.youtube.com" rel="preconnect dns-prefetch">
<link href="//www.recaptcha.net" rel="preconnect dns-prefetch">
<link href="//www.gstatic.com" rel="preconnect dns-prefetch">
<link href="//www.googletagmanager.com" rel="preconnect dns-prefetch">
<link href="//ajax.cloudflare.com" rel="preconnect dns-prefetch">
<link href="//cdn.jsdelivr.net" rel="preconnect dns-prefetch">
<link href="//connect.facebook.net" rel="preconnect dns-prefetch">
<link href="//pagead2.googlesyndication.com" rel="preconnect dns-prefetch">
<link href="//googleads.g.doubleclick.net" rel="preconnect dns-prefetch">
<link href="//ad.doubleclick.net" rel="preconnect dns-prefetch">
<link href="//static.doubleclick.net" rel="preconnect dns-prefetch">
<link href="//tpc.googlesyndication.com" rel="preconnect dns-prefetch">
<link href="//adservice.google.com" rel="preconnect dns-prefetch">
<!-- Bootstrap CSS -->
<link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">
{{--css link--}}
<link rel="stylesheet" href="{{ asset('assets/css/vcard4.css') }}">
{{--slick slider--}}
<link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick-theme.min.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<!--Adblock-->
<style>
/*Adblock*/
@keyframes fadeInDown{0%{opacity:0;transform:translateY(-20px);}100%{opacity:1;transform:translateY(0);}} @keyframes rubberBand{from{transform:scale3d(1,1,1)}30%{transform:scale3d(1.25,0.75,1);}40%{transform:scale3d(0.75,1.25,1)}50%{transform:scale3d(1.15,0.85,1)}65%{transform:scale3d(.95,1.05,1)}75%{transform:scale3d(1.05,.95,1)}to{transform:scale3d(1,1,1);}} #seosecretidnadblock{background:rgba(0,0,0,0.65);position:fixed;margin:auto;left:0;right:0;top:0;bottom:0;overflow:auto;z-index:999999;animation:fadeInDown 1s;} #seosecretidnadblock .header{margin:0 0 15px 0;} #seosecretidnadblock .inner{background:#CC3333;color:#F5F5F5;box-shadow:0 5px 20px rgba(0,0,0,0.1);text-align:center;width:600px;padding:30px;border-radius:5px;margin:7% auto 2% auto;animation:rubberBand 2s;} #seosecretidnadblock button{padding:10px 20px;border:0;background:rgba(0,0,0,0.15);color:#F5F5F5;margin:10px 5px;cursor:pointer;transition:all .3s;} #seosecretidnadblock button:hover{background:rgba(0,0,0,0.35);color:#fff;outline:none;} #seosecretidnadblock button.active,#arlinablock button:hover.active{background:#F5F5F5;color:#333333;outline:none;} #seosecretidnadblock .fixblock{background:#FFFFFF;text-align:left;color:#333333;padding:10px 0px;height:300px;overflow:auto;line-height:30px;} #seosecretidnadblock .fixblock div{display:none;} #seosecretidnadblock .fixblock div.active{display:block;} #seosecretidnadblock ol{margin-left:0px;} @media(max-width:768px){#seosecretidnadblock .inner{width:calc(100% - 30px);margin:10px auto;padding:15px;}}
/*Indicator Load*/
.progress-container{width:100%;position:fixed;top:0;left:0;z-index:9999;}.progress-bar{height:2px;background:#71B280;width:0%;}
/*Scroll Bar*/
html{scrollbar-width:thin;}html::-webkit-scrollbar{width:5px;background-color:#F5F5F5;}html::-webkit-scrollbar-thumb{background-color:#71B280;border-radius:0px;}.element{scrollbar-width:thin;}.element::-webkit-scrollbar{width:5px;background-color:#F5F5F5;}.element::-webkit-scrollbar-thumb{background-color:#71B280;border-radius:0px;}
</style>

<!--SR-ONLY and CUSTOM-->
<style>
.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}iframe {border-radius:.25rem;}html {touch-action:manipulation;}img.lazyload:not([src]){visibility:hidden;}img:-moz-broken{opacity:0;}img{position:relative;}img::after{content:"";display:block;position:absolute;top:0;left:0;width:100%;height:100%;background-color:white;}
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
<div class="container">
    <div class="main-content vcard w-100 mx-auto">
        
        {{--banner--}}
        <div class="vcard__banner w-100 position-relative">
            <img data-sizes="auto" data-src="{{ asset('assets/img/vcard3/vcard3-banner.png') }}" class="lazyload" alt="Banner {{ env('APP_NAME') }}"/>

            <div class="d-flex justify-content-end position-absolute top-0 end-0 me-3">
                <div class="language pt-3 me-2">
                    <ul class="text-decoration-none">
                        <li class="dropdown1 dropdown lang-list">
                            <a class="dropdown-toggle lang-head text-decoration-none" data-toggle="dropdown"
                               role="button"
                               aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-language me-2"></i>Bahasa</a>
                            <ul class="dropdown-menu start-0 image-icon lang-hover-list top-100">
                                <li>
                                    <img data-sizes="auto" data-src="{{ asset('assets/img/vcard1/english.png') }}" width="25px" height="20px"
                                         class="lazyload me-3"><a href="#">English</a></li>
                                <li>
                                    <img data-sizes="auto" data-src="{{ asset('assets/img/vcard1/indonesia.png') }}" width="25px" height="20px"
                                         class="lazyload me-3"><a href="#">Indonesia</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{--profile details--}}
        <div class="vcard__profile d-flex align-items-center px-4 flex-sm-row flex-column">
            <div class="vcard__avatar">
                <img data-sizes="auto" data-src="{{ asset('assets/img/vcard4/profile.png') }}" class="lazyload rounded-circle"/>
            </div>
            <div class="vcard__position d-flex flex-column mx-4 mt-sm-5 mt-2">
                <div class="d-flex flex-column">
                    <span class="avatar-name fw-bold text-sm-start text-center">Rendy Budiman</span>
                    <span class="avatar-designation text-sm-start text-center">Frontend Developer</span>
                </div>
                <div class="vcard__social d-flex mt-3">
                    <span class="icons rounded-circle d-flex justify-content-center align-items-center my-2 me-2">
                        <i class="fab fa-facebook-f"></i>
                    </span>
                    <span class="icons rounded-circle d-flex justify-content-center align-items-center m-2">
                       <i class="fab fa-whatsapp"></i>
                    </span>
                    <span class="icons rounded-circle d-flex justify-content-center align-items-center m-2">
                        <i class="fab fa-linkedin"></i>
                    </span>
                    <span class="icons rounded-circle d-flex justify-content-center align-items-center my-2 ms-2">
                        <i class="fab fa-instagram"></i>
                    </span>
                </div>
            </div>
        </div>

        {{--details--}}
        <div class="py-4 px-4">
            <div class="vcard__event-card text-center p-4" style="border-radius:25px;font-size:15px;">
                Nikmati hal kecil dalam hidup. Suatu hari, Anda mungkin melihat ke belakang &amp; menyadari bahwa itu adalah hal besar. Banyak kegagalan dalam hidup ketika orang-orang tidak menyadari betapa dekatnya mereka dengan kesuksesan ketika mereka menyerah.
            </div>
            <div class="vcard__event">
                <div class="row py-4 g-3">
                    <div class="col-sm-6 col-12">
                        <div class="card vcard__event-card d-flex flex-column justify-content-center align-items-center border-0 p-3 h-100">
                            <span class="event-icon">
                                <img data-sizes="auto" data-src="{{ asset('assets/img/vcard4/email.png') }}" class="lazyload img-fluid">
                            </span>
                            <span class="event-name pt-2">401xdssh@gmail.com</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="card vcard__event-card d-flex flex-column justify-content-center align-items-center border-0 p-3 h-100">
                            <span class="event-icon">
                                <img data-sizes="auto" data-src="{{ asset('assets/img/vcard4/birthday.png') }}" class="lazyload img-fluid">
                            </span>
                            <span class="event-name pt-2">11 Januari 1990</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="card vcard__event-card d-flex flex-column justify-content-center align-items-center border-0 p-3 h-100">
                            <span class="event-icon">
                                <img data-sizes="auto" data-src="{{ asset('assets/img/vcard4/mobile.png') }}" class="lazyload img-fluid">
                            </span>
                            <span class="event-name pt-2">+6282377823390</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="card vcard__event-card d-flex flex-column justify-content-center align-items-center border-0 p-3 h-100">
                            <span class="event-icon">
                                <img data-sizes="auto" data-src="{{ asset('assets/img/vcard4/location.png') }}" class="lazyload img-fluid">
                            </span>
                            <span class="event-name pt-2">Padang, Indonesia</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--Appointment--}}
        <div class="vcard__appointment py-4 px-4">
            <h4 class="vcard__heading heading-line text-center position-relative pt-4 pb-3">Janji Temu</h4>
            <div class="container">
                <div class="appointment">
                    <div class="row d-flex align-items-center justify-content-center mb-3">
                        <div class="col-md-2">
                            <label for="date" class="me-4 appoint-date mb-2">Tanggal</label>
                        </div>
                        <div class="col-md-10">
                            <input id="myID" type="text" class="appoint-input" placeholder="Pick a Date"/>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center justify-content-center mb-md-3">
                        <div class="col-md-2">
                            <label for="text" class="me-4 appoint-date mb-2">Jam</label>
                        </div>
                        <div class="col-md-5 mb-md-0 mb-3">
                            <div class="card appoint-input flex-row">
                                <span>08:10 - 20:00</span>
                            </div>
                        </div>
                        <div class="col-md-5 mb-md-0 mb-3">
                            <div class="card appoint-input flex-row">
                                <span>08:10 - 20:00</span>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center justify-content-center">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-5 mb-md-0 mb-3">
                            <div class="card appoint-input flex-row">
                                <span>08:10 - 20:00</span>
                            </div>
                        </div>
                        <div class="col-md-5 mb-md-0 mb-3">
                            <div class="card appoint-input flex-row">
                                <span>08:10 - 20:00</span>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="appoint-btn text-light mt-4 d-block mx-auto ">Buat Janji
                    </button>
                </div>
            </div>
        </div>

        {{--Product--}}
        <div class="py-4 px-4">
            <div class="vcard__product">
                <h4 class="vcard__heading text-center pt-4 pb-3 mb-4">Info Produk</h4>
                <div class="container">
                    <div class="row g-4 justify-content-center product-slider">
                        <div class="col-6">
                            <div class="card product-card h-100 border-0 w-100">
                                <div class="product-profile">
                                    <img data-sizes="auto" data-src="{{ asset('assets/img/vcard1/v1.jpg') }}" alt="Profile {{ env('APP_NAME') }}" class="lazyload w-100"/>
                                </div>
                                <div class="product-details mt-3">
                                    <h4>men's Wear</h4>
                                    <p class="mb-2">
                                        Men Regular Formal Suit
                                    </p>
                                    <span class="text-dark">$150</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card product-card h-100 border-0 w-100">
                                <div class="product-profile">
                                    <img data-sizes="auto" data-src="{{ asset('assets/img/vcard1/v2.jpg') }}" alt="Profile {{ env('APP_NAME') }}" class="lazyload w-100"/>
                                </div>
                                <div class="product-details mt-3">
                                    <h4>Laptop</h4>
                                    <p class="mb-2">
                                        DELL Inspiron Core i3 11th Gen
                                    </p>
                                    <span class="text-dark">$200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--our services--}}
        <div class="position-relative overflow-hidden py-4 px-4">
            <div class="line-shape position-absolute">
                <span class="inner-circle position-absolute rounded-circle"></span>
            </div>
            <div class="vcard__service">
                <h4 class="vcard__heading text-center pt-4 pb-3">Layanan</h4>
                <div class="container mt-4">
                    <div class="row g-4 justify-content-center">
                        <div class="col-sm-6 service-container">
                            <div class="card service-card h-100 border-0">
                                <div class="service-image rounded-circle d-flex justify-content-center align-items-center mx-auto">
                                    <img data-sizes="auto" data-src="{{ asset('assets/img/vcard4/web-design.png') }}" class="lazyload" />
                                </div>
                                <div class="service-details d-flex flex-column">
                                    <h4 class="mt-3 text-center">Web Design</h4>
                                    <p class="mb-0 text-center">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 service-container">
                            <div class="card service-card h-100 border-0">
                                <div class="service-image rounded-circle d-flex justify-content-center align-items-center mx-auto">
                                    <img data-sizes="auto" data-src="{{ asset('assets/img/vcard4/photography.png') }}" class="lazyload"/>
                                </div>
                                <div class="service-details d-flex flex-column">
                                    <h4 class="mt-3 text-center">Photography</h4>
                                    <p class="mb-0 text-center">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--gallery--}}
        <div class="py-4 px-4">
            <div class="vcard__gallery">
                <h4 class="vcard__heading text-center pt-4 pb-3 mb-4">Aset Galeri</h4>
                <div class="container">
                    <div class="row g-4 justify-content-center gallery-slider">
                        <div class="col-6">
                            <div class="card gallery-card h-100 border-0 w-100">
                                <div class="gallery-profile">
                                    <div>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                           data-bs-target="#exampleModal" class="gallery-link">
                                            <div class="gallery-item"
                                                 style="background-image: url({{ asset('assets/img/video-thumbnail.png') }})">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card gallery-card h-100 border-0 w-100">
                                <div class="gallery-profile">
                                    <img data-sizes="auto" data-src="{{ asset('assets/img/vcard1/v2.jpg') }}" alt="Profile {{ env('APP_NAME') }}" class="lazyload w-100"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <iframe src="//www.youtube.com/embed/LRLXvkwaTB8"
                                class="w-100" height="315">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

        {{-- blog--}}
        <div class="vcard__blog py-4 px-4">
            <h4 class="vcard__heading heading-line position-relative text-center pt-4 pb-3">Artikel Blog</h4>
            <div class="container">
                <div class="row g-4 blog-slider overflow-hidden">
                    <div class="col-6 mb-2">
                        <div class="card blog-card border-0 w-100 h-100 flex-sm-row">
                            <div class="blog-image">
                                <img data-sizes="auto" data-src="{{ asset('assets/img/vcard1/v1.jpg') }}" alt="Profile {{ env('APP_NAME') }}" class="lazyload w-100"/>
                            </div>
                            <div class="blog-details ms-sm-5 ms-0 mt-sm-0 mt-5 p-sm-3">
                                <h5 class="text-sm-start text-center">men's Wear</h5>
                                <p class="mt-2 mb-0 text-sm-start text-center">
                                    Men Regular Formal SuitMen Regular Formal SuitMen Regular Formal SuitMen Regular Formal SuitMen Regular Formal SuitMen Regular Formal SuitMen Regular Formal SuitMen Regular Formal Suit
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <div class="card blog-card border-0 w-100 h-100 flex-sm-row">
                            <div class="blog-image">
                                <img data-sizes="auto" data-src="{{ asset('assets/img/vcard1/v1.jpg') }}" alt="Profile {{ env('APP_NAME') }}" class="lazyload w-100"/>
                            </div>
                            <div class="blog-details ms-sm-5 ms-0 mt-sm-0 mt-5 p-sm-3">
                                <h5 class="text-sm-start text-center">men's Wear</h5>
                                <p class="mt-2 mb-0 text-sm-start text-center">
                                    Men Regular Formal SuitMen Regular Formal SuitMen Regular Formal SuitMen Regular Formal SuitMen Regular Formal SuitMen Regular Formal SuitMen Regular Formal SuitMen Regular Formal Suit
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mb-2">
                        <div class="card blog-card border-0 w-100 h-100 flex-sm-row">
                            <div class="blog-image">
                                <img data-sizes="auto" data-src="{{ asset('assets/img/vcard1/v1.jpg') }}" alt="Profile {{ env('APP_NAME') }}" class="lazyload w-100"/>
                            </div>
                            <div class="blog-details ms-sm-5 ms-0 mt-sm-0 mt-5 p-sm-3">
                                <h5 class="text-sm-start text-center">men's Wear</h5>
                                <p class="mt-2 mb-0 text-sm-start text-center">
                                    Men Regular Formal SuitMen Regular Formal SuitMen Regular Formal SuitMen Regular Formal SuitMen Regular Formal SuitMen Regular Formal SuitMen Regular Formal SuitMen Regular Formal Suit
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--Testimonial--}}
        <div class="py-4 px-4">
            <div class="vcard__testimonial">
                <h4 class="vcard__heading text-center pt-4 pb-3 mb-4">Testimonial</h4>
                <div class="container mb-3">
                    <div class="row g-4 justify-content-center testimonial-slider">
                        <div class="col-6">
                            <div class="card testimonial-card h-100 border-0 w-100">
                                <img data-sizes="auto" data-src="{{ asset('assets/img/vcard4/testimonial-profile.png') }}"
                                     class="lazyload testimonial-image d-block mx-auto"/>
                                <div class="testimonial-details d-flex flex-column">
                                    <p class="mb-0 text-center pt-3">
                                        “Designing systems useful for the user is the most interesting element
                                        in the entire field of design, whic each project.”
                                    </p>
                                </div>
                                <div class="testimonial-user d-flex justify-content-center flex-column align-center mt-3">
                                    <h5 class="user-name text-center position-relative mt-2">Mabelle Becker</h5>
                                    <span class="user-designation text-center">CEO at Go Fashion</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card testimonial-card h-100 border-0 w-100">
                                <img data-sizes="auto" data-src="{{ asset('assets/img/vcard4/testimonial-profile.png') }}" class="lazyload testimonial-image d-block mx-auto"/>
                                <div class="testimonial-details d-flex flex-column">
                                    <p class="mb-0 text-center pt-3">
                                        “Designing systems useful for the user is the most interesting element
                                        in the entire field of design, whic each project.”
                                    </p>
                                </div>
                                <div class="testimonial-user d-flex justify-content-center flex-column align-center mt-3">
                                    <h5 class="user-name text-center position-relative mt-2">Mabelle Becker</h5>
                                    <span class="user-designation text-center">CEO at Go Fashion</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--QR code--}}
        <div class="vcard__qr-code py-4 px-4">
            <div>
                <h4 class="vcard__heading text-center pt-4 pb-3 mb-5">QR Code</h4>
                <div class="qr-code d-block mx-auto position-relative px-5 pt-5 pb-3">
                    <img data-sizes="auto" data-src="{{ asset('assets/img/vcard4/profile.png') }}"
                         class="lazyload qr-code-profile d-block mx-auto position-absolute top-0 start-50 translate-middle"/>
                    <div class="qr-code-image d-flex justify-content-center">
                        <img data-sizes="auto" data-src="{{ asset('assets/img/vcard4/qr-code.png') }}" class="lazyload" />
                    </div>
                </div>
                <button type="button" class="qr-code-btn text-light mt-4 d-block mx-auto">Unduh QR Code</button>
            </div>
        </div>

        {{--Business hour--}}
        <div class="vcard__timing py-4 px-4">
            <div class="px-4">
                <h4 class="vcard__heading text-center pt-4 pb-3">Jam Kerja</h4>
                <div class="row">
                    <div class="col-sm-6 col-12 week-time mb-2">
                        <span>Minggu :</span>
                        <span>08:10 - 20:00</span>
                    </div>
                    <div class="col-sm-6 col-12 week-time mb-2">
                        <span>Senin :</span>
                        <span>08:10 - 20:00</span>
                    </div>
                    <div class="col-sm-6 col-12 week-time mb-2">
                        <span>Selasa :</span>
                        <span>08:10 - 20:00</span>
                    </div>
                    <div class="col-sm-6 col-12 week-time mb-2">
                        <span>Rabu :</span>
                        <span>08:10 - 20:00</span>
                    </div>
                    <div class="col-sm-6 col-12 week-time mb-2">
                        <span>Kamis :</span>
                        <span>08:10 - 20:00</span>
                    </div>
                    <div class="col-sm-6 col-12 week-time mb-2">
                        <span>Jum'at :</span>
                        <span>08:10 - 20:00</span>
                    </div>
                    <div class="col-sm-6 col-12 week-time">
                        <span>Sabtu :</span>
                        <span>close</span>
                    </div>
                </div>
            </div>
        </div>
        
        {{--contact us--}}
        <div class="vcard__contact-us py-4 px-4">
            <div>
                <h4 class="vcard__heading text-center pt-4 pb-3">Pertanyaan</h4>
                <div class="contact-form px-sm-2">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="name" placeholder="Full Name">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" placeholder="E-mail Address">
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control" id="mobile" placeholder="Mobile Number">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" placeholder="Kirim" id="message" rows="5"></textarea>
                    </div>
                    <button type="button" class="contact-btn text-light mt-4 d-block mx-auto">Kirim</button>
                </div>
            </div>
            <div class="d-sm-flex justify-content-center">
                <button type="submit" class="vcard-four-btn text-light mt-4 d-block">
                    <i class="fas fa-download me-2"></i> Unduh vCard
                </button>
                {{--share btn--}}
                <button type="button" class="share-btn text-light d-block btn mt-4 ms-sm-4">
                    <a href="#" class="text-light text-decoration-none">
                        <i class="fas fa-share-alt me-2"></i> Bagikan</a>
                </button>
            </div>
        </div>

        {{--Google Maps--}}
        <div class="px-3 py-4">
            <div class="container">
                <iframe width="100%" height="300px"
                        src='https://maps.google.com/maps?q=401XD+Group,+ID,+West+Sumatra/&output=embed' frameborder="0"
                        scrolling="no" marginheight="0" marginwidth="0" style="border-radius: 15px;"></iframe>
            </div>
        </div>

    </div>
</div>

<script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/front-third-party.js') }}"></script>
<script src="{{ asset('assets/js/slider/js/slick.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    $('.testimonial-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        arrows: false,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        responsive: [
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            }
        ]
    });
</script>

<script>
    $('.product-slider').slick({
        dots: true,
        infinite: true,
        arrows: false,
        speed: 300,
        slidesToShow: 2,
        autoplay: true,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            }
        ]
    });
</script>

<script>
    $('.gallery-slider').slick({
        dots: true,
        infinite: true,
        arrows: false,
        speed: 300,
        slidesToShow: 2,
        autoplay: true,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            }
        ]
    });

    $('.blog-slider').slick({
        dots: true,
        infinite: true,
        arrows: false,
        speed: 300,
        slidesToShow: 1,
        autoplay: true,
        slidesToScroll: 1
    });
</script>

<script>
    $("#myID").flatpickr();
</script>

<script>
    $(document).ready(function () {
        $('.dropdown1').hover(function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(500).fadeIn(500);
        }, function () {
            $(this).find('.dropdown-menu').stop(true, true).delay(500).fadeOut(500);
        });
    });
</script>

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

</body>
</html>
