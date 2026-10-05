<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <!--Viewport-->
    <meta charset="UTF-8"><meta name="HandheldFriendly" content="True"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!--Canonical-->
    <link rel="home" href="<?php echo e(env('APP_URL')); ?>">
    <link rel="canonical" href="<?php echo e(url()->current()); ?>">
    <link rel="alternate" type="application/rss+xml" title="<?php echo e(env('APP_NAME')); ?>" href="<?php echo e(env('APP_URL')); ?>/rss.xml">
    <link rel="shortcut icon" href="<?php echo e($vcard->profile_url); ?>" type="image/x-icon">
    <!--Robots-->
    <meta name="robots" content="all, index, follow, max-image-preview:large"><meta name="googlebot-news" content="all, index, follow, max-image-preview:large">
    <!-- Title -->
    <?php if(checkFeature('seo')): ?>
        <?php if($vcard->home_title && $vcard->site_title): ?>
        <title><?php echo e($vcard->home_title); ?> - <?php echo e($vcard->site_title); ?></title>
        <?php elseif($vcard->home_title): ?>
        <title><?php echo e($vcard->home_title); ?> - <?php echo e($vcard->occupation); ?></title>
        <?php elseif($vcard->site_title): ?>
        <title><?php echo e($vcard->name); ?> - <?php echo e($vcard->site_title); ?></title>
        <?php else: ?>
        <title><?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?></title>
        <?php endif; ?>
    <?php else: ?>
    <title><?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?></title>
    <?php endif; ?>
    <!--Desc Key-->
    <?php if(checkFeature('seo')): ?>
        <?php if($vcard->meta_description && $vcard->meta_keyword): ?>
        <meta name="description" content="<?php echo e($vcard->meta_description); ?>">
        <meta name="keywords" content="<?php echo e($vcard->meta_keyword); ?>">
        <?php elseif($vcard->meta_description): ?>
        <meta name="description" content="<?php echo e($vcard->meta_description); ?>">
        <meta name="keywords" content="Kartunama Pro, Kartu Nama Digital, <?php echo e($vcard->name); ?>, Kartu Nama <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>, Link Bio <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>, Bio Link <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>">
        <?php elseif($vcard->meta_keyword): ?>
        <meta name="description" content="<?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?>">
        <meta name="keywords" content="<?php echo e($vcard->meta_keyword); ?>">
        <?php else: ?>
        <meta name="description" content="<?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?>">
        <meta name="keywords" content="Kartunama Pro, Kartu Nama Digital, <?php echo e($vcard->name); ?>, Kartu Nama <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>, Link Bio <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>, Bio Link <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>">
        <?php endif; ?>
    <?php else: ?>
    <meta name="description" content="<?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?>">
    <meta name="keywords" content="Kartunama Pro, Kartu Nama Digital, <?php echo e($vcard->name); ?>, Kartu Nama <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>, Link Bio <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>, Bio Link <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>">
    <?php endif; ?>
    <!--Author-->
    <meta name="publisher" content="<?php echo e(env('APP_NAME')); ?>">
    <meta name="author" content="<?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>">
    <meta name="publisher" content="<?php if($vcard->company): ?> <?php echo e($vcard->company); ?> <?php else: ?> <?php echo e(env('APP_COMPANY')); ?> <?php endif; ?>">
    <!--Location-->
    <link rel="alternate" href="<?php echo e(url()->current()); ?>" hreflang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <link rel="alternate" href="<?php echo e(url()->current()); ?>" hreflang="x-default">
    <meta content="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" name="geo.region">
    <meta content="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" name="geo.country">
    <meta content="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" name="geo.placename">
    <meta content="x;x" name="geo.position">
    <meta content="x,x" name="ICBM">
    <!-- OG -->
    <meta property="og:site_name" content="<?php echo e(env('APP_NAME')); ?>">
    <meta property="og:title" content="<?php if(checkFeature('seo')): ?> <?php if($vcard->home_title && $vcard->site_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->site_title); ?> <?php elseif($vcard->home_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->occupation); ?> <?php elseif($vcard->site_title): ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->site_title); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?>">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    <meta property="og:description" content="<?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php endif; ?> <?php else: ?> <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php endif; ?>">
    <meta property="og:headline" content="<?php if(checkFeature('seo')): ?> <?php if($vcard->home_title && $vcard->site_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->site_title); ?> <?php elseif($vcard->home_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->occupation); ?> <?php elseif($vcard->site_title): ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->site_title); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?>">
    <meta property="og:image:alt" content="<?php if(checkFeature('seo')): ?> <?php if($vcard->home_title && $vcard->site_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->site_title); ?> <?php elseif($vcard->home_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->occupation); ?> <?php elseif($vcard->site_title): ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->site_title); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?>">
    <meta property="fb:pages" content="103417799098875"> 
    <meta property="fb:profile_id" content="103417799098875">
    <meta property="article:author" content="<?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>">
    <meta property="og:image" content="<?php echo e($vcard->profile_url); ?>">
    <meta property="og:locale" content="id_ID">
    <meta property="og:locale:alternate" content="en_US">
    <meta property="fb:app_id" content="1411872802675627">
    <meta property="pinterest-rich-pin" content="true">
    <meta property="article:author" content="<?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>">
    <meta property="og:rich_attachment" content="true">
    <meta name="og:image:width" content="1200">
    <meta name="og:image:height" content="auto">
    <meta name="twitter:title" content="<?php if(checkFeature('seo')): ?> <?php if($vcard->home_title && $vcard->site_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->site_title); ?> <?php elseif($vcard->home_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->occupation); ?> <?php elseif($vcard->site_title): ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->site_title); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?>">
    <meta name="twitter:url" content="<?php echo e(url()->current()); ?>">
    <meta name="twitter:description" content="<?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php endif; ?> <?php else: ?> <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php endif; ?>">
    <meta name="twitter:site" content="<?php echo e(env('APP_URL')); ?>">
    <meta name="twitter:image" content="<?php echo e($vcard->profile_url); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <!-- Webapp -->
    <link rel="manifest" href="<?php echo e(env('APP_URL')); ?>/manifest.json">
    <meta name="msapplication-starturl" content="<?php echo e(env('APP_URL')); ?>">
    <meta name="start_url" content="/">
    <meta name="application-name" content="<?php echo e(env('APP_NAME')); ?>">
    <meta name="apple-mobile-web-app-title" content="<?php echo e(env('APP_NAME')); ?>">
    <meta name="msapplication-tooltip" content="<?php echo e(env('APP_NAME')); ?>">
    <meta name="theme-color" content="#203556">
    <meta name="background_color" content="#FFFFFF">
    <meta name="msapplication-navbutton-color" content="#203556">
    <meta name="msapplication-TileColor" content="#203556">
    <meta name="apple-mobile-web-app-status-bar-style" content="#203556">
    <meta name="mssmarttagspreventparsing" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="msapplication-TileImage" content="<?php echo e(env('APP_URL')); ?>/assets/img/logo/kartunama-144.png">
    <link rel="apple-touch-icon" href="<?php echo e(env('APP_URL')); ?>/assets/img/logo/apple-icon.png">
    <!--Resource-->
    <link href="//fonts.gstatic.com" rel="preconnect dns-prefetch" crossorigin><link href="//ajax.googleapis.com" rel="dns-prefetch"><link href="//fonts.googleapis.com" rel="preconnect dns-prefetch"><link href="//www.google-analytics.com" rel="dns-prefetch"><link href="//www.googletagservices.com" rel="dns-prefetch"><link href="//partner.googleadservices.com" rel="dns-prefetch"><link href="//www.google.com" rel="preconnect dns-prefetch"><link href="//www.youtube.com" rel="preconnect dns-prefetch"><link href="//www.recaptcha.net" rel="preconnect dns-prefetch"><link href="//www.gstatic.com" rel="preconnect dns-prefetch"><link href="//www.googletagmanager.com" rel="preconnect dns-prefetch"><link href="//ajax.cloudflare.com" rel="preconnect dns-prefetch"><link href="//cdn.jsdelivr.net" rel="preconnect dns-prefetch"><link href="//connect.facebook.net" rel="preconnect dns-prefetch"><link href="//pagead2.googlesyndication.com" rel="preconnect dns-prefetch"><link href="//googleads.g.doubleclick.net" rel="preconnect dns-prefetch"><link href="//ad.doubleclick.net" rel="preconnect dns-prefetch"><link href="//static.doubleclick.net" rel="preconnect dns-prefetch"><link href="//tpc.googlesyndication.com" rel="preconnect dns-prefetch"><link href="//adservice.google.com" rel="preconnect dns-prefetch">

    <!-- Bootstrap CSS -->
    <link href="<?php echo e(asset('front/css/bootstrap.min.css')); ?>" rel="stylesheet">

    
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vcard8.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom-vcard.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/slider/css/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/slider/css/slick-theme.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/third-party.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/plugins.css')); ?>">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Roboto&display=swap" rel="stylesheet">

    <?php if(checkFeature('custom-fonts') && $vcard->font_family): ?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=<?php echo e($vcard->font_family); ?>">
    <?php endif; ?>

    <?php if($vcard->font_family || $vcard->font_size || $vcard->custom_css): ?>
    <style>
        <?php if(checkFeature('custom-fonts')): ?>
        <?php if($vcard->font_family): ?>
        body {
            font-family: <?php echo e($vcard->font_family); ?>;
        }
        <?php endif; ?>
        <?php if($vcard->font_size): ?>
        div > h4 {
            font-size: <?php echo e($vcard->font_size); ?>px !important;
        }
        <?php endif; ?>
        <?php endif; ?>
        <?php if(isset(checkFeature('advanced')->custom_css)): ?>
        <?php echo $vcard->custom_css; ?>

        <?php endif; ?>
    </style>
    <?php endif; ?>

<!--Adblock-->
<style>
/*Adblock*/
@keyframes  fadeInDown{0%{opacity:0;transform:translateY(-20px);}100%{opacity:1;transform:translateY(0);}} @keyframes  rubberBand{from{transform:scale3d(1,1,1)}30%{transform:scale3d(1.25,0.75,1);}40%{transform:scale3d(0.75,1.25,1)}50%{transform:scale3d(1.15,0.85,1)}65%{transform:scale3d(.95,1.05,1)}75%{transform:scale3d(1.05,.95,1)}to{transform:scale3d(1,1,1);}} #seosecretidnadblock{background:rgba(0,0,0,0.65);position:fixed;margin:auto;left:0;right:0;top:0;bottom:0;overflow:auto;z-index:999999;animation:fadeInDown 1s;} #seosecretidnadblock .header{margin:0 0 15px 0;} #seosecretidnadblock .inner{background:#CC3333;color:#F5F5F5;box-shadow:0 5px 20px rgba(0,0,0,0.1);text-align:center;width:600px;padding:30px;border-radius:5px;margin:7% auto 2% auto;animation:rubberBand 2s;} #seosecretidnadblock button{padding:10px 20px;border:0;background:rgba(0,0,0,0.15);color:#F5F5F5;margin:10px 5px;cursor:pointer;transition:all .3s;} #seosecretidnadblock button:hover{background:rgba(0,0,0,0.35);color:#fff;outline:none;} #seosecretidnadblock button.active,#arlinablock button:hover.active{background:#F5F5F5;color:#333333;outline:none;} #seosecretidnadblock .fixblock{background:#FFFFFF;text-align:left;color:#333333;padding:10px 0px;height:300px;overflow:auto;line-height:30px;} #seosecretidnadblock .fixblock div{display:none;} #seosecretidnadblock .fixblock div.active{display:block;} #seosecretidnadblock ol{margin-left:0px;} @media(max-width:768px){#seosecretidnadblock .inner{width:calc(100% - 30px);margin:10px auto;padding:15px;}}
/*Indicator Load*/
.progress-container{width:100%;position:fixed;top:0;left:0;z-index:9999;}.progress-bar{height:2px;background:#203556;width:0%;}
/*Scroll Bar*/
html{scrollbar-width:thin;}html::-webkit-scrollbar{width:5px;background-color:#F5F5F5;}html::-webkit-scrollbar-thumb{background-color:#203556;border-radius:0px;}.element{scrollbar-width:thin;}.element::-webkit-scrollbar{width:5px;background-color:#F5F5F5;}.element::-webkit-scrollbar-thumb{background-color:#203556;border-radius:0px;}
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
{"@context":"https://schema.org","@type":"WebSite","@id":"#WebSite","name":"<?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_TAGLINE')); ?>","alternateName":"<?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_TAGLINE')); ?> - <?php echo e(env('APP_BRAND')); ?>","headline":"<?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_TAGLINE')); ?>","url":"<?php echo e(env('APP_URL')); ?>","description":"<?php echo e(env('GLOBAL_DESC')); ?>","disambiguatingDescription":"<?php echo e(env('GLOBAL_DESC')); ?> - <?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_TAGLINE')); ?> - <?php echo e(env('APP_BRAND')); ?>","keywords":["Kartu nama","Bio link","vCard indonesia","Kartu nama digital","Pembuat vCard","Bio link terbaik","Kartu nama bisnis","Bio link bisnis","Kartu nama online","Web kartu nama"],"genre":["vCards","Marketing","Business","Website","Software","Tool"],"image":{"@type":"ImageObject","@id":"#ImageWebSite","inLanguage":"id-ID","url":"<?php echo e(env('APP_URL')); ?>/assets/img/kartunama/kartunamapro.png","caption":"<?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_TAGLINE')); ?>"},"inLanguage":"id-ID","sameAs":["https://facebook.com/kartunamaxd","https://twitter.com/401xdgroup","https://instagram.com/kartunamaxd","https://linkedin.com/company/401xdgroup","https://pinterest.com/401xdgroup","https://youtube.com/c/mycodingxd"],"potentialAction":{"@type":"SearchAction","target":"<?php echo e(env('APP_URL')); ?>/?q={query}","query-input":"required name=query"},"publisher":{"@id":"#Organization"},"sponsor":{"@id":"#Corporation"}}
</script>
<!--Organization-->
<script type="application/ld+json">
{"@context":"https://schema.org/","@type":"Organization","@id":"#Organization","url":"<?php echo e(env('APP_URL')); ?>","name":"<?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_TAGLINE')); ?>","description":"<?php echo e(env('GLOBAL_DESC')); ?>","sameAs":["https://facebook.com/kartunamaxd","https://twitter.com/401xdgroup","https://instagram.com/kartunamaxd","https://linkedin.com/company/401xdgroup","https://pinterest.com/401xdgroup","https://youtube.com/c/mycodingxd"],"logo":{"@type":"ImageObject","@id":"#LogoOrganization","inLanguage":"id-ID","url":"<?php echo e(env('APP_URL')); ?>/assets/img/kartunama/logo.png","caption":"<?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_TAGLINE')); ?>"},"image":{"@type":"ImageObject","@id":"#ImageWebSite","inLanguage":"id-ID","url":"<?php echo e(env('APP_URL')); ?>/assets/img/kartunama/kartunamapro.png","caption":"<?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_TAGLINE')); ?>"},"address":{"@type":"PostalAddress","@id":"#PostalAddressOrganization","streetAddress":"<?php echo e(env('APP_COMPANY')); ?>, Jl. Sumbawa, Ulak Karang Utara, Kec. Padang Utara","addressLocality":"Kota Padang","addressRegion":"Sumatera Barat","postalCode":"25133","addressCountry":"Indonesia"},"founder":{"@type":"Person","name":"Adi Gunawan","honorificSuffix":"S.Kom., M.Kom.","jobTitle":"Owner","url":"https://adigunawan.id/","sameAs":["https://orcid.org/0000-0002-5954-8068","https://www.researchgate.net/profile/Adi-Gunawan-3","https://scholar.google.com/citations?user=mDVQUgQAAAAJ","https://independent.academia.edu/AdiGunawanXD","https://www.facebook.com/AdigunawanXD","https://www.instagram.com/AdiGunawanXD"]},"aggregateRating":{"@type":"AggregateRating","ratingValue":"4.9","reviewCount":"1<?php echo e(date('d')); ?>"},"review":{"@type":"Review","@id":"#ReviewOrganization","name":"Ulasan <?php echo e(env('APP_NAME')); ?>","author":{"@type":"Person","name":"Adi Gunawan","honorificSuffix":"S.Kom., M.Kom.","url":"https://adigunawan.id/","sameAs":["https://orcid.org/0000-0002-5954-8068","https://www.researchgate.net/profile/Adi-Gunawan-3","https://scholar.google.com/citations?user=mDVQUgQAAAAJ","https://independent.academia.edu/AdiGunawanXD","https://www.facebook.com/AdigunawanXD","https://www.instagram.com/AdiGunawanXD"]},"description":"Platform pembuat halaman web kartu nama digital vCard premium dan bio link profesional","reviewRating":{"@type":"Rating","ratingValue":"4.9","worstRating":"1","bestRating":"5"}}}
</script>
<!--Corporation-->
<script type="application/ld+json">
{"@context":"https://schema.org/","@type":"Corporation","@id":"#Corporation","url":"https://401xd.com","name":"<?php echo e(env('APP_COMPANY')); ?>","alternateName":"<?php echo e(env('APP_COMPANY')); ?> Indonesia","description":"<?php echo e(env('APP_COMPANY')); ?> adalah perusahaan yang memiliki spesialisasi dalam bidang teknologi, pengembangan software, kecerdasan buatan, internet, portal media online, digital marketing, teknologi finansial dan e-commerce di Indonesia.","disambiguatingDescription":"<?php echo e(env('APP_COMPANY')); ?> adalah perusahaan yang memiliki spesialisasi dalam bidang teknologi, pengembangan software, kecerdasan buatan, internet, portal media online, digital marketing, teknologi finansial dan e-commerce di Indonesia. Berawal dari sebuah organisasi komunitas pada tahun 2009, <?php echo e(env('APP_COMPANY')); ?> saat ini berdiri sebagai perusahaan yang memiliki 20+ startup penyedia produk, layanan jasa, dan portal media informasi online.","telephone":"+6282377823390","sameAs":["https://g.page/401xd","https://facebook.com/401xd","https://twitter.com/401xdgroup","https://instagram.com/401xdgroup","https://linkedin.com/company/401xdgroup","https://pinterest.com/401xdgroup"],"logo":{"@type":"ImageObject","@id":"#LogoCorporation","inLanguage":"id-ID","url":"<?php echo e(env('APP_URL')); ?>/assets/img/kartunama/401XDGroup.png","caption":"<?php echo e(env('APP_COMPANY')); ?>"},"image":{"@type":"ImageObject","@id":"#ImageCorporation","inLanguage":"id-ID","url":"<?php echo e(env('APP_URL')); ?>/assets/img/kartunama/401XDGroupIndonesia.png","caption":"<?php echo e(env('APP_COMPANY')); ?>"},"address":{"@type":"PostalAddress","@id":"#PostalAddressCorporation","streetAddress":"<?php echo e(env('APP_COMPANY')); ?>, Jl. Sumbawa, Ulak Karang Utara, Kec. Padang Utara","addressLocality":"Kota Padang","addressRegion":"Sumatera Barat","postalCode":"25133","addressCountry":"Indonesia"},"aggregateRating":{"@type":"AggregateRating","ratingValue":"4.9","reviewCount":"2<?php echo e(date('m')); ?>"},"review":{"@type":"Review","@id":"#ReviewCorporation","name":"Ulasan <?php echo e(env('APP_NAME')); ?>","author":{"@type":"Person","name":"Adi Gunawan","honorificSuffix":"S.Kom., M.Kom.","url":"https://adigunawan.id/","sameAs":["https://orcid.org/0000-0002-5954-8068","https://www.researchgate.net/profile/Adi-Gunawan-3","https://scholar.google.com/citations?user=mDVQUgQAAAAJ","https://independent.academia.edu/AdiGunawanXD","https://www.facebook.com/AdigunawanXD","https://www.instagram.com/AdiGunawanXD"]},"description":"Platform pembuat halaman web kartu nama digital vCard premium dan bio link profesional","reviewRating":{"@type":"Rating","ratingValue":"4.9","worstRating":"1","bestRating":"5"}}}
</script>
<!--WebPage-->
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebPage","@id":"#WebPage","name":"<?php if(checkFeature('seo')): ?> <?php if($vcard->home_title && $vcard->site_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->site_title); ?> <?php elseif($vcard->home_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->occupation); ?> <?php elseif($vcard->site_title): ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->site_title); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?>","alternateName":"<?php if(checkFeature('seo')): ?> <?php if($vcard->home_title && $vcard->site_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->site_title); ?> <?php elseif($vcard->home_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->occupation); ?> <?php elseif($vcard->site_title): ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->site_title); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> - <?php echo e(env('APP_BRAND')); ?>","headline":"<?php if(checkFeature('seo')): ?> <?php if($vcard->home_title && $vcard->site_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->site_title); ?> <?php elseif($vcard->home_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->occupation); ?> <?php elseif($vcard->site_title): ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->site_title); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?>","url":"<?php echo e(url()->current()); ?>","description":"<?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php endif; ?> <?php else: ?> <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php endif; ?>","disambiguatingDescription":"<?php if(checkFeature('seo')): ?> <?php if($vcard->home_title && $vcard->site_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->site_title); ?> <?php elseif($vcard->home_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->occupation); ?> <?php elseif($vcard->site_title): ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->site_title); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?>. <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php endif; ?> <?php else: ?> <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php endif; ?>. <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_keyword): ?> <?php echo e($vcard->meta_keyword); ?> <?php else: ?> Kartunama Pro, Kartu Nama Digital, <?php echo e($vcard->name); ?>, Kartu Nama <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>, Link Bio <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>, Bio Link <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?> <?php endif; ?> <?php else: ?> Kartunama Pro, Kartu Nama Digital, <?php echo e($vcard->name); ?>, Kartu Nama <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>, Link Bio <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>, Bio Link <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?> <?php endif; ?>. <?php echo e(env('GLOBAL_DESC')); ?> - <?php echo e(env('GLOBAL_DESC')); ?> - <?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_TAGLINE')); ?> by <?php echo e(env('APP_COMPANY')); ?>.","keywords":["<?php if(checkFeature('seo')): ?> <?php if($vcard->meta_keyword): ?> <?php echo e($vcard->meta_keyword); ?> <?php else: ?> Kartunama Pro","Kartu Nama Digital","<?php echo e($vcard->name); ?>","Kartu Nama <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>","Link Bio <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>","Bio Link <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?> <?php endif; ?> <?php else: ?> Kartunama Pro","Kartu Nama Digital","<?php echo e($vcard->name); ?>","Kartu Nama <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>","Link Bio <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>","Bio Link <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?> <?php endif; ?>"],"genre":["vCards","Marketing","Business","Website","Software","Tool"],"image":{"@type":"ImageObject","@id":"#Image","inLanguage":"id-ID","url":"<?php echo e($vcard->profile_url); ?>","caption":"<?php if(checkFeature('seo')): ?> <?php if($vcard->home_title && $vcard->site_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->site_title); ?> <?php elseif($vcard->home_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->occupation); ?> <?php elseif($vcard->site_title): ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->site_title); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?>"},"inLanguage":"id-ID","sameAs":["https://facebook.com/kartunamaxd","https://twitter.com/401xdgroup","https://instagram.com/kartunamaxd","https://linkedin.com/company/401xdgroup","https://pinterest.com/401xdgroup","https://youtube.com/c/mycodingxd"],"potentialAction":{"@type":"SearchAction","target":"<?php echo e(env('APP_URL')); ?>/?q={query}","query-input":"required name=query"},"speakable":{"@type":"SpeakableSpecification","xpath":["/html/head/title","/html/head/meta[@name='description']/@content"]},"publisher":{"@id":"#Organization"},"sponsor":{"@id":"#Corporation"},"isPartOf":{"@id":"#WebSite"},"mainEntityOfPage":"false","isFamilyFriendly":"true","author":{"@type":"Person","name":"<?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>","url":"<?php echo e(url()->current()); ?>"},"creator":"<?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>","accountablePerson":{"@type":"Person","name":"Adi Gunawan","honorificSuffix":"S.Kom., M.Kom.","url":"https://adigunawan.id/","sameAs":["https://orcid.org/0000-0002-5954-8068","https://www.researchgate.net/profile/Adi-Gunawan-3","https://scholar.google.com/citations?user=mDVQUgQAAAAJ","https://independent.academia.edu/AdiGunawanXD","https://www.facebook.com/AdigunawanXD","https://www.instagram.com/AdiGunawanXD"]},"copyrightYear":"<?php echo e(date('Y')); ?>","copyrightHolder":{"@id":"#Corporation"}}
</script>
<!--Article-->
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"Article","name":"<?php if(checkFeature('seo')): ?> <?php if($vcard->home_title && $vcard->site_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->site_title); ?> <?php elseif($vcard->home_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->occupation); ?> <?php elseif($vcard->site_title): ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->site_title); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?>","alternateName":"<?php if(checkFeature('seo')): ?> <?php if($vcard->home_title && $vcard->site_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->site_title); ?> <?php elseif($vcard->home_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->occupation); ?> <?php elseif($vcard->site_title): ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->site_title); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> - <?php echo e(env('APP_BRAND')); ?>","headline":"<?php if(checkFeature('seo')): ?> <?php if($vcard->home_title && $vcard->site_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->site_title); ?> <?php elseif($vcard->home_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->occupation); ?> <?php elseif($vcard->site_title): ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->site_title); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?>","url":"<?php echo e(url()->current()); ?>","description":"<?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php endif; ?> <?php else: ?> <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php endif; ?>","disambiguatingDescription":"<?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php endif; ?> <?php else: ?> <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php endif; ?> - <?php echo e(env('APP_BRAND')); ?> <?php echo e(env('APP_COMPANY')); ?>","keywords":["<?php if(checkFeature('seo')): ?> <?php if($vcard->meta_keyword): ?> <?php echo e($vcard->meta_keyword); ?> <?php else: ?> Kartunama Pro","Kartu Nama Digital","<?php echo e($vcard->name); ?>","Kartu Nama <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>","Link Bio <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>","Bio Link <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?> <?php endif; ?> <?php else: ?> Kartunama Pro","Kartu Nama Digital","<?php echo e($vcard->name); ?>","Kartu Nama <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>","Link Bio <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>","Bio Link <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?> <?php endif; ?>"],"genre":["vCards","Marketing","Business","Website","Software","Tool"],"image":{"@type":"ImageObject","@id":"#Image","inLanguage":"id-ID","url":"<?php echo e($vcard->profile_url); ?>","caption":"<?php if(checkFeature('seo')): ?> <?php if($vcard->home_title && $vcard->site_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->site_title); ?> <?php elseif($vcard->home_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->occupation); ?> <?php elseif($vcard->site_title): ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->site_title); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?>"},"inLanguage":"id-ID","sameAs":["https://facebook.com/kartunamaxd","https://twitter.com/401xdgroup","https://instagram.com/kartunamaxd","https://linkedin.com/company/401xdgroup","https://pinterest.com/401xdgroup","https://youtube.com/c/mycodingxd"],"potentialAction":{"@type":"SearchAction","target":"<?php echo e(env('APP_URL')); ?>/?q={query}","query-input":"required name=query"},"speakable":{"@type":"SpeakableSpecification","xpath":["/html/head/title","/html/head/meta[@name='description']/@content"]},"publisher":{"@id":"#Organization"},"sponsor":{"@id":"#Corporation"},"isPartOf":{"@id":"#WebPage"},"mainEntityOfPage":"true","isFamilyFriendly":"true","author":{"@type":"Person","name":"<?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>","url":"<?php echo e(url()->current()); ?>"},"creator":"<?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>","accountablePerson":{"@type":"Person","name":"Adi Gunawan","honorificSuffix":"S.Kom., M.Kom.","url":"https://adigunawan.id/","sameAs":["https://orcid.org/0000-0002-5954-8068","https://www.researchgate.net/profile/Adi-Gunawan-3","https://scholar.google.com/citations?user=mDVQUgQAAAAJ","https://independent.academia.edu/AdiGunawanXD","https://www.facebook.com/AdigunawanXD","https://www.instagram.com/AdiGunawanXD"]},"copyrightYear":"<?php echo e(date('Y')); ?>","copyrightHolder":{"@id":"#Corporation"},"dateCreated":"<?php echo e((new \DateTime($vcard->created_at))->format('Y-m-d\\TH:i:s')); ?>","datePublished":"<?php echo e((new \DateTime($vcard->created_at))->format('Y-m-d\\TH:i:s')); ?>","dateModified":"<?php echo e((new \DateTime($vcard->updated_at))->format('Y-m-d\\TH:i:s')); ?>","articleSection":["vCards","Marketing","Business","Website","Software","Tool"],"articleBody":"<?php if(checkFeature('seo')): ?> <?php if($vcard->home_title && $vcard->site_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->site_title); ?> <?php elseif($vcard->home_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->occupation); ?> <?php elseif($vcard->site_title): ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->site_title); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?>. <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php endif; ?> <?php else: ?> <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php endif; ?>. <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_keyword): ?> <?php echo e($vcard->meta_keyword); ?> <?php else: ?> Kartunama Pro, Kartu Nama Digital, <?php echo e($vcard->name); ?>, Kartu Nama <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>, Link Bio <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>, Bio Link <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?> <?php endif; ?> <?php else: ?> Kartunama Pro, Kartu Nama Digital, <?php echo e($vcard->name); ?>, Kartu Nama <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>, Link Bio <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>, Bio Link <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?> <?php endif; ?>. <?php echo e(env('GLOBAL_DESC')); ?> - <?php echo e(env('GLOBAL_DESC')); ?> - <?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_TAGLINE')); ?> by <?php echo e(env('APP_COMPANY')); ?>."}
</script>
<!--ImageObject-->
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"ImageObject","@id":"#ImageObject","name":"<?php if(checkFeature('seo')): ?> <?php if($vcard->home_title && $vcard->site_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->site_title); ?> <?php elseif($vcard->home_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->occupation); ?> <?php elseif($vcard->site_title): ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->site_title); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?>","alternateName":"<?php if(checkFeature('seo')): ?> <?php if($vcard->home_title && $vcard->site_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->site_title); ?> <?php elseif($vcard->home_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->occupation); ?> <?php elseif($vcard->site_title): ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->site_title); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> - <?php echo e(env('APP_BRAND')); ?>","headline":"<?php if(checkFeature('seo')): ?> <?php if($vcard->home_title && $vcard->site_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->site_title); ?> <?php elseif($vcard->home_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->occupation); ?> <?php elseif($vcard->site_title): ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->site_title); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?>","alternativeHeadline":"<?php if(checkFeature('seo')): ?> <?php if($vcard->home_title && $vcard->site_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->site_title); ?> <?php elseif($vcard->home_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->occupation); ?> <?php elseif($vcard->site_title): ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->site_title); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> - <?php echo e(env('APP_BRAND')); ?>","description":"<?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php endif; ?> <?php else: ?> <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php endif; ?>","disambiguatingDescription":"<?php if(checkFeature('seo')): ?> <?php if($vcard->home_title && $vcard->site_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->site_title); ?> <?php elseif($vcard->home_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->occupation); ?> <?php elseif($vcard->site_title): ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->site_title); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?>. <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php endif; ?> <?php else: ?> <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php endif; ?>. <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_keyword): ?> <?php echo e($vcard->meta_keyword); ?> <?php else: ?> Kartunama Pro, Kartu Nama Digital, <?php echo e($vcard->name); ?>, Kartu Nama <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>, Link Bio <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>, Bio Link <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?> <?php endif; ?> <?php else: ?> Kartunama Pro, Kartu Nama Digital, <?php echo e($vcard->name); ?>, Kartu Nama <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>, Link Bio <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>, Bio Link <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?> <?php endif; ?>. <?php echo e(env('GLOBAL_DESC')); ?> - <?php echo e(env('GLOBAL_DESC')); ?> - <?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_TAGLINE')); ?> by <?php echo e(env('APP_COMPANY')); ?>.","abstract":"<?php if(checkFeature('seo')): ?> <?php if($vcard->home_title && $vcard->site_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->site_title); ?> <?php elseif($vcard->home_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->occupation); ?> <?php elseif($vcard->site_title): ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->site_title); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?>. <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php endif; ?> <?php else: ?> <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_description): ?> <?php echo e($vcard->meta_description); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?>. Bio link kartu nama digital <?php echo e($vcard->name); ?>. Berikut informasi lengkap <?php echo e($vcard->name); ?>, alamat, kontak, sosial media dan website official <?php echo e($vcard->name); ?> di <?php echo e(env('APP_BRAND')); ?>. <?php endif; ?> <?php endif; ?>. <?php if(checkFeature('seo')): ?> <?php if($vcard->meta_keyword): ?> <?php echo e($vcard->meta_keyword); ?> <?php else: ?> Kartunama Pro, Kartu Nama Digital, <?php echo e($vcard->name); ?>, Kartu Nama <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>, Link Bio <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>, Bio Link <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?> <?php endif; ?> <?php else: ?> Kartunama Pro, Kartu Nama Digital, <?php echo e($vcard->name); ?>, Kartu Nama <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>, Link Bio <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>, Bio Link <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?> <?php endif; ?>. <?php echo e(env('GLOBAL_DESC')); ?> - <?php echo e(env('GLOBAL_DESC')); ?> - <?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_TAGLINE')); ?> by <?php echo e(env('APP_COMPANY')); ?>.","keywords":["<?php if(checkFeature('seo')): ?> <?php if($vcard->meta_keyword): ?> <?php echo e($vcard->meta_keyword); ?> <?php else: ?> Kartunama Pro","Kartu Nama Digital","<?php echo e($vcard->name); ?>","Kartu Nama <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>","Link Bio <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>","Bio Link <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?> <?php endif; ?> <?php else: ?> Kartunama Pro","Kartu Nama Digital","<?php echo e($vcard->name); ?>","Kartu Nama <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>","Link Bio <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>","Bio Link <?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?> <?php endif; ?>"],"genre":["vCards","Marketing","Business","Website","Software","Tool"],"caption":"<?php if(checkFeature('seo')): ?> <?php if($vcard->home_title && $vcard->site_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->site_title); ?> <?php elseif($vcard->home_title): ?> <?php echo e($vcard->home_title); ?> - <?php echo e($vcard->occupation); ?> <?php elseif($vcard->site_title): ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->site_title); ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?> <?php else: ?> <?php echo e($vcard->name); ?> - <?php echo e($vcard->occupation); ?> <?php endif; ?>","contentUrl":"<?php echo e($vcard->profile_url); ?>","inLanguage":"id-ID","license":"https://mycoding.id/terms-conditions","acquireLicensePage":"<?php echo e(url()->current()); ?>","creditText":"<?php echo e(env('APP_NAME')); ?>","creator":{"@type":"Person","name":"<?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?>","url":"<?php echo e(url()->current()); ?>"},"copyrightNotice":"<?php echo e(env('APP_NAME')); ?>","isBasedOnUrl":"<?php echo e(url()->current()); ?>"}
</script>
</head>
<body>
    <div class="container">
        <?php echo $__env->make('vcards.password', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="vcard-eight main-content w-100 mx-auto overflow-hidden content-blur collapse show allSection">

            
            <div class="vcard-eight__banner w-100 position-relative">
                <img data-sizes="auto" data-src="<?php echo e($vcard->cover_url); ?>" class="lazyload img-fluid banner-image position-relative" alt="Banner <?php echo e(env('APP_NAME')); ?>"/>
                <div class="d-flex justify-content-end position-absolute top-0 end-0 me-3 custom-language">
                    <?php if($vcard->language_enable == \App\Models\Vcard::LANGUAGE_ENABLE): ?>
                    <div class="language pt-4 me-2">
                        <ul class="text-decoration-none">
                            <li class="dropdown1 dropdown lang-list">
                                <a class="dropdown-toggle lang-head text-decoration-none" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-solid fa-language me-2"></i><?php echo e(getLanguage($vcard->default_language)); ?>

                                </a>
                                <ul class="dropdown-menu start-0 lang-hover-list top-dropdown top-100">
                                    <?php $__currentLoopData = getAllLanguage(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="<?php echo e(getLanguageIsoCode($vcard->default_language) === $key ? 'active' : ''); ?>">
                                        <a href="javascript:void(0)" id="languageName" data-name="<?php echo e($key); ?>"><?php echo e($language); ?></a>
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <?php endif; ?>

                </div>
            </div>

            
            <div class="vcard-eight__profile d-flex align-items-center flex-sm-row flex-column position-relative px-4">
                <div class="vcard-eight__avatar">
                    <img data-sizes="auto" data-src="<?php echo e($vcard->profile_url); ?>" class="lazyload rounded-circle"/>
                </div>
                <div class="vcard-eight__position d-flex flex-column mx-4 position-relative">
                    <div class="d-flex flex-column">
                        <h4 class="vcard-eight-heading fw-bold text-sm-start text-center"><?php echo e(ucwords($vcard->first_name.' '.$vcard->last_name)); ?></h4>
                        <span class="avatar-designation text-light text-sm-start text-center"><?php echo e(ucwords($vcard->occupation)); ?></span>
                    </div>
                </div>
            </div>
            
            
            <div class="vcard-eight__social position-relative py-3 px-2">
                <?php if(checkFeature('social_links') && getSocialLink($vcard)): ?>
                <div class="social-icons d-flex justify-content-center pt-4 flex-wrap">
                    <?php $__currentLoopData = getSocialLink($vcard); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <span class="social-back rounded-circle d-flex justify-content-center align-items-center m-sm-2 m-1">
                        <?php echo $value; ?>

                    </span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php endif; ?>
            </div>

            
            <?php if($vcard->description): ?>
            <div class="container text-white text-center py-5 px-5" style="border-radius:25px;font-size:15px;">
                <?php echo e($vcard->description); ?>

            </div>
            <?php endif; ?>

            
            <?php if($vcard->email || $vcard->phone || $vcard->dob || $vcard->location): ?>
            <div class="vcard-eight__event position-relative py-3 px-3">
                <div class="px-3">
                    <div class="col-12">
                        <div class="card event-card p-4">
                            <div class="row g-4">
                                <?php if($vcard->email): ?>
                                <div class="col-sm-6 col-12">
                                    <div class="event-icon rounded-circle d-flex justify-content-center align-items-center mx-auto mb-2">
                                        <img data-sizes="auto" data-src="<?php echo e(asset('assets/img/vcard8/vcard8-email.png')); ?>" alt="eMail" class="lazyload"/>
                                    </div>
                                    <div class="event-details">
                                        <span class="text-light text-center d-block mb-1"><?php echo e(__('messages.vcard.email_address')); ?></span>
                                        <h5 class="text-center mb-0 text-light"><a href="mailto:<?php echo e($vcard->email); ?>" class="text-light text-decoration-none"><?php echo e($vcard->email); ?></a>
                                        </h5>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($vcard->phone): ?>
                                <div class="col-sm-6 col-12">
                                    <div class="event-icon rounded-circle d-flex justify-content-center align-items-center mx-auto mb-2">
                                        <img data-sizes="auto" data-src="<?php echo e(asset('assets/img/vcard8/vcard8-phone.png')); ?>" alt="mobile" class="lazyload"/>
                                    </div>
                                    <div class="event-details">
                                        <span class="text-light text-center d-block mb-1"><?php echo e(__('messages.vcard.mobile_number')); ?></span>
                                        <h5 class="text-center mb-0 text-light"><a href="tel:<?php echo e($vcard->phone); ?>"
                                           class="text-light text-decoration-none">+<?php echo e($vcard->region_code); ?> <?php echo e($vcard->phone); ?></a>
                                       </h5>
                                   </div>
                               </div>
                                <?php endif; ?>
                                <?php if($vcard->dob): ?>
                                <div class="col-sm-6 col-12">
                                    <div class="event-icon rounded-circle d-flex justify-content-center align-items-center mx-auto mb-2">
                                        <img data-sizes="auto" data-src="<?php echo e(asset('assets/img/vcard8/vcard8-birthday.png')); ?>" alt="birthday" class="lazyload"/>
                                    </div>
                                    <div class="event-details">
                                        <span class="text-light text-center d-block mb-1"><?php echo e(__('messages.vcard.dob')); ?></span>
                                        <h5 class="text-center mb-0 text-light"><?php echo e(\Carbon\Carbon::parse($vcard->dob)->format('dS F, Y')); ?></h5>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <?php if($vcard->location): ?>
                                <div class="col-sm-6 col-12">
                                    <div class="event-icon rounded-circle d-flex justify-content-center align-items-center mx-auto mb-2">
                                        <img data-sizes="auto" data-src="<?php echo e(asset('assets/img/vcard8/vcard8-location.png')); ?>" alt="location" class="lazyload"/>
                                    </div>
                                    <div class="event-details">
                                        <span class="text-light text-center d-block mb-1"><?php echo e(__('messages.vcard.location')); ?></span>
                                        <h5 class="text-center mb-0 text-light"><?php echo ucwords($vcard->location); ?></h5>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            
            <?php if(checkFeature('appointments') && $vcard->appointmentHours->count()): ?>
            <div class="vcard-eight__appointment position-relative py-4 px-3">
                <div class="px-3">
                    <h4 class="vcard-eight-heading heading-line text-center pb-4 text-light position-relative d-block mx-auto pt-4 pb-3 mb-6">
                    <?php echo e(__('messages.make_appointments')); ?></h4>
                    <div class="appointment p-4">
                        <div class="row d-flex align-items-center justify-content-center mb-3">
                            <div class="col-md-2">
                                <label for="date" class="appoint-date mb-2"><?php echo e(__('messages.date')); ?></label>
                            </div>
                            <div class="col-md-10">
                                <?php echo e(Form::text('date', null, ['class' => 'date appoint-input', 'placeholder' => __('messages.form.pick_date'),'id'=>'pickUpDate'])); ?>

                            </div>
                        </div>
                        <div class="row d-flex align-items-center justify-content-center mb-md-3">
                            <div class="col-md-2">
                                <label for="text" class="appoint-date mb-2"><?php echo e(__('messages.hour')); ?></label>
                            </div>
                            <div class="col-md-10">
                                <div id="slotData" class="row">
                                </div>
                            </div>
                        </div>
                        <button type="button" class="appointmentAdd appoint-btn text-light mt-3 d-block mx-auto "><?php echo e(__('messages.make_appointments')); ?>

                        </button>
                    </div>
                </div>
            </div>
            <?php echo $__env->make('vcardTemplates.appointment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            
            <?php if(checkFeature('products') && $vcard->products->count()): ?>
            <div class="vcard-eight__product position-relative py-4 px-3">
                <h4 class="vcard-eight-heading heading-line position-relative text-center d-block mx-auto pt-4 pb-3">
                <?php echo e(__('messages.plan.products')); ?></h4>
                <div class="row g-3 product-slider mt-2">
                    <?php $__currentLoopData = $vcard->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-6 h-100">
                        <div class="card product-card p-3 border-0 w-100 card-height h-100">
                            <div class="product-profile">
                                <img data-sizes="auto" data-src="<?php echo e($product->product_icon); ?>" alt="Profile <?php echo e(env('APP_NAME')); ?>" class="lazyload w-100" height="208px"/>
                            </div>
                            <div class="product-details mt-3">
                                <h4 class="text-light"><?php echo e($product->name); ?></h4>
                                <p class="mb-2 text-light">
                                    <?php echo e($product->description); ?>

                                </p>
                                <?php if($product->currency_id && $product->price): ?>
                                <span
                                class="text-light"><?php echo e($product->currency->currency_icon); ?><?php echo e($product->price); ?></span>
                                <?php elseif($product->price): ?>
                                <span class="text-light"><?php echo e($product->price); ?></span>
                                <?php else: ?>
                                <span class="text-light">N/A</span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <?php endif; ?>

            
            <?php if(checkFeature('services') && $vcard->services->count()): ?>
            <div class="vcard-eight__service position-relative py-4 px-3">
                <div class="container">
                    <h4 class="vcard-eight-heading heading-line position-relative text-center d-block mx-auto pt-4 pb-3 mb-6"><?php echo e(__('messages.vcard.our_service')); ?></h4>
                    <div class="row mt-3 service-bg bg-white d-flex justify-content-center">
                        <?php $__currentLoopData = $vcard->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-6 col-12 p-3">
                            <div class="card service-card px-3 py-0 h-100 border-0">
                                <div class="service-image d-flex justify-content-center align-items-center rounded-circle mx-auto">
                                    <img data-sizes="auto" data-src="<?php echo e($service->service_icon); ?>" class="lazyload rounded-circle"
                                    alt="<?php echo e($service->name); ?>"/>
                                </div>
                                <div class="service-details mt-3">
                                    <h4 class="service-title text-center"><?php echo e(ucwords($service->name)); ?></h4>
                                    <p class="service-paragraph mb-0 text-center">
                                        <?php echo $service->description; ?>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            
            <?php if(checkFeature('gallery') && $vcard->gallery->count()): ?>
            <div class="vcard-eight__gallery position-relative py-4 px-3">
                <h4 class="vcard-eight-heading heading-line position-relative text-center d-block mx-auto pt-4 pb-3"><?php echo e(__('messages.plan.gallery')); ?></h4>
                <div class="row g-3 gallery-slider mt-2">
                    <?php $__currentLoopData = $vcard->gallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-6">
                        <div class="card gallery-card p-3 border-0 w-100">
                            <div class="gallery-profile">
                                <?php if($file->link == null): ?>
                                <img data-sizes="auto" data-src="<?php echo e($file->gallery_image); ?>" alt="Profile <?php echo e(env('APP_NAME')); ?>" class="lazyload w-100"/>
                                <?php else: ?>
                                <a id="video_url" data-id="https://www.youtube.com/embed/<?php echo e(YoutubeID($file->link)); ?>" data-bs-toggle="modal" data-bs-target="#exampleModal" class="gallery-link" tabindex="0">
                                    <div class="gallery-item" style="background-image: url(<?php echo e(asset('assets/img/video-thumbnail.png')); ?>)">
                                    </div>
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <iframe id="video" src="//www.youtube.com/embed/<?php echo e(YoutubeID($file->link)); ?>" class="w-100" height="315">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            
            <?php if(checkFeature('blog') && $vcard->blogs->count()): ?>
            <div class="vcard-eight__blog position-relative py-4">
                <h4 class="vcard-eight-heading heading-line position-relative text-center d-block mx-auto pt-4 pb-3">
                <?php echo e(__('messages.feature.blog')); ?></h4>
                <div class="container">
                    <div class="row g-4 blog-slider overflow-hidden">
                        <?php $__currentLoopData = $vcard->blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-6 mb-2">
                            <div class="card blog-card p-4 border-0 w-100 h-100">
                                <div class="blog-image">
                                    <a href="<?php echo e(route('vcard.show-blog',[$vcard->url_alias,$blog->id])); ?>">
                                        <img data-sizes="auto" data-src="<?php echo e($blog->blog_icon); ?>" alt="Profile <?php echo e(env('APP_NAME')); ?>" class="lazyload w-100"/>
                                    </a>
                                </div>
                                <div class="blog-details">
                                    <a href="<?php echo e(route('vcard.show-blog',[$vcard->url_alias,$blog->id])); ?>" class="text-decoration-none">
                                        <h4 class="text-sm-start text-center title-color p-3 mb-0 text-light"><?php echo e($blog->title); ?></h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            
            <?php if(checkFeature('testimonials') && $vcard->testimonials->count()): ?>
            <div class="vcard-eight__testimonial position-relative py-4 px-3">
                <h4 class="vcard-eight-heading heading-line position-relative text-center d-block mx-auto pt-4 pb-3">
                <?php echo e(__('messages.plan.testimonials')); ?></h4>
                <div class="row g-3 testimonial-slider testimonial-next-prev mt-2">
                    <?php $__currentLoopData = $vcard->testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-12 h-100">
                        <div class="card testimonial-card p-4 border-0 w-100 h-100">
                            <div class="testimonial-user d-flex flex-column align-items-center justify-content-sm-start justify-content-center">
                                <img data-sizes="auto" data-src="<?php echo e($testimonial->image_url); ?>" alt="Profile <?php echo e(env('APP_NAME')); ?>"
                                class="lazyload rounded-circle"/>
                                <div class="user-details d-flex flex-column mt-2">
                                    <span class="user-name text-center"><?php echo e(ucwords($testimonial->name)); ?></span>
                                    <span class="user-designation text-center"></span>
                                </div>
                            </div>
                            <p class="review-message text-center mt-2 mx-auto h-100">
                                <?php echo $testimonial->description; ?>

                            </p>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <?php endif; ?>

            
            <div class="vcard-eight__qr-code position-relative py-4 px-3">
                <h4 class="vcard-eight-heading heading-line position-relative text-center d-block mx-auto pt-4 pb-3"><?php echo e(__('messages.vcard.qr_code')); ?></h4>
                <div class="card qr-code-card justify-content-center align-items-center px-sm-3 px-4 pt-8 pb-4 position-relative w-100 mx-auto">
                    <div class="qr-profile mb-3 d-flex justify-content-center position-absolute top-0">
                        <img data-sizes="auto" data-src="<?php echo e($vcard->profile_Url); ?>" alt="QR <?php echo e(env('APP_NAME')); ?>" class="lazyload rounded-circle"/>
                    </div>
                    <div class="mt-3 qr-code-scanner mx-md-4 mx-2 pb-2 bg-white">
                        <?php echo QrCode::size(130)->format('svg')->generate(Request::url()); ?>

                    </div>
                    <div class="mx-2 mt-3">
                        <a class="qr-code-btn text-light mt-4 mb-4 mx-auto text-decoration-none" id="qr-code-btn" href="data:image/svg;base64,<?php echo e(base64_encode(QrCode::size(300)->format('svg')->generate(Request::url()))); ?>" download="qr_code.svg"><?php echo e(__('messages.vcard.download_my_qr_code')); ?>

                        </a>
                    </div>
                </div>
            </div>

            
            <?php if($vcard->businessHours->count()): ?>
            <div class="vcard-eight__timing position-relative py-4 px-3">
                <div class="container">
                    <h4 class="vcard-eight-heading heading-line position-relative text-center d-block mx-auto pt-4 pb-3 mb-6">
                    <?php echo e(__('messages.business.business_hours')); ?></h4>
                    <div class="row mt-3 d-flex justify-content-center">
                        <div class="col-sm-8 time-section px-3 py-1">
                            <?php $__currentLoopData = $vcard->businessHours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="d-flex justify-content-center time-zone">
                                <span class="text-center me-2"><?php echo e(strtoupper(__('messages.business.'.\App\Models\BusinessHour::DAY_OF_WEEK[$day->day_of_week]))); ?> :</span>
                                <span><?php echo e($day->start_time.' - '.$day->end_time); ?></span>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            
            <div class="vcard-eight__contact position-relative py-4 px-3">
                <?php $currentSubs = $vcard->subscriptions()->where('status', \App\Models\Subscription::ACTIVE)->latest()->first() ?>
                <?php if($currentSubs && $currentSubs->plan->planFeature->enquiry_form): ?>
                <h4 class="vcard-eight-heading heading-line position-relative text-center d-block mx-auto pt-4 pb-3"><?php echo e(__('messages.contact_us.contact_us')); ?></h4>
                <div class="px-3">
                    <div class="row mt-4">
                        <div class="col-12 px-0">
                            <form id="enquiryForm">
                                <?php echo csrf_field(); ?>
                                <div class="contact-form px-sm-3">
                                    <div id="enquiryError" class="alert alert-danger d-none"></div>
                                    <div class="mb-3">
                                        <label class="form-label"><?php echo e(__('messages.user.your_name')); ?></label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="name" id="name"
                                            class="form-control border-start-0"
                                            placeholder="<?php echo e(__('messages.form.your_name')); ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"><?php echo e(__('messages.user.email')); ?></label>
                                        <div class="input-group mb-3">
                                            <input type="email" name="email" id="email"
                                            class="form-control border-start-0"
                                            placeholder="<?php echo e(__('messages.form.enter_email')); ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"><?php echo e(__('messages.user.phone')); ?></label>
                                        <div class="input-group mb-3">
                                            <input type="tel" name="phone" id="phone"
                                            class="form-control border-start-0"
                                            placeholder="<?php echo e(__('messages.form.phone')); ?>">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label"><?php echo e(__('messages.user.your_message')); ?></label>
                                        <textarea class="form-control" name="message"
                                        placeholder="<?php echo e(__('messages.form.type_message')); ?>" id="message"
                                        rows="5"></textarea>
                                    </div>
                                    <button type="submit" class="contact-btn text-light mt-4 d-block ms-auto"><?php echo e(__('messages.contact_us.send_message')); ?>

                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                
                <div class="d-sm-flex justify-content-center py-3">
                    <button type="submit" class="vcard-eight-btn mt-3 d-block btn text-light" onclick="downloadVcard('<?php echo e($vcard->name); ?>.vcf',<?php echo e($vcard->id); ?>)"><i class="fas fa-download me-2"></i><?php echo e(__('messages.vcard.download_vcard')); ?></button>
                    
                    <button type="button" class="vcard8-share share-btn d-block btn mt-3 ms-sm-3">
                        <a class="text-decoration-none text-light">
                            <i class="fas fa-share-alt me-2"></i><?php echo e(__('messages.vcard.share')); ?>

                        </a>
                    </button>
                </div>

                
                <?php if($vcard->location_url && isset($url[5])): ?>
                <div class="py-4 position-relative">
                    <div class="px-3">
                        <iframe width="100%" height="300px" src='https://maps.google.com/maps?q=<?php echo e($url[5]); ?>/&output=embed'
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        style="border-radius: 15px;"></iframe>
                    </div>
                </div>
                <?php endif; ?>

                
                <div class="d-flex justify-content-evenly pt-2 pb-2">
                    <?php if(!isset(checkFeature('advanced')->hide_branding) || $vcard->branding == 0): ?>
                    <?php if($vcard->made_by): ?>
                    <a href="<?php echo e($vcard->made_by_url); ?>" class="text-center text-decoration-none text-light" target="_blank" rel="nofollow noreferrer noopener">
                        <small><?php echo e(__('messages.made_by')); ?> <?php echo e($vcard->made_by); ?></small>
                    </a>
                    <?php else: ?>
                    <a href="<?php echo e(env('APP_URL')); ?>" class="text-center text-decoration-none text-light" target="_blank">
                        <small><?php echo e(__('messages.made_by')); ?> <?php echo e($setting['app_name']); ?></small>
                    </a>
                    <?php endif; ?>
                    <?php endif; ?>

                    <?php if(!empty($vcard->privacy_policy) || !empty($vcard->term_condition)): ?>
                    <div>
                        <a class="text-decoration-none text-light cursor-pointer" href="<?php echo e(route('vcard.show-privacy-policy',[$vcard->url_alias,$vcard->id])); ?>">
                            <small><?php echo e(__('messages.vcard.term_policy')); ?></small>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>

        
        <div id="vcard8-shareModel" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo e(__('messages.vcard.share_my_vcard')); ?></h5>
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
                    <?php
                    $shareUrl = route('vcard.defaultIndex')."/".$vcard->url_alias;
                    ?>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12 justify-content-between social-link-modal">
                                <a href="https://www.facebook.com/sharer.php?u=<?php echo e($shareUrl); ?>" target="_blank" rel="nofollow noreferrer noopener" class="mx-2 share" title="Facebook">
                                    <i class="fab fa-facebook fa-3x" style="color: #1B95E0"></i>
                                </a>
                                <a href="https://twitter.com/share?url=<?php echo e($shareUrl); ?>&text=<?php echo e($vcard->name); ?>&hashtags=sharebuttons" target="_blank" rel="nofollow noreferrer noopener" class="mx-2 share" title="Twitter">
                                    <i class="fab fa-twitter fa-3x" style="color: #1DA1F3"></i>
                                </a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo e($shareUrl); ?>" target="_blank" rel="nofollow noreferrer noopener" class="mx-2 share" title="Linkedin">
                                    <i class="fab fa-linkedin fa-3x" style="color: #1B95E0"></i>
                                </a>
                                <a href="mailto:?Subject=&Body=<?php echo e($shareUrl); ?>" target="_blank" rel="nofollow noreferrer noopener" class="mx-2 share" title="Email">
                                    <i class="fas fa-envelope fa-3x" style="color: #191a19  "></i>
                                </a>
                                <a href="https://pinterest.com/pin/create/link/?url=<?php echo e($shareUrl); ?>" target="_blank" rel="nofollow noreferrer noopener" class="mx-2 share" title="Pinterest">
                                    <i class="fab fa-pinterest fa-3x" style="color: #bd081c"></i>
                                </a>
                                <a href="https://reddit.com/submit?url=<?php echo e($shareUrl); ?>&title=<?php echo e($vcard->name); ?>" target="_blank" rel="nofollow noreferrer noopener" class="mx-2 share" title="Reddit">
                                    <i class="fab fa-reddit fa-3x" style="color: #ff4500"></i>
                                </a>
                                <a href="https://wa.me/?text=<?php echo e($shareUrl); ?>" target="_blank" rel="nofollow noreferrer noopener" class="mx-2 share" title="Whatsapp">
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
    <?php echo $__env->make('vcardTemplates.template.templates', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://js.stripe.com/v3/"></script>
    <script src="<?php echo e(asset('assets/js/front-third-party.js')); ?>"></script>
    <script src="<?php echo e(asset('front/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/slider/js/slick.min.js')); ?>"></script>
    <script>
        <?php if(checkFeature('seo') && $vcard->google_analytics): ?>
        <?php echo $vcard->google_analytics; ?>

        <?php endif; ?>
        <?php if(isset(checkFeature('advanced')->custom_js) && $vcard->custom_js): ?>
        <?php echo $vcard->custom_js; ?>

        <?php endif; ?>
    </script>
    <?php
    $setting = \App\Models\UserSetting::where('user_id', $vcard->tenant->user->id)->where('key', 'stripe_key')->first();
    ?>
    <script>
        let stripe = ''
        <?php if(!empty($setting) && !empty($setting->value)): ?>
        stripe = Stripe('<?php echo e($setting->value); ?>');
        <?php endif; ?>
        $('.testimonial-slider').slick({
            dots: true,
            infinite: true,
            arrows: true,
            autoplay: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
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
        let password = "<?php echo e(isset(checkFeature('advanced')->password) && !empty($vcard->password)); ?>"
        let passwordUrl = "<?php echo e(route('vcard.password', $vcard->id)); ?>";
        let enquiryUrl = "<?php echo e(route('enquiry.store',  ['vcard' => $vcard->id, 'alias' => $vcard->url_alias])); ?>";
        let appointmentUrl = "<?php echo e(route('appointment.store', ['vcard' => $vcard->id, 'alias' => $vcard->url_alias])); ?>";
        let slotUrl = "<?php echo e(route('appointment-session-time',$vcard->url_alias)); ?>";
        let appUrl = "<?php echo e(config('app.url')); ?>";
        let vcardId = <?php echo e($vcard->id); ?>;
        let vcardAlias = "<?php echo e($vcard->url_alias); ?>";
        let languageChange = "<?php echo e(url('language')); ?>";
        let paypalUrl = "<?php echo e(route('paypal.init')); ?>"
        let lang = "<?php echo e(checkLanguageSession($vcard->url_alias)); ?>";
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
    <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
    <script src="<?php echo e(env('APP_URL')); ?><?php echo e(mix('assets/js/custom/helpers.js')); ?>"></script>
    <script src="<?php echo e(env('APP_URL')); ?><?php echo e(mix('assets/js/custom/custom.js')); ?>"></script>
    <script src="<?php echo e(env('APP_URL')); ?><?php echo e(mix('assets/js/vcards/vcard-view.js')); ?>"></script>

    <!--Lazy load img-->
    <script src="<?php echo e(asset('assets/js/lazysizes.src.js')); ?>" async></script>
    <script src="<?php echo e(asset('assets/js/lazyload.min.js')); ?>" async></script>

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
</html><?php /**PATH /home/maystudi/cardlyn.com/resources/views/vcardTemplates/vcard8.blade.php ENDPATH**/ ?>