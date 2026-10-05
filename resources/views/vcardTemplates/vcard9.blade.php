<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!--Viewport-->
    <meta charset="UTF-8"><meta name="HandheldFriendly" content="True"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!--Canonical-->
    <link rel="home" href="{{ env('APP_URL') }}">
    <link rel="canonical" href="{{ url()->current(); }}">
    <link rel="alternate" type="application/rss+xml" title="{{ env('APP_NAME') }}" href="{{ env('APP_URL') }}/rss.xml">
    <link rel="shortcut icon" href="{{ $vcard->profile_url }}" type="image/x-icon">
    <!--Robots-->
    <meta name="robots" content="all, index, follow, max-image-preview:large"><meta name="googlebot-news" content="all, index, follow, max-image-preview:large">
    <!-- Title -->
    @if(checkFeature('seo'))
        @if($vcard->home_title && $vcard->site_title)
        <title>{{ $vcard->home_title }} - {{ $vcard->site_title }}</title>
        @elseif($vcard->home_title)
        <title>{{ $vcard->home_title }} - {{ $vcard->occupation }}</title>
        @elseif($vcard->site_title)
        <title>{{ $vcard->name }} - {{ $vcard->site_title }}</title>
        @else
        <title>{{ $vcard->name }} - {{ $vcard->occupation }}</title>
        @endif
    @else
    <title>{{ $vcard->name }} - {{ $vcard->occupation }}</title>
    @endif
    <!--Desc Key-->
    @if(checkFeature('seo'))
        @if($vcard->meta_description && $vcard->meta_keyword)
        <meta name="description" content="{{ $vcard->meta_description }}">
        <meta name="keywords" content="{{ $vcard->meta_keyword }}">
        @elseif($vcard->meta_description)
        <meta name="description" content="{{ $vcard->meta_description }}">
        <meta name="keywords" content="Kartunama Pro, Kartu Nama Digital, {{ $vcard->name }}, Kartu Nama {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}, Link Bio {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}, Bio Link {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}">
        @elseif($vcard->meta_keyword)
        <meta name="description" content="@if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif">
        <meta name="keywords" content="{{ $vcard->meta_keyword }}">
        @else
        <meta name="description" content="@if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif">
        <meta name="keywords" content="Kartunama Pro, Kartu Nama Digital, {{ $vcard->name }}, Kartu Nama {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}, Link Bio {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}, Bio Link {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}">
        @endif
    @else
    <meta name="description" content="@if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif">
    <meta name="keywords" content="Kartunama Pro, Kartu Nama Digital, {{ $vcard->name }}, Kartu Nama {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}, Link Bio {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}, Bio Link {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}">
    @endif
    <!--Author-->
    <meta name="publisher" content="{{ env('APP_NAME') }}">
    <meta name="author" content="{{ ucwords($vcard->first_name.' '.$vcard->last_name) }}">
    <meta name="publisher" content="@if($vcard->company) {{ $vcard->company }} @else {{ env('APP_COMPANY') }} @endif">
    <!--Location-->
    <link rel="alternate" href="{{ url()->current(); }}" hreflang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <link rel="alternate" href="{{ url()->current(); }}" hreflang="x-default">
    <meta content="{{ str_replace('_', '-', app()->getLocale()) }}" name="geo.region">
    <meta content="{{ str_replace('_', '-', app()->getLocale()) }}" name="geo.country">
    <meta content="{{ str_replace('_', '-', app()->getLocale()) }}" name="geo.placename">
    <meta content="x;x" name="geo.position">
    <meta content="x,x" name="ICBM">
    <!-- OG -->
    <meta property="og:site_name" content="{{ env('APP_NAME') }}">
    <meta property="og:title" content="@if(checkFeature('seo')) @if($vcard->home_title && $vcard->site_title) {{ $vcard->home_title }} - {{ $vcard->site_title }} @elseif($vcard->home_title) {{ $vcard->home_title }} - {{ $vcard->occupation }} @elseif($vcard->site_title) {{ $vcard->name }} - {{ $vcard->site_title }} @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url()->current(); }}">
    <meta property="og:description" content="@if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @endif @else @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @endif">
    <meta property="og:headline" content="@if(checkFeature('seo')) @if($vcard->home_title && $vcard->site_title) {{ $vcard->home_title }} - {{ $vcard->site_title }} @elseif($vcard->home_title) {{ $vcard->home_title }} - {{ $vcard->occupation }} @elseif($vcard->site_title) {{ $vcard->name }} - {{ $vcard->site_title }} @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif">
    <meta property="og:image:alt" content="@if(checkFeature('seo')) @if($vcard->home_title && $vcard->site_title) {{ $vcard->home_title }} - {{ $vcard->site_title }} @elseif($vcard->home_title) {{ $vcard->home_title }} - {{ $vcard->occupation }} @elseif($vcard->site_title) {{ $vcard->name }} - {{ $vcard->site_title }} @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif">
    <meta property="fb:pages" content="103417799098875"> 
    <meta property="fb:profile_id" content="103417799098875">
    <meta property="article:author" content="{{ ucwords($vcard->first_name.' '.$vcard->last_name) }}">
    <meta property="og:image" content="{{ $vcard->profile_url }}">
    <meta property="og:locale" content="id_ID">
    <meta property="og:locale:alternate" content="en_US">
    <meta property="fb:app_id" content="1411872802675627">
    <meta property="pinterest-rich-pin" content="true">
    <meta property="article:author" content="{{ ucwords($vcard->first_name.' '.$vcard->last_name) }}">
    <meta property="og:rich_attachment" content="true">
    <meta name="og:image:width" content="1200">
    <meta name="og:image:height" content="auto">
    <meta name="twitter:title" content="@if(checkFeature('seo')) @if($vcard->home_title && $vcard->site_title) {{ $vcard->home_title }} - {{ $vcard->site_title }} @elseif($vcard->home_title) {{ $vcard->home_title }} - {{ $vcard->occupation }} @elseif($vcard->site_title) {{ $vcard->name }} - {{ $vcard->site_title }} @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif">
    <meta name="twitter:url" content="{{ url()->current(); }}">
    <meta name="twitter:description" content="@if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @endif @else @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @endif">
    <meta name="twitter:site" content="{{ env('APP_URL') }}">
    <meta name="twitter:image" content="{{ $vcard->profile_url }}">
    <meta name="twitter:card" content="summary_large_image">
    <!-- Webapp -->
    <link rel="manifest" href="{{ env('APP_URL') }}/manifest.json">
    <meta name="msapplication-starturl" content="{{ env('APP_URL') }}">
    <meta name="start_url" content="/">
    <meta name="application-name" content="{{ env('APP_NAME') }}">
    <meta name="apple-mobile-web-app-title" content="{{ env('APP_NAME') }}">
    <meta name="msapplication-tooltip" content="{{ env('APP_NAME') }}">
    <meta name="theme-color" content="#F15F79">
    <meta name="background_color" content="#FFFFFF">
    <meta name="msapplication-navbutton-color" content="#F15F79">
    <meta name="msapplication-TileColor" content="#F15F79">
    <meta name="apple-mobile-web-app-status-bar-style" content="#F15F79">
    <meta name="mssmarttagspreventparsing" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="msapplication-TileImage" content="{{ env('APP_URL') }}/assets/img/logo/kartunama-144.png">
    <link rel="apple-touch-icon" href="{{ env('APP_URL') }}/assets/img/logo/apple-icon.png">
    <!--Resource-->
    <link href="//fonts.gstatic.com" rel="preconnect dns-prefetch" crossorigin><link href="//ajax.googleapis.com" rel="dns-prefetch"><link href="//fonts.googleapis.com" rel="preconnect dns-prefetch"><link href="//www.google-analytics.com" rel="dns-prefetch"><link href="//www.googletagservices.com" rel="dns-prefetch"><link href="//partner.googleadservices.com" rel="dns-prefetch"><link href="//www.google.com" rel="preconnect dns-prefetch"><link href="//www.youtube.com" rel="preconnect dns-prefetch"><link href="//www.recaptcha.net" rel="preconnect dns-prefetch"><link href="//www.gstatic.com" rel="preconnect dns-prefetch"><link href="//www.googletagmanager.com" rel="preconnect dns-prefetch"><link href="//ajax.cloudflare.com" rel="preconnect dns-prefetch"><link href="//cdn.jsdelivr.net" rel="preconnect dns-prefetch"><link href="//connect.facebook.net" rel="preconnect dns-prefetch"><link href="//pagead2.googlesyndication.com" rel="preconnect dns-prefetch"><link href="//googleads.g.doubleclick.net" rel="preconnect dns-prefetch"><link href="//ad.doubleclick.net" rel="preconnect dns-prefetch"><link href="//static.doubleclick.net" rel="preconnect dns-prefetch"><link href="//tpc.googlesyndication.com" rel="preconnect dns-prefetch"><link href="//adservice.google.com" rel="preconnect dns-prefetch">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">

    {{--css link--}}
    <link rel="stylesheet" href="{{ asset('assets/css/vcard9.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-vcard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider/css/slick-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/third-party.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">

    {{--google Font--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Roboto&display=swap" rel="stylesheet">

    @if(checkFeature('custom-fonts') && $vcard->font_family)
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family={{ $vcard->font_family }}">
    @endif

    @if($vcard->font_family || $vcard->font_size || $vcard->custom_css)
    <style>
        @if(checkFeature('custom-fonts'))
        @if($vcard->font_family)
        body {
            font-family: {{ $vcard->font_family }};
        }
        @endif
        @if($vcard->font_size)
        div > h4 {
            font-size: {{ $vcard->font_size}}px !important;
        }
        @endif
        @endif
        @if(isset(checkFeature('advanced')->custom_css))
        {!! $vcard->custom_css !!}
        @endif
    </style>
    @endif

<!--Adblock-->
<style>
/*Adblock*/
@keyframes fadeInDown{0%{opacity:0;transform:translateY(-20px);}100%{opacity:1;transform:translateY(0);}} @keyframes rubberBand{from{transform:scale3d(1,1,1)}30%{transform:scale3d(1.25,0.75,1);}40%{transform:scale3d(0.75,1.25,1)}50%{transform:scale3d(1.15,0.85,1)}65%{transform:scale3d(.95,1.05,1)}75%{transform:scale3d(1.05,.95,1)}to{transform:scale3d(1,1,1);}} #seosecretidnadblock{background:rgba(0,0,0,0.65);position:fixed;margin:auto;left:0;right:0;top:0;bottom:0;overflow:auto;z-index:999999;animation:fadeInDown 1s;} #seosecretidnadblock .header{margin:0 0 15px 0;} #seosecretidnadblock .inner{background:#CC3333;color:#F5F5F5;box-shadow:0 5px 20px rgba(0,0,0,0.1);text-align:center;width:600px;padding:30px;border-radius:5px;margin:7% auto 2% auto;animation:rubberBand 2s;} #seosecretidnadblock button{padding:10px 20px;border:0;background:rgba(0,0,0,0.15);color:#F5F5F5;margin:10px 5px;cursor:pointer;transition:all .3s;} #seosecretidnadblock button:hover{background:rgba(0,0,0,0.35);color:#fff;outline:none;} #seosecretidnadblock button.active,#arlinablock button:hover.active{background:#F5F5F5;color:#333333;outline:none;} #seosecretidnadblock .fixblock{background:#FFFFFF;text-align:left;color:#333333;padding:10px 0px;height:300px;overflow:auto;line-height:30px;} #seosecretidnadblock .fixblock div{display:none;} #seosecretidnadblock .fixblock div.active{display:block;} #seosecretidnadblock ol{margin-left:0px;} @media(max-width:768px){#seosecretidnadblock .inner{width:calc(100% - 30px);margin:10px auto;padding:15px;}}
/*Indicator Load*/
.progress-container{width:100%;position:fixed;top:0;left:0;z-index:9999;}.progress-bar{height:2px;background:#F15F79;width:0%;}
/*Scroll Bar*/
html{scrollbar-width:thin;}html::-webkit-scrollbar{width:5px;background-color:#F5F5F5;}html::-webkit-scrollbar-thumb{background-color:#F15F79;border-radius:0px;}.element{scrollbar-width:thin;}.element::-webkit-scrollbar{width:5px;background-color:#F5F5F5;}.element::-webkit-scrollbar-thumb{background-color:#F15F79;border-radius:0px;}
</style>

<!--SR-Only and Custom-->
<style>
.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0}body,html{word-wrap:break-word!important;padding:0!important;margin:0!important;touch-action:manipulation!important;}img{max-width:100%;border-radius:5px}img.lazyload:not([src]){visibility:hidden;}img:-moz-broken{opacity:0;}img{position:relative;}img::after{content:"";display:block;position:absolute;top:0;left:0;width:100%;height:100%;background-color:white;}iframe{border-radius:5px;}
</style>
<!--Hyperlink Nofollow Js-->
<script>
document.addEventListener('DOMContentLoaded', function () { var links = document.getElementsByTagName("a"); var i; for (i = 0; i < links.length; i++) { if (!links[i].rel && location.hostname !== links[i].hostname) { links[i].rel = "nofollow noopener noreferrer"; } } });
</script>

<!--WebSite-->
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebSite","@id":"#WebSite","name":"{{ env('APP_NAME') }} - {{ env('APP_TAGLINE') }}","alternateName":"{{ env('APP_NAME') }} - {{ env('APP_TAGLINE') }} - {{ env('APP_BRAND') }}","headline":"{{ env('APP_NAME') }} - {{ env('APP_TAGLINE') }}","url":"{{ env('APP_URL') }}","description":"{{ env('GLOBAL_DESC') }}","disambiguatingDescription":"{{ env('GLOBAL_DESC') }} - {{ env('APP_NAME') }} - {{ env('APP_TAGLINE') }} - {{ env('APP_BRAND') }}","keywords":["Kartu nama","Bio link","vCard indonesia","Kartu nama digital","Pembuat vCard","Bio link terbaik","Kartu nama bisnis","Bio link bisnis","Kartu nama online","Web kartu nama"],"genre":["vCards","Marketing","Business","Website","Software","Tool"],"image":{"@type":"ImageObject","@id":"#ImageWebSite","inLanguage":"id-ID","url":"{{ env('APP_URL') }}/assets/img/kartunama/kartunamapro.png","caption":"{{ env('APP_NAME') }} - {{ env('APP_TAGLINE') }}"},"inLanguage":"id-ID","sameAs":["https://facebook.com/kartunamaxd","https://twitter.com/401xdgroup","https://instagram.com/kartunamaxd","https://linkedin.com/company/401xdgroup","https://pinterest.com/401xdgroup","https://youtube.com/c/mycodingxd"],"potentialAction":{"@type":"SearchAction","target":"{{ env('APP_URL') }}/?q={query}","query-input":"required name=query"},"publisher":{"@id":"#Organization"},"sponsor":{"@id":"#Corporation"}}
</script>
<!--Organization-->
<script type="application/ld+json">
{"@context":"https://schema.org/","@type":"Organization","@id":"#Organization","url":"{{ env('APP_URL') }}","name":"{{ env('APP_NAME') }} - {{ env('APP_TAGLINE') }}","description":"{{ env('GLOBAL_DESC') }}","sameAs":["https://facebook.com/kartunamaxd","https://twitter.com/401xdgroup","https://instagram.com/kartunamaxd","https://linkedin.com/company/401xdgroup","https://pinterest.com/401xdgroup","https://youtube.com/c/mycodingxd"],"logo":{"@type":"ImageObject","@id":"#LogoOrganization","inLanguage":"id-ID","url":"{{ env('APP_URL') }}/assets/img/kartunama/logo.png","caption":"{{ env('APP_NAME') }} - {{ env('APP_TAGLINE') }}"},"image":{"@type":"ImageObject","@id":"#ImageWebSite","inLanguage":"id-ID","url":"{{ env('APP_URL') }}/assets/img/kartunama/kartunamapro.png","caption":"{{ env('APP_NAME') }} - {{ env('APP_TAGLINE') }}"},"address":{"@type":"PostalAddress","@id":"#PostalAddressOrganization","streetAddress":"{{ env('APP_COMPANY') }}, Jl. Sumbawa, Ulak Karang Utara, Kec. Padang Utara","addressLocality":"Kota Padang","addressRegion":"Sumatera Barat","postalCode":"25133","addressCountry":"Indonesia"},"founder":{"@type":"Person","name":"Adi Gunawan","honorificSuffix":"S.Kom., M.Kom.","jobTitle":"Owner","url":"https://adigunawan.id/","sameAs":["https://orcid.org/0000-0002-5954-8068","https://www.researchgate.net/profile/Adi-Gunawan-3","https://scholar.google.com/citations?user=mDVQUgQAAAAJ","https://independent.academia.edu/AdiGunawanXD","https://www.facebook.com/AdigunawanXD","https://www.instagram.com/AdiGunawanXD"]},"aggregateRating":{"@type":"AggregateRating","ratingValue":"4.9","reviewCount":"1{{ date('d') }}"},"review":{"@type":"Review","@id":"#ReviewOrganization","name":"Ulasan {{ env('APP_NAME') }}","author":{"@type":"Person","name":"Adi Gunawan","honorificSuffix":"S.Kom., M.Kom.","url":"https://adigunawan.id/","sameAs":["https://orcid.org/0000-0002-5954-8068","https://www.researchgate.net/profile/Adi-Gunawan-3","https://scholar.google.com/citations?user=mDVQUgQAAAAJ","https://independent.academia.edu/AdiGunawanXD","https://www.facebook.com/AdigunawanXD","https://www.instagram.com/AdiGunawanXD"]},"description":"Platform pembuat halaman web kartu nama digital vCard premium dan bio link profesional","reviewRating":{"@type":"Rating","ratingValue":"4.9","worstRating":"1","bestRating":"5"}}}
</script>
<!--Corporation-->
<script type="application/ld+json">
{"@context":"https://schema.org/","@type":"Corporation","@id":"#Corporation","url":"https://401xd.com","name":"{{ env('APP_COMPANY') }}","alternateName":"{{ env('APP_COMPANY') }} Indonesia","description":"{{ env('APP_COMPANY') }} adalah perusahaan yang memiliki spesialisasi dalam bidang teknologi, pengembangan software, kecerdasan buatan, internet, portal media online, digital marketing, teknologi finansial dan e-commerce di Indonesia.","disambiguatingDescription":"{{ env('APP_COMPANY') }} adalah perusahaan yang memiliki spesialisasi dalam bidang teknologi, pengembangan software, kecerdasan buatan, internet, portal media online, digital marketing, teknologi finansial dan e-commerce di Indonesia. Berawal dari sebuah organisasi komunitas pada tahun 2009, {{ env('APP_COMPANY') }} saat ini berdiri sebagai perusahaan yang memiliki 20+ startup penyedia produk, layanan jasa, dan portal media informasi online.","telephone":"+6282377823390","sameAs":["https://g.page/401xd","https://facebook.com/401xd","https://twitter.com/401xdgroup","https://instagram.com/401xdgroup","https://linkedin.com/company/401xdgroup","https://pinterest.com/401xdgroup"],"logo":{"@type":"ImageObject","@id":"#LogoCorporation","inLanguage":"id-ID","url":"{{ env('APP_URL') }}/assets/img/kartunama/401XDGroup.png","caption":"{{ env('APP_COMPANY') }}"},"image":{"@type":"ImageObject","@id":"#ImageCorporation","inLanguage":"id-ID","url":"{{ env('APP_URL') }}/assets/img/kartunama/401XDGroupIndonesia.png","caption":"{{ env('APP_COMPANY') }}"},"address":{"@type":"PostalAddress","@id":"#PostalAddressCorporation","streetAddress":"{{ env('APP_COMPANY') }}, Jl. Sumbawa, Ulak Karang Utara, Kec. Padang Utara","addressLocality":"Kota Padang","addressRegion":"Sumatera Barat","postalCode":"25133","addressCountry":"Indonesia"},"aggregateRating":{"@type":"AggregateRating","ratingValue":"4.9","reviewCount":"2{{ date('m') }}"},"review":{"@type":"Review","@id":"#ReviewCorporation","name":"Ulasan {{ env('APP_NAME') }}","author":{"@type":"Person","name":"Adi Gunawan","honorificSuffix":"S.Kom., M.Kom.","url":"https://adigunawan.id/","sameAs":["https://orcid.org/0000-0002-5954-8068","https://www.researchgate.net/profile/Adi-Gunawan-3","https://scholar.google.com/citations?user=mDVQUgQAAAAJ","https://independent.academia.edu/AdiGunawanXD","https://www.facebook.com/AdigunawanXD","https://www.instagram.com/AdiGunawanXD"]},"description":"Platform pembuat halaman web kartu nama digital vCard premium dan bio link profesional","reviewRating":{"@type":"Rating","ratingValue":"4.9","worstRating":"1","bestRating":"5"}}}
</script>
<!--WebPage-->
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebPage","@id":"#WebPage","name":"@if(checkFeature('seo')) @if($vcard->home_title && $vcard->site_title) {{ $vcard->home_title }} - {{ $vcard->site_title }} @elseif($vcard->home_title) {{ $vcard->home_title }} - {{ $vcard->occupation }} @elseif($vcard->site_title) {{ $vcard->name }} - {{ $vcard->site_title }} @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif","alternateName":"@if(checkFeature('seo')) @if($vcard->home_title && $vcard->site_title) {{ $vcard->home_title }} - {{ $vcard->site_title }} @elseif($vcard->home_title) {{ $vcard->home_title }} - {{ $vcard->occupation }} @elseif($vcard->site_title) {{ $vcard->name }} - {{ $vcard->site_title }} @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif - {{ env('APP_BRAND') }}","headline":"@if(checkFeature('seo')) @if($vcard->home_title && $vcard->site_title) {{ $vcard->home_title }} - {{ $vcard->site_title }} @elseif($vcard->home_title) {{ $vcard->home_title }} - {{ $vcard->occupation }} @elseif($vcard->site_title) {{ $vcard->name }} - {{ $vcard->site_title }} @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif","url":"{{ url()->current(); }}","description":"@if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @endif @else @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @endif","disambiguatingDescription":"@if(checkFeature('seo')) @if($vcard->home_title && $vcard->site_title) {{ $vcard->home_title }} - {{ $vcard->site_title }} @elseif($vcard->home_title) {{ $vcard->home_title }} - {{ $vcard->occupation }} @elseif($vcard->site_title) {{ $vcard->name }} - {{ $vcard->site_title }} @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif. @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @endif @else @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @endif. @if(checkFeature('seo')) @if($vcard->meta_keyword) {{ $vcard->meta_keyword }} @else Kartunama Pro, Kartu Nama Digital, {{ $vcard->name }}, Kartu Nama {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}, Link Bio {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}, Bio Link {{ ucwords($vcard->first_name.' '.$vcard->last_name) }} @endif @else Kartunama Pro, Kartu Nama Digital, {{ $vcard->name }}, Kartu Nama {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}, Link Bio {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}, Bio Link {{ ucwords($vcard->first_name.' '.$vcard->last_name) }} @endif. {{ env('GLOBAL_DESC') }} - {{ env('GLOBAL_DESC') }} - {{ env('APP_NAME') }} - {{ env('APP_TAGLINE') }} by {{ env('APP_COMPANY') }}.","keywords":["@if(checkFeature('seo')) @if($vcard->meta_keyword) {{ $vcard->meta_keyword }} @else Kartunama Pro","Kartu Nama Digital","{{ $vcard->name }}","Kartu Nama {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}","Link Bio {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}","Bio Link {{ ucwords($vcard->first_name.' '.$vcard->last_name) }} @endif @else Kartunama Pro","Kartu Nama Digital","{{ $vcard->name }}","Kartu Nama {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}","Link Bio {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}","Bio Link {{ ucwords($vcard->first_name.' '.$vcard->last_name) }} @endif"],"genre":["vCards","Marketing","Business","Website","Software","Tool"],"image":{"@type":"ImageObject","@id":"#Image","inLanguage":"id-ID","url":"{{ $vcard->profile_url }}","caption":"@if(checkFeature('seo')) @if($vcard->home_title && $vcard->site_title) {{ $vcard->home_title }} - {{ $vcard->site_title }} @elseif($vcard->home_title) {{ $vcard->home_title }} - {{ $vcard->occupation }} @elseif($vcard->site_title) {{ $vcard->name }} - {{ $vcard->site_title }} @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif"},"inLanguage":"id-ID","sameAs":["https://facebook.com/kartunamaxd","https://twitter.com/401xdgroup","https://instagram.com/kartunamaxd","https://linkedin.com/company/401xdgroup","https://pinterest.com/401xdgroup","https://youtube.com/c/mycodingxd"],"potentialAction":{"@type":"SearchAction","target":"{{ env('APP_URL') }}/?q={query}","query-input":"required name=query"},"speakable":{"@type":"SpeakableSpecification","xpath":["/html/head/title","/html/head/meta[@name='description']/@content"]},"publisher":{"@id":"#Organization"},"sponsor":{"@id":"#Corporation"},"isPartOf":{"@id":"#WebSite"},"mainEntityOfPage":"false","isFamilyFriendly":"true","author":{"@type":"Person","name":"{{ ucwords($vcard->first_name.' '.$vcard->last_name) }}","url":"{{ url()->current(); }}"},"creator":"{{ ucwords($vcard->first_name.' '.$vcard->last_name) }}","accountablePerson":{"@type":"Person","name":"Adi Gunawan","honorificSuffix":"S.Kom., M.Kom.","url":"https://adigunawan.id/","sameAs":["https://orcid.org/0000-0002-5954-8068","https://www.researchgate.net/profile/Adi-Gunawan-3","https://scholar.google.com/citations?user=mDVQUgQAAAAJ","https://independent.academia.edu/AdiGunawanXD","https://www.facebook.com/AdigunawanXD","https://www.instagram.com/AdiGunawanXD"]},"copyrightYear":"{{ date('Y') }}","copyrightHolder":{"@id":"#Corporation"}}
</script>
<!--Article-->
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Article","name":"@if(checkFeature('seo')) @if($vcard->home_title && $vcard->site_title) {{ $vcard->home_title }} - {{ $vcard->site_title }} @elseif($vcard->home_title) {{ $vcard->home_title }} - {{ $vcard->occupation }} @elseif($vcard->site_title) {{ $vcard->name }} - {{ $vcard->site_title }} @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif","alternateName":"@if(checkFeature('seo')) @if($vcard->home_title && $vcard->site_title) {{ $vcard->home_title }} - {{ $vcard->site_title }} @elseif($vcard->home_title) {{ $vcard->home_title }} - {{ $vcard->occupation }} @elseif($vcard->site_title) {{ $vcard->name }} - {{ $vcard->site_title }} @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif - {{ env('APP_BRAND') }}","headline":"@if(checkFeature('seo')) @if($vcard->home_title && $vcard->site_title) {{ $vcard->home_title }} - {{ $vcard->site_title }} @elseif($vcard->home_title) {{ $vcard->home_title }} - {{ $vcard->occupation }} @elseif($vcard->site_title) {{ $vcard->name }} - {{ $vcard->site_title }} @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif","url":"{{ url()->current(); }}","description":"@if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @endif @else @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @endif","disambiguatingDescription":"@if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @endif @else @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @endif - {{ env('APP_BRAND') }} {{ env('APP_COMPANY') }}","keywords":["@if(checkFeature('seo')) @if($vcard->meta_keyword) {{ $vcard->meta_keyword }} @else Kartunama Pro","Kartu Nama Digital","{{ $vcard->name }}","Kartu Nama {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}","Link Bio {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}","Bio Link {{ ucwords($vcard->first_name.' '.$vcard->last_name) }} @endif @else Kartunama Pro","Kartu Nama Digital","{{ $vcard->name }}","Kartu Nama {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}","Link Bio {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}","Bio Link {{ ucwords($vcard->first_name.' '.$vcard->last_name) }} @endif"],"genre":["vCards","Marketing","Business","Website","Software","Tool"],"image":{"@type":"ImageObject","@id":"#Image","inLanguage":"id-ID","url":"{{ $vcard->profile_url }}","caption":"@if(checkFeature('seo')) @if($vcard->home_title && $vcard->site_title) {{ $vcard->home_title }} - {{ $vcard->site_title }} @elseif($vcard->home_title) {{ $vcard->home_title }} - {{ $vcard->occupation }} @elseif($vcard->site_title) {{ $vcard->name }} - {{ $vcard->site_title }} @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif"},"inLanguage":"id-ID","sameAs":["https://facebook.com/kartunamaxd","https://twitter.com/401xdgroup","https://instagram.com/kartunamaxd","https://linkedin.com/company/401xdgroup","https://pinterest.com/401xdgroup","https://youtube.com/c/mycodingxd"],"potentialAction":{"@type":"SearchAction","target":"{{ env('APP_URL') }}/?q={query}","query-input":"required name=query"},"speakable":{"@type":"SpeakableSpecification","xpath":["/html/head/title","/html/head/meta[@name='description']/@content"]},"publisher":{"@id":"#Organization"},"sponsor":{"@id":"#Corporation"},"isPartOf":{"@id":"#WebPage"},"mainEntityOfPage":"true","isFamilyFriendly":"true","author":{"@type":"Person","name":"{{ ucwords($vcard->first_name.' '.$vcard->last_name) }}","url":"{{ url()->current(); }}"},"creator":"{{ ucwords($vcard->first_name.' '.$vcard->last_name) }}","accountablePerson":{"@type":"Person","name":"Adi Gunawan","honorificSuffix":"S.Kom., M.Kom.","url":"https://adigunawan.id/","sameAs":["https://orcid.org/0000-0002-5954-8068","https://www.researchgate.net/profile/Adi-Gunawan-3","https://scholar.google.com/citations?user=mDVQUgQAAAAJ","https://independent.academia.edu/AdiGunawanXD","https://www.facebook.com/AdigunawanXD","https://www.instagram.com/AdiGunawanXD"]},"copyrightYear":"{{ date('Y') }}","copyrightHolder":{"@id":"#Corporation"},"dateCreated":"{{ (new \DateTime($vcard->created_at))->format('Y-m-d\\TH:i:s') }}","datePublished":"{{ (new \DateTime($vcard->created_at))->format('Y-m-d\\TH:i:s') }}","dateModified":"{{ (new \DateTime($vcard->updated_at))->format('Y-m-d\\TH:i:s') }}","articleSection":["vCards","Marketing","Business","Website","Software","Tool"],"articleBody":"@if(checkFeature('seo')) @if($vcard->home_title && $vcard->site_title) {{ $vcard->home_title }} - {{ $vcard->site_title }} @elseif($vcard->home_title) {{ $vcard->home_title }} - {{ $vcard->occupation }} @elseif($vcard->site_title) {{ $vcard->name }} - {{ $vcard->site_title }} @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif. @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @endif @else @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @endif. @if(checkFeature('seo')) @if($vcard->meta_keyword) {{ $vcard->meta_keyword }} @else Kartunama Pro, Kartu Nama Digital, {{ $vcard->name }}, Kartu Nama {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}, Link Bio {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}, Bio Link {{ ucwords($vcard->first_name.' '.$vcard->last_name) }} @endif @else Kartunama Pro, Kartu Nama Digital, {{ $vcard->name }}, Kartu Nama {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}, Link Bio {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}, Bio Link {{ ucwords($vcard->first_name.' '.$vcard->last_name) }} @endif. {{ env('GLOBAL_DESC') }} - {{ env('GLOBAL_DESC') }} - {{ env('APP_NAME') }} - {{ env('APP_TAGLINE') }} by {{ env('APP_COMPANY') }}."}
</script>
<!--ImageObject-->
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"ImageObject","@id":"#ImageObject","name":"@if(checkFeature('seo')) @if($vcard->home_title && $vcard->site_title) {{ $vcard->home_title }} - {{ $vcard->site_title }} @elseif($vcard->home_title) {{ $vcard->home_title }} - {{ $vcard->occupation }} @elseif($vcard->site_title) {{ $vcard->name }} - {{ $vcard->site_title }} @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif","alternateName":"@if(checkFeature('seo')) @if($vcard->home_title && $vcard->site_title) {{ $vcard->home_title }} - {{ $vcard->site_title }} @elseif($vcard->home_title) {{ $vcard->home_title }} - {{ $vcard->occupation }} @elseif($vcard->site_title) {{ $vcard->name }} - {{ $vcard->site_title }} @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif - {{ env('APP_BRAND') }}","headline":"@if(checkFeature('seo')) @if($vcard->home_title && $vcard->site_title) {{ $vcard->home_title }} - {{ $vcard->site_title }} @elseif($vcard->home_title) {{ $vcard->home_title }} - {{ $vcard->occupation }} @elseif($vcard->site_title) {{ $vcard->name }} - {{ $vcard->site_title }} @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif","alternativeHeadline":"@if(checkFeature('seo')) @if($vcard->home_title && $vcard->site_title) {{ $vcard->home_title }} - {{ $vcard->site_title }} @elseif($vcard->home_title) {{ $vcard->home_title }} - {{ $vcard->occupation }} @elseif($vcard->site_title) {{ $vcard->name }} - {{ $vcard->site_title }} @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif - {{ env('APP_BRAND') }}","description":"@if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @endif @else @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @endif","disambiguatingDescription":"@if(checkFeature('seo')) @if($vcard->home_title && $vcard->site_title) {{ $vcard->home_title }} - {{ $vcard->site_title }} @elseif($vcard->home_title) {{ $vcard->home_title }} - {{ $vcard->occupation }} @elseif($vcard->site_title) {{ $vcard->name }} - {{ $vcard->site_title }} @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif. @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @endif @else @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @endif. @if(checkFeature('seo')) @if($vcard->meta_keyword) {{ $vcard->meta_keyword }} @else Kartunama Pro, Kartu Nama Digital, {{ $vcard->name }}, Kartu Nama {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}, Link Bio {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}, Bio Link {{ ucwords($vcard->first_name.' '.$vcard->last_name) }} @endif @else Kartunama Pro, Kartu Nama Digital, {{ $vcard->name }}, Kartu Nama {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}, Link Bio {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}, Bio Link {{ ucwords($vcard->first_name.' '.$vcard->last_name) }} @endif. {{ env('GLOBAL_DESC') }} - {{ env('GLOBAL_DESC') }} - {{ env('APP_NAME') }} - {{ env('APP_TAGLINE') }} by {{ env('APP_COMPANY') }}.","abstract":"@if(checkFeature('seo')) @if($vcard->home_title && $vcard->site_title) {{ $vcard->home_title }} - {{ $vcard->site_title }} @elseif($vcard->home_title) {{ $vcard->home_title }} - {{ $vcard->occupation }} @elseif($vcard->site_title) {{ $vcard->name }} - {{ $vcard->site_title }} @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif. @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @endif @else @if(checkFeature('seo')) @if($vcard->meta_description) {{ $vcard->meta_description }} @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @else {{ $vcard->name }} - {{ $vcard->occupation }}. Bio link kartu nama digital {{ $vcard->name }}. Berikut informasi lengkap {{ $vcard->name }}, alamat, kontak, sosial media dan website official {{ $vcard->name }} di {{ env('APP_BRAND') }}. @endif @endif. @if(checkFeature('seo')) @if($vcard->meta_keyword) {{ $vcard->meta_keyword }} @else Kartunama Pro, Kartu Nama Digital, {{ $vcard->name }}, Kartu Nama {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}, Link Bio {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}, Bio Link {{ ucwords($vcard->first_name.' '.$vcard->last_name) }} @endif @else Kartunama Pro, Kartu Nama Digital, {{ $vcard->name }}, Kartu Nama {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}, Link Bio {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}, Bio Link {{ ucwords($vcard->first_name.' '.$vcard->last_name) }} @endif. {{ env('GLOBAL_DESC') }} - {{ env('GLOBAL_DESC') }} - {{ env('APP_NAME') }} - {{ env('APP_TAGLINE') }} by {{ env('APP_COMPANY') }}.","keywords":["@if(checkFeature('seo')) @if($vcard->meta_keyword) {{ $vcard->meta_keyword }} @else Kartunama Pro","Kartu Nama Digital","{{ $vcard->name }}","Kartu Nama {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}","Link Bio {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}","Bio Link {{ ucwords($vcard->first_name.' '.$vcard->last_name) }} @endif @else Kartunama Pro","Kartu Nama Digital","{{ $vcard->name }}","Kartu Nama {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}","Link Bio {{ ucwords($vcard->first_name.' '.$vcard->last_name) }}","Bio Link {{ ucwords($vcard->first_name.' '.$vcard->last_name) }} @endif"],"genre":["vCards","Marketing","Business","Website","Software","Tool"],"caption":"@if(checkFeature('seo')) @if($vcard->home_title && $vcard->site_title) {{ $vcard->home_title }} - {{ $vcard->site_title }} @elseif($vcard->home_title) {{ $vcard->home_title }} - {{ $vcard->occupation }} @elseif($vcard->site_title) {{ $vcard->name }} - {{ $vcard->site_title }} @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif @else {{ $vcard->name }} - {{ $vcard->occupation }} @endif","contentUrl":"{{ $vcard->profile_url }}","inLanguage":"id-ID","license":"https://mycoding.id/terms-conditions","acquireLicensePage":"{{ url()->current(); }}","creditText":"{{ env('APP_NAME') }}","creator":{"@type":"Person","name":"{{ ucwords($vcard->first_name.' '.$vcard->last_name) }}","url":"{{ url()->current(); }}"},"copyrightNotice":"{{ env('APP_NAME') }}","isBasedOnUrl":"{{ url()->current(); }}"}
</script>
</head>
<body>
    <div class="container">
        @include('vcards.password')
        <div class="vcard-nine main-content w-100 mx-auto overflow-hidden content-blur collapse show allSection">

            {{--banner--}}
            <div class="vcard-nine__banner w-100 position-relative">
                <img data-sizes="auto" data-src="{{ $vcard->cover_url }}" class="lazyload img-fluid banner-image" alt="Banner {{ env('APP_NAME') }}"/>
                <div class="d-flex justify-content-end position-absolute top-0 end-0 me-3">
                    @if($vcard->language_enable == \App\Models\Vcard::LANGUAGE_ENABLE)
                    <div class="language pt-4 me-2">
                        <ul class="text-decoration-none">
                            <li class="dropdown1 dropdown lang-list">
                                <a class="dropdown-toggle lang-head text-decoration-none" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-solid fa-language me-2"></i>{{getLanguage($vcard->default_language) }}
                                </a>
                                <ul class="dropdown-menu start-0 top-dropdown lang-hover-list top-100">
                                    @foreach(getAllLanguage() as $key => $language)
                                    <li class="{{ getLanguageIsoCode($vcard->default_language) === $key ? 'active' : '' }}">
                                        <a href="javascript:void(0)" id="languageName"
                                        data-name="{{ $key }}">{{ $language }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                    @endif

                </div>
            </div>

            {{--profile--}}
            <div class="vcard-nine__profile position-relative">
                <div class="avatar position-absolute top-0 start-50 translate-middle">
                    <img data-sizes="auto" data-src="{{ $vcard->profile_url }}" alt="Profile {{ env('APP_NAME') }}" class="lazyload rounded-circle"/>
                </div>
            </div>
            
            {{--profile details--}}
            <div class="vcard-nine__profile-details py-4 px-3">
                <h4 class="profile-name text-center mb-3">{{ ucwords($vcard->first_name.' '.$vcard->last_name) }}</h4>
                <span class="profile-designation text-center d-block">{{ ucwords($vcard->occupation) }}</span>
                @if(checkFeature('social_links') && getSocialLink($vcard))
                <div class="social-icons d-flex justify-content-center pt-4 flex-wrap mx-auto">
                    @foreach(getSocialLink($vcard) as $value)
                    <span class="rounded-circle d-flex justify-content-center align-items-center m-sm-2 m-1">
                       {!! $value !!}
                   </span>
                   @endforeach
                </div>
                @endif
            </div>

            {{--description--}}
            @if($vcard->description)
            <div class="container text-dark text-center py-4 px-3" style="border-radius:25px;font-size:15px;">
                {{ $vcard->description }}
            </div>
            @endif

            {{--event--}}
            <div class="vcard-nine__event position-relative py-4 px-3">
                <div class="container">
                    <div class="row g-3">
                        @if($vcard->email)
                        <div class="col-sm-6 col-12">
                            <div class="card event-card h-100 border-0 flex-sm-row flex-column align-items-center py-4 px-3">
                                <span class="event-icon d-flex justify-content-center align-items-center">
                                    <img data-sizes="auto" data-src="{{ asset('assets/img/vcard9/vcard9-email.png') }}" alt="eMail" class="lazyload"/>
                                </span>
                                <div class="event-detail ms-sm-3 mt-sm-0 mt-4">
                                    <h6 class="text-sm-start text-center">{{ __('messages.vcard.email_address') }}</h6>
                                    <h5><a href="mailto:{{ $vcard->email }}" class="event-name text-sm-start text-center mb-0 text-decoration-none">{{ $vcard->email }}</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($vcard->phone)
                        <div class="col-sm-6 col-12">
                            <div class="card event-card px-3 py-4 h-100 border-0 flex-sm-row flex-column align-items-center">
                                <span class="event-icon d-flex justify-content-center align-items-center">
                                    <img data-sizes="auto" data-src="{{ asset('assets/img/vcard9/vcard9-phone.png') }}" alt="phone" class="lazyload"/>
                                </span>
                                <div class="event-detail ms-sm-3 mt-sm-0 mt-4">
                                    <h6 class="text-sm-start text-center">{{ __('messages.vcard.mobile_number') }}</h6>
                                    <h5><a href="tel:{{ $vcard->phone }}" class="event-name text-center mb-0 text-decoration-none">+{{ $vcard->region_code }} {{ $vcard->phone }}</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($vcard->dob)
                        <div class="col-sm-6 col-12">
                            <div class="card event-card px-3 py-4 h-100 border-0 flex-sm-row flex-column align-items-center">
                                <span class="event-icon d-flex justify-content-center align-items-center">
                                    <img data-sizes="auto" data-src="{{ asset('assets/img/vcard9/vcard9-birthday.png') }}" alt="birthday" class="lazyload"/>
                                </span>
                                <div class="event-detail ms-sm-3 mt-sm-0 mt-4">
                                    <h6 class="text-sm-start text-center">{{ __('messages.vcard.dob') }}</h6>
                                    <h5 class="event-name text-center mb-0">{{ \Carbon\Carbon::parse($vcard->dob)->format('dS F, Y') }}</h5>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($vcard->location)
                        <div class="col-sm-6 col-12">
                            <div class="card event-card px-3 py-4 h-100 border-0 flex-sm-row flex-column align-items-center">
                                <span class="event-icon d-flex justify-content-center align-items-center">
                                    <img data-sizes="auto" data-src="{{ asset('assets/img/vcard9/vcard9-location.png') }}" alt="location" class="lazyload"/>
                                </span>
                                <div class="event-detail ms-sm-3 mt-sm-0 mt-4">
                                    <h6 class="text-sm-start text-center">{{ __('messages.vcard.location') }}</h6>
                                    <h5 class="event-name text-center mb-0">{!! ucwords($vcard->location) !!}</h5>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            {{--Appointment--}}
            @if(checkFeature('appointments') && $vcard->appointmentHours->count())
            <div class="vcard-nine__appointment position-relative py-4 px-3">
                <h4 class="heading-left heading-line position-relative text-center mt-4">{{ __('messages.make_appointments') }}</h4>
                <div class="container pt-4">
                    <div class="appointment-card p-3">
                        <div class="row d-flex align-items-center justify-content-center mb-3">
                            <div class="col-md-2">
                                <label for="date" class="appoint-date mb-2">{{ __('messages.date') }}</label>
                            </div>
                            <div class="col-md-10">
                                {{ Form::text('date', null, ['class' => 'date appoint-input', 'placeholder' => __('messages.form.pick_date'),'id'=>'pickUpDate']) }}
                            </div>
                        </div>
                        <div class="row d-flex align-items-center justify-content-center mb-md-3">
                            <div class="col-md-2">
                                <label for="text" class="appoint-date mb-2">{{ __('messages.hour') }}</label>
                            </div>
                            <div class="col-md-10">
                                <div id="slotData" class="row">
                                </div>
                            </div>
                        </div>


                        <button type="button" class="appointmentAdd appoint-btn text-light mt-4 d-block mx-auto ">{{ __('messages.make_appointments') }}
                        </button>
                    </div>
                </div>
            </div>
            @include('vcardTemplates.appointment')
            @endif

            {{--products--}}
            @if(checkFeature('products') && $vcard->products->count())
            <div class="vcard-nine__productposition-relative py-4">
                <h4 class="heading-right heading-line position-relative text-center mt-4">{{ __('messages.plan.products') }}</h4>
                <div class="container">
                    <div class="row g-3 product-slider">
                        @foreach($vcard->products as $product)
                        <div class="col-6 h-100">
                            <div class="card product-card p-3 border-0 w-100 product-block h-100">
                                <div class="product-profile">
                                    <img data-sizes="auto" data-src="{{ $product->product_icon }}" alt="Profile {{ env('APP_NAME') }}" class="lazyload w-100"
                                    height="208px"/>
                                </div>
                                <div class="product-details mt-3">
                                    <h4>{{ $product->name }}</h4>
                                    <p class="mb-2">
                                        {{ $product->description }}
                                    </p>
                                    @if($product->currency_id && $product->price)
                                    <span
                                    class="text-dark">{{ $product->currency->currency_icon}}{{ $product->price}}</span>
                                    @elseif($product->price)
                                    <span class="text-dark">{{ $product->price}}</span>
                                    @else
                                    <span class="text-dark">N/A</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif

            {{--our services--}}
            @if(checkFeature('services') && $vcard->services->count())
            <div class="vcard-nine__service position-relative py-4 px-3">
                <h4 class="heading-left heading-line position-relative text-center mt-4">{{ __('messages.vcard.our_service') }}</h4>
                <div class="container pt-4">
                    <div class="row service-row g-4">
                        @foreach($vcard->services as $service)
                        <div class="col-12">
                            <div class="card service-card h-100 w-100 p-3 border-0 d-flex align-items-center flex-sm-row">
                                <div class="service-image rounded-circle d-flex justify-content-center align-items-center justify-content-center">
                                    <img data-sizes="auto" data-src="{{ $service->service_icon }}" class="lazyload rounded-circle" alt="service"/>
                                </div>
                                <div class="service-details ms-sm-3 mt-sm-0 mt-3">
                                    <h5 class="service-title text-sm-start text-center">{{ ucwords($service->name) }}</h5>
                                    <p class="service-paragraph mb-0 text-sm-start text-center">
                                        {!! $service->description !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif

            {{--gallery--}}
            @if(checkFeature('gallery') && $vcard->gallery->count())
            <div class="vcard-nine__gallery position-relative py-4">
                <h4 class="heading-right heading-line position-relative text-center mt-4">{{ __('messages.plan.gallery') }}</h4>
                <div class="container">
                    <div class="row g-3 gallery-slider">
                        @foreach($vcard->gallery as $file)
                        <div class="col-6">
                            <div class="card gallery-card p-3 border-0 w-100">
                                <div class="gallery-profile">
                                    @if($file->link == null)
                                    <img data-sizes="auto" data-src="{{ $file->gallery_image }}" alt="Profile {{ env('APP_NAME') }}" class="lazyload w-100"/>
                                    @else
                                    <a id="video_url" data-id="https://www.youtube.com/embed/{{ YoutubeID($file->link) }}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="gallery-link" tabindex="0">
                                        <div class="gallery-item" style="background-image: url({{ asset('assets/img/video-thumbnail.png') }})">
                                        </div>
                                    </a>
                                   @endif
                               </div>
                           </div>
                       </div>
                       @endforeach

                   </div>
               </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <iframe id="video" src="//www.youtube.com/embed/{{ YoutubeID($file->link) }}" class="w-100" height="315">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            {{-- blog--}}
            @if(checkFeature('blog') && $vcard->blogs->count())
            <div class="vcard-nine__blog position-relative py-4">
                <h4 class="heading-left heading-line position-relative text-center mt-4 px-2">{{ __('messages.feature.blog') }}</h4>
                <div class="container">
                    <div class="row g-4 blog-slider overflow-hidden">
                        @foreach($vcard->blogs as $blog)
                        <div class="col-6 mb-2">
                            <div class="card blog-card p-2 border-0 w-100 h-100">
                                <div class="blog-image">
                                    <a href="{{ route('vcard.show-blog',[$vcard->url_alias,$blog->id]) }}">
                                        <img data-sizes="auto" data-src="{{ $blog->blog_icon }}" alt="Profile {{ env('APP_NAME') }}" class="lazyload w-100"/>
                                    </a>
                                </div>
                                <div class="blog-details p-3">
                                    <a href="{{ route('vcard.show-blog',[$vcard->url_alias,$blog->id]) }}" class="text-decoration-none">
                                        <h4 class="text-sm-start text-center title-color p-3 mb-0 text-dark">{{ $blog->title }}</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif

            {{--testimonial--}}
            @if(checkFeature('testimonials') && $vcard->testimonials->count())
            <div class="vcard-nine__testimonial position-relative py-4">
                <h4 class="heading-right heading-line position-relative text-center mt-4">{{ __('messages.plan.testimonials') }}</h4>
                <div class="container">
                    <div class="row g-3 testimonial-slider">
                        @foreach($vcard->testimonials as $testimonial)
                        <div class="col-12 h-100">
                            <div class="card testimonial-card p-3 border-0 w-100 h-100">
                                <div class="testimonial-user d-flex flex-sm-row flex-column align-items-center justify-content-sm-start justify-content-center">
                                    <img data-sizes="auto" data-src="{{ $testimonial->image_url }}" alt="Profile {{ env('APP_NAME') }}" class="lazyload rounded-circle"/>
                                    <div class="user-details d-flex flex-column ms-sm-3 mt-sm-0 mt-2">
                                        <span class="user-name text-sm-start text-center">{{ ucwords($testimonial->name) }}</span>
                                        <span class="user-designation text-sm-start text-center"></span>
                                    </div>
                                </div>
                                <p class="review-message mb-2 text-sm-start text-center mt-2 h-100">
                                    {{ $testimonial->description }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif

            {{--qr code--}}
            <div class="vcard-nine__qr-code position-relative py-4 px-3">
                <h4 class="heading-left position-relative text-center mt-4">{{ __('messages.vcard.qr_code') }}</h4>
                <div class="container pt-4">
                    <div class="card qr-code-card flex-sm-row flex-column justify-content-center align-items-center border-0">
                        <div class="mx-2">
                            <div class="qr-profile mb-3 d-flex justify-content-center">
                                <img data-sizes="auto" data-src="{{ $vcard->profile_Url }}" alt="QR {{ env('APP_NAME') }}" class="lazyload mx-auto d-block rounded-circle"/>
                            </div>
                            <a class="qr-code-btn text-light mt-4 mb-4 d-sm-block d-none mx-auto text-decoration-none" id="qr-code-btn" href="data:image/svg;base64,{{ base64_encode(QrCode::size(300)->format('svg')->generate(Request::url())) }}" download="qr_code.svg">{{ __('messages.vcard.download_my_qr_code') }}
                            </a>
                        </div>
                        <div class="qr-code-scanner mx-md-4 mx-2 p-4 bg-white">
                            {!! QrCode::size(130)->format('svg')->generate(Request::url()); !!}
                        </div>
                    </div>
                </div>
            </div>

            {{--business hour--}}
            @if($vcard->businessHours->count())
            <div class="vcard-nine__timing position-relative py-4 px-3">
                <h4 class="heading-right position-relative text-center mt-4">{{ __('messages.business.business_hours') }}</h4>
                <div class="container">
                    <div class="row pt-4 justify-content-center">
                        <div class="col-sm-8 col-12 time-section">
                            @foreach($vcard->businessHours as $day)
                            <div class="d-flex justify-content-center time-zone">
                                <span class="me-2">{{ strtoupper(__('messages.business.'.\App\Models\BusinessHour::DAY_OF_WEEK[$day->day_of_week])) }} :</span>
                                <span>{{ $day->start_time.' - '.$day->end_time }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif

            {{--contact us--}}
            <div class="vcard-nine__contact position-relative py-4 px-4">
                @php $currentSubs = $vcard->subscriptions()->where('status', \App\Models\Subscription::ACTIVE)->latest()->first() @endphp
                @if($currentSubs && $currentSubs->plan->planFeature->enquiry_form)
                <h4 class="heading-left position-relative text-center mt-4">{{ __('messages.contact_us.contact_us') }}</h4>
                <div class="container">
                    <div class="row pt-4">
                        <div class="col-12 px-0">
                            <form id="enquiryForm">
                                @csrf
                                <div class="contact-form px-sm-2">
                                    <div id="enquiryError" class="alert alert-danger d-none"></div>
                                    <div class="mb-3">
                                        <input type="text" name="name" class="form-control" id="name"
                                        placeholder="{{ __('messages.form.your_name') }}">
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" name="email" class="form-control" id="email"
                                        placeholder="{{ __('messages.form.your_email') }}">
                                    </div>
                                    <div class="mb-3">
                                        <input type="tel" name="phone" class="form-control" id="mobile"
                                        placeholder="{{ __('messages.form.phone') }}">
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control" name="message"
                                        placeholder="{{ __('messages.form.type_message') }}" id="message"
                                        rows="5"></textarea>
                                    </div>
                                    <button type="submit" class="contact-btn text-light mt-4 d-block mx-auto">{{ __('messages.contact_us.send_message') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endif

                {{--Download vCard--}}
                <div class="d-sm-flex justify-content-center py-3">
                    <button type="submit" class="vcard-nine-btn mt-3 d-block btn text-light" onclick="downloadVcard('{{ $vcard->name }}.vcf',{{ $vcard->id }})">
                        <i class="fas fa-download me-2"></i>{{ __('messages.vcard.download_vcard') }}
                    </button>
                    {{--share btn--}}
                    <button type="button" class="vcard9-share share-btn d-block btn mt-3 ms-sm-3">
                        <a class="text-decoration-none text-light">
                            <i class="fas fa-share-alt me-2"></i>{{ __('messages.vcard.share') }}
                        </a>
                    </button>
                </div>

                {{--Google Maps--}}
                @if($vcard->location_url && isset($url[5]))
                <div class="position-relative py-4">
                    <div class="container">
                        <iframe width="100%" height="300px" src='https://maps.google.com/maps?q={{ $url[5]}}/&output=embed'
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        style="border-radius: 15px;"></iframe>
                    </div>
                </div>
                @endif

                {{--Brand--}}
                <div class="d-flex justify-content-evenly pt-2 pb-2">
                    @if(!isset(checkFeature('advanced')->hide_branding) || $vcard->branding == 0)
                    @if($vcard->made_by)
                    <a href="{{ $vcard->made_by_url }}" class="text-center text-decoration-none text-dark" target="_blank" rel="nofollow noreferrer noopener">
                        <small>{{ __('messages.made_by') }} {{ $vcard->made_by }}</small>
                    </a>
                    @else
                    <a href="{{ env('APP_URL') }}" class="text-center text-decoration-none text-dark" target="_blank">
                        <small>{{ __('messages.made_by') }} {{ $setting['app_name'] }}</small>
                    </a>
                    @endif
                    @endif

                    @if(!empty($vcard->privacy_policy) || !empty($vcard->term_condition))
                    <div>
                        <a class="text-decoration-none text-dark cursor-pointer" href="{{ route('vcard.show-privacy-policy',[$vcard->url_alias,$vcard->id]) }}">
                            <small>{{ __('messages.vcard.term_policy') }}</small>
                        </a>
                    </div>
                    @endif
                </div>
            </div>

            {{-- share modal code--}}
            <div id="vcard9-shareModel" class="modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ __('messages.vcard.share_my_vcard') }}</h5>
                            <button type="button" aria-label="Close" class="btn btn-sm btn-icon btn-active-color-danger" data-bs-dismiss="modal">
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
                                            <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1"/>
                                            <rect fill="#000000" opacity="0.5" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)" x="0" y="7" width="16" height="2" rx="1"/>
                                        </g>
                                    </svg>
                                </span>
                            </button>
                        </div>
                        @php
                        $shareUrl = route('vcard.defaultIndex')."/".$vcard->url_alias;
                        @endphp
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12 justify-content-between social-link-modal">
                                    <a href="https://www.facebook.com/sharer.php?u={{ $shareUrl }}" target="_blank" rel="nofollow noreferrer noopener" class="mx-2 share" title="Facebook">
                                        <i class="fab fa-facebook fa-3x" style="color: #1B95E0"></i>
                                    </a>
                                    <a href="https://twitter.com/share?url={{ $shareUrl }}&text={{ $vcard->name }}&hashtags=sharebuttons" target="_blank" rel="nofollow noreferrer noopener" class="mx-2 share" title="Twitter">
                                        <i class="fab fa-twitter fa-3x" style="color: #1DA1F3"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ $shareUrl }}" target="_blank" rel="nofollow noreferrer noopener" class="mx-2 share" title="Linkedin">
                                        <i class="fab fa-linkedin fa-3x" style="color: #1B95E0"></i>
                                    </a>
                                    <a href="mailto:?Subject=&Body={{ $shareUrl }}" target="_blank" rel="nofollow noreferrer noopener" class="mx-2 share" title="Email">
                                        <i class="fas fa-envelope fa-3x" style="color: #191a19  "></i>
                                    </a>
                                    <a href="https://pinterest.com/pin/create/link/?url={{ $shareUrl }}" target="_blank" rel="nofollow noreferrer noopener" class="mx-2 share" title="Pinterest">
                                        <i class="fab fa-pinterest fa-3x" style="color: #bd081c"></i>
                                    </a>
                                    <a href="https://reddit.com/submit?url={{ $shareUrl }}&title={{ $vcard->name }}" target="_blank" rel="nofollow noreferrer noopener" class="mx-2 share" title="Reddit">
                                        <i class="fab fa-reddit fa-3x" style="color: #ff4500"></i>
                                    </a>
                                    <a href="https://wa.me/?text={{ $shareUrl }}" target="_blank" rel="nofollow noreferrer noopener" class="mx-2 share" title="Whatsapp">
                                        <i class="fab fa-whatsapp fa-3x" style="color: limegreen"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="text-center">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('vcardTemplates.template.templates')

    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('assets/js/front-third-party.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/slider/js/slick.min.js') }}"></script>
    <script>
        @if(checkFeature('seo') && $vcard->google_analytics)
        {!! $vcard->google_analytics !!}
        @endif
        @if(isset(checkFeature('advanced')->custom_js) && $vcard->custom_js)
        {!! $vcard->custom_js !!}
        @endif
    </script>
    @php
    $setting = \App\Models\UserSetting::where('user_id', $vcard->tenant->user->id)->where('key', 'stripe_key')->first();
    @endphp
    <script>
        let stripe = ''
        @if (!empty($setting) && !empty($setting->value))
        stripe = Stripe('{{ $setting->value }}');
        @endif
        $('.testimonial-slider').slick({
            dots: true,
            infinite: true,
            arrows: false,
            autoplay: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
        })
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
                    dots: true,
                },
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
            slidesToScroll: 1,
        })
    </script>
    <script>
        let isEdit = false
        let password = "{{ isset(checkFeature('advanced')->password) && !empty($vcard->password) }}"
        let passwordUrl = "{{ route('vcard.password', $vcard->id) }}";
        let enquiryUrl = "{{ route('enquiry.store',  ['vcard' => $vcard->id, 'alias' => $vcard->url_alias]) }}";
        let appointmentUrl = "{{ route('appointment.store', ['vcard' => $vcard->id, 'alias' => $vcard->url_alias]) }}";
        let slotUrl = "{{ route('appointment-session-time',$vcard->url_alias) }}";
        let appUrl = "{{ config('app.url') }}";
        let vcardId = {{ $vcard->id }};
        let vcardAlias = "{{ $vcard->url_alias }}";
        let paypalUrl = "{{ route('paypal.init') }}"
        let languageChange = "{{ url('language') }}";
        let lang = "{{ checkLanguageSession($vcard->url_alias) }}";
    </script>
    <script>
        const svg = document.getElementsByTagName('svg')[0];
        const { x, y, width, height } = svg.viewBox.baseVal;
        const blob = new Blob([svg.outerHTML], { type: 'image/svg+xml' });
        const url = URL.createObjectURL(blob);
        const image = document.createElement('img');
        image.src = url;
        image.addEventListener('load', () => {
            const canvas = document.createElement('canvas');
            canvas.width = width;
            canvas.height = height;
            const context = canvas.getContext('2d');
            context.drawImage(image, x, y, width, height);
            const link = document.getElementById('qr-code-btn');
            link.href = canvas.toDataURL();
            URL.revokeObjectURL(url);
        });
    </script>
    @routes
    <script src="{{ env('APP_URL') }}{{ mix('assets/js/custom/helpers.js') }}"></script>
    <script src="{{ env('APP_URL') }}{{ mix('assets/js/custom/custom.js') }}"></script>
    <script src="{{ env('APP_URL') }}{{ mix('assets/js/vcards/vcard-view.js') }}"></script>

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
    
</body>
</html>