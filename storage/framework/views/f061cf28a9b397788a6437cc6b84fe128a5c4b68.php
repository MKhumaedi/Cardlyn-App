<!--auth_pages-->
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
<!--Viewport-->
<meta charset="UTF-8"><meta name="HandheldFriendly" content="True"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<!--Canonical-->
<link rel="home" href="<?php echo e(env('APP_URL')); ?>">
<link rel="canonical" href="<?php echo e(url()->current()); ?>">
<link rel="alternate" type="application/rss+xml" title="<?php echo e(env('APP_NAME')); ?>" href="<?php echo e(env('APP_URL')); ?>/rss.xml">
<link rel="shortcut icon" href="<?php echo e(getFaviconUrl()); ?>" type="image/x-icon">
<!--Robots-->
<meta name="robots" content="all, index, follow, max-image-preview:large"><meta name="googlebot-news" content="all, index, follow, max-image-preview:large">
<!-- Title -->
<title><?php echo $__env->yieldContent('title'); ?> - <?php echo e(getAppName()); ?></title>
<meta name="title" content="<?php echo $__env->yieldContent('title'); ?> - <?php echo e(getAppName()); ?>">
<meta name="description" content="<?php echo e(env('GLOBAL_DESC')); ?>">
<meta name="keywords" content="<?php echo e(env('GLOBAL_KEY')); ?>">
<meta name="news_keywords" content="<?php echo e(env('GLOBAL_KEY')); ?>">
<!--Author-->
<meta name="publisher" content="<?php echo e(env('APP_NAME')); ?>">
<meta name="author" content="Adi Gunawan">
<meta name="publisher" content="<?php echo e(env('APP_COMPANY')); ?>">
<!--Location-->
<link rel="alternate" href="<?php echo e(url()->current()); ?>" hreflang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<link rel="alternate" href="<?php echo e(url()->current()); ?>" hreflang="x-default">
<meta content="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" name="geo.region">
<meta content="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" name="geo.country">
<meta content="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" name="geo.placename">
<meta content="x;x" name="geo.position">
<meta content="x,x" name="ICBM">
<!-- OG -->
<meta property="og:type" content="article">
<meta property="og:site_name" content="<?php echo e(env('APP_NAME')); ?>">
<meta property="og:url" content="<?php echo e(url()->current()); ?>">
<meta property="og:headline" content="<?php echo $__env->yieldContent('title'); ?> - <?php echo e(getAppName()); ?>">
<meta property="og:title" content="<?php echo $__env->yieldContent('title'); ?> - <?php echo e(getAppName()); ?>">
<meta property="og:description" content="<?php echo e(env('GLOBAL_DESC')); ?>">
<meta property="og:image" content="<?php echo e(env('APP_URL')); ?>/assets/img/kartunama/kartunamapro.png">
<meta property="og:image:alt" content="<?php echo $__env->yieldContent('title'); ?> - <?php echo e(getAppName()); ?>">
<meta property="og:rich_attachment" content="true">
<meta property="og:locale" content="id_ID">
<meta property="og:locale:alternate" content="en_US">
<meta property="fb:app_id" content="1411872802675627">
<meta property="fb:pages" content="103417799098875"> 
<meta property="fb:profile_id" content="103417799098875">
<meta property="pinterest-rich-pin" content="true">
<meta property="article:author" content="<?php echo e(env('APP_NAME')); ?>">
<meta name="og:image:width" content="1200">
<meta name="og:image:height" content="auto">
<meta name="twitter:title" content="<?php echo $__env->yieldContent('title'); ?> - <?php echo e(getAppName()); ?>">
<meta name="twitter:url" content="<?php echo e(url()->current()); ?>">
<meta name="twitter:description" content="<?php echo e(env('GLOBAL_DESC')); ?>">
<meta name="twitter:site" content="<?php echo e(env('APP_URL')); ?>">
<meta name="twitter:image" content="<?php echo e(env('APP_URL')); ?>/assets/img/kartunama/kartunamapro.png">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:app:country" content="ID">
<meta name="twitter:app:name:iphone" content="<?php echo e(env('APP_NAME')); ?>">
<meta name="twitter:app:name:ipad" content="<?php echo e(env('APP_NAME')); ?>">
<meta name="twitter:app:name:googleplay" content="Kartunama Pro">
<meta name="twitter:app:id:googleplay" content="id.mcproject.kartunamapro">
<!-- Webapp -->
<link rel="manifest" href="<?php echo e(env('APP_URL')); ?>/manifest.json">
<meta name="msapplication-starturl" content="<?php echo e(env('APP_URL')); ?>">
<meta name="start_url" content="/">
<meta name="application-name" content="<?php echo e(env('APP_NAME')); ?>">
<meta name="apple-mobile-web-app-title" content="<?php echo e(env('APP_NAME')); ?>">
<meta name="msapplication-tooltip" content="<?php echo e(env('APP_NAME')); ?>">
<meta name="theme-color" content="#0078D2">
<meta name="background_color" content="#FFFFFF">
<meta name="msapplication-navbutton-color" content="#0078D2">
<meta name="msapplication-TileColor" content="#0078D2">
<meta name="apple-mobile-web-app-status-bar-style" content="#0078D2">
<meta name="mssmarttagspreventparsing" content="true">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="msapplication-TileImage" content="<?php echo e(env('APP_URL')); ?>/assets/img/logo/kartunama-144.png">
<link rel="apple-touch-icon" href="<?php echo e(env('APP_URL')); ?>/assets/img/logo/apple-icon.png">
<!--Resource-->
<link href="//fonts.gstatic.com" rel="preconnect dns-prefetch" crossorigin><link href="//ajax.googleapis.com" rel="dns-prefetch"><link href="//fonts.googleapis.com" rel="preconnect dns-prefetch"><link href="//www.google-analytics.com" rel="dns-prefetch"><link href="//www.googletagservices.com" rel="dns-prefetch"><link href="//partner.googleadservices.com" rel="dns-prefetch"><link href="//www.google.com" rel="preconnect dns-prefetch"><link href="//www.youtube.com" rel="preconnect dns-prefetch"><link href="//www.recaptcha.net" rel="preconnect dns-prefetch"><link href="//www.gstatic.com" rel="preconnect dns-prefetch"><link href="//www.googletagmanager.com" rel="preconnect dns-prefetch"><link href="//ajax.cloudflare.com" rel="preconnect dns-prefetch"><link href="//cdn.jsdelivr.net" rel="preconnect dns-prefetch"><link href="//connect.facebook.net" rel="preconnect dns-prefetch"><link href="//pagead2.googlesyndication.com" rel="preconnect dns-prefetch"><link href="//googleads.g.doubleclick.net" rel="preconnect dns-prefetch"><link href="//ad.doubleclick.net" rel="preconnect dns-prefetch"><link href="//static.doubleclick.net" rel="preconnect dns-prefetch"><link href="//tpc.googlesyndication.com" rel="preconnect dns-prefetch"><link href="//adservice.google.com" rel="preconnect dns-prefetch">

<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<!-- Fonts -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700&display=swap"/>
<!-- General CSS Files -->
<link rel="stylesheet" href="<?php echo e(asset('assets/css/third-party.css')); ?>">
<link rel="stylesheet" href="<?php echo e(env('APP_URL')); ?><?php echo e(mix('assets/css/page.css')); ?>">
<!-- CSS Libraries -->
<link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
<?php echo $__env->yieldPushContent('css'); ?>
<?php echo $__env->yieldContent('css'); ?>

<!--Adblock-->
<style>
/*Adblock*/
@keyframes  fadeInDown{0%{opacity:0;transform:translateY(-20px);}100%{opacity:1;transform:translateY(0);}} @keyframes  rubberBand{from{transform:scale3d(1,1,1)}30%{transform:scale3d(1.25,0.75,1);}40%{transform:scale3d(0.75,1.25,1)}50%{transform:scale3d(1.15,0.85,1)}65%{transform:scale3d(.95,1.05,1)}75%{transform:scale3d(1.05,.95,1)}to{transform:scale3d(1,1,1);}} #seosecretidnadblock{background:rgba(0,0,0,0.65);position:fixed;margin:auto;left:0;right:0;top:0;bottom:0;overflow:auto;z-index:999999;animation:fadeInDown 1s;} #seosecretidnadblock .header{margin:0 0 15px 0;} #seosecretidnadblock .inner{background:#CC3333;color:#F5F5F5;box-shadow:0 5px 20px rgba(0,0,0,0.1);text-align:center;width:600px;padding:30px;border-radius:5px;margin:7% auto 2% auto;animation:rubberBand 2s;} #seosecretidnadblock button{padding:10px 20px;border:0;background:rgba(0,0,0,0.15);color:#F5F5F5;margin:10px 5px;cursor:pointer;transition:all .3s;} #seosecretidnadblock button:hover{background:rgba(0,0,0,0.35);color:#fff;outline:none;} #seosecretidnadblock button.active,#arlinablock button:hover.active{background:#F5F5F5;color:#333333;outline:none;} #seosecretidnadblock .fixblock{background:#FFFFFF;text-align:left;color:#333333;padding:10px 0px;height:300px;overflow:auto;line-height:30px;} #seosecretidnadblock .fixblock div{display:none;} #seosecretidnadblock .fixblock div.active{display:block;} #seosecretidnadblock ol{margin-left:0px;} @media(max-width:768px){#seosecretidnadblock .inner{width:calc(100% - 30px);margin:10px auto;padding:15px;}}
/*Scroll Bar*/
html{scrollbar-width:thin;}html::-webkit-scrollbar{width:5px;background-color:#F5F5F5;}html::-webkit-scrollbar-thumb{background-color:#0078D2;border-radius:0px;}.element{scrollbar-width:thin;}.element::-webkit-scrollbar{width:5px;background-color:#F5F5F5;}.element::-webkit-scrollbar-thumb{background-color:#0078D2;border-radius:0px;}
</style>
<!--Back to Top-->
<style>
.back-top{display:none;position:fixed;bottom:80px;right:26px;width:40px;height:40px;background:#0078D2;cursor:pointer;overflow:hidden;font-size:22px;color:#ffffff;text-align:center;line-height:40px;border-radius:50px;z-index:9999;}.back-top:hover{opacity:1;background:#065FB4;}@media  screen and(max-width:880px){.navbar-scrolled.back-top{opacity:0!important;}}
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
<?php if(!empty($metas['google_analytics'])): ?>
    <?php echo $metas['google_analytics']; ?>

<?php endif; ?>
<!--WebSite-->
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebSite","@id":"#WebSite","name":"<?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_TAGLINE')); ?>","alternateName":"<?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_TAGLINE')); ?> - <?php echo e(env('APP_BRAND')); ?>","headline":"<?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_TAGLINE')); ?>","url":"<?php echo e(env('APP_URL')); ?>","description":"<?php echo e(env('GLOBAL_DESC')); ?>","disambiguatingDescription":"<?php echo e(env('GLOBAL_DESC')); ?> - <?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_TAGLINE')); ?> - <?php echo e(env('APP_BRAND')); ?>","keywords":["Kartu nama","Bio link","vCard indonesia","Kartu nama digital","Pembuat vCard","Bio link terbaik","Kartu nama bisnis","Bio link bisnis","Kartu nama online","Web kartu nama"],"genre":["vCards","Marketing","Business","Website","Software","Tool"],"image":{"@type":"ImageObject","@id":"#ImageWebSite","inLanguage":"id-ID","url":"<?php echo e(env('APP_URL')); ?>/assets/img/kartunama/kartunamapro.png","caption":"<?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_TAGLINE')); ?>"},"inLanguage":"id-ID","sameAs":["https://facebook.com/kartunamaxd","https://twitter.com/401xdgroup","https://instagram.com/kartunamaxd","https://linkedin.com/company/401xdgroup","https://pinterest.com/401xdgroup","https://youtube.com/c/mycodingxd"],"potentialAction":{"@type":"SearchAction","target":"<?php echo e(env('APP_URL')); ?>/?q={query}","query-input":"required name=query"},"publisher":{"@id":"#Organization"},"sponsor":{"@id":"#Corporation"}}
</script>
<!--Organization-->
<script type="application/ld+json">
{"@context":"https://schema.org/","@type":"Organization","@id":"#Organization","url":"<?php echo e(env('APP_URL')); ?>","name":"<?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_TAGLINE')); ?>","description":"<?php echo e(env('GLOBAL_DESC')); ?>","sameAs":["https://facebook.com/kartunamaxd","https://twitter.com/401xdgroup","https://instagram.com/kartunamaxd","https://linkedin.com/company/401xdgroup","https://pinterest.com/401xdgroup","https://youtube.com/c/mycodingxd"],"logo":{"@type":"ImageObject","@id":"#LogoOrganization","inLanguage":"id-ID","url":"<?php echo e(env('APP_URL')); ?>/assets/img/kartunama/logo.png","caption":"<?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_TAGLINE')); ?>"},"image":{"@type":"ImageObject","@id":"#ImageWebSite","inLanguage":"id-ID","url":"<?php echo e(env('APP_URL')); ?>/assets/img/kartunama/kartunamapro.png","caption":"<?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_TAGLINE')); ?>"},"address":{"@type":"PostalAddress","@id":"#PostalAddressOrganization","streetAddress":"<?php echo e(env('APP_COMPANY')); ?>, Jl. Sumbawa, Ulak Karang Utara, Kec. Padang Utara","addressLocality":"Kota Padang","addressRegion":"Sumatera Barat","postalCode":"25133","addressCountry":"Indonesia"},"founder":{"@type":"Person","name":"Adi Gunawan","honorificSuffix":"S.Kom., M.Kom.","jobTitle":"Owner","url":"https://adigunawan.id/","sameAs":["https://orcid.org/0000-0002-5954-8068","https://www.researchgate.net/profile/Adi-Gunawan-3","https://scholar.google.com/citations?user=mDVQUgQAAAAJ","https://independent.academia.edu/AdiGunawanXD","https://www.facebook.com/AdigunawanXD","https://www.instagram.com/AdiGunawanXD"]},"aggregateRating":{"@type":"AggregateRating","ratingValue":"4.9","reviewCount":"1<?php echo e(date('Y')); ?>"},"review":{"@type":"Review","@id":"#ReviewOrganization","name":"Ulasan <?php echo e(env('APP_NAME')); ?>","author":{"@type":"Person","name":"Adi Gunawan","honorificSuffix":"S.Kom., M.Kom.","url":"https://adigunawan.id/","sameAs":["https://orcid.org/0000-0002-5954-8068","https://www.researchgate.net/profile/Adi-Gunawan-3","https://scholar.google.com/citations?user=mDVQUgQAAAAJ","https://independent.academia.edu/AdiGunawanXD","https://www.facebook.com/AdigunawanXD","https://www.instagram.com/AdiGunawanXD"]},"description":"Platform pembuat halaman web kartu nama digital vCard premium dan bio link profesional","reviewRating":{"@type":"Rating","ratingValue":"4.9","worstRating":"1","bestRating":"5"}}}
</script>
<!--Corporation-->
<script type="application/ld+json">
{"@context":"https://schema.org/","@type":"Corporation","@id":"#Corporation","url":"https://401xd.com","name":"<?php echo e(env('APP_COMPANY')); ?>","alternateName":"<?php echo e(env('APP_COMPANY')); ?> Indonesia","description":"<?php echo e(env('APP_COMPANY')); ?> adalah perusahaan yang memiliki spesialisasi dalam bidang teknologi, pengembangan software, kecerdasan buatan, internet, portal media online, digital marketing, teknologi finansial dan e-commerce di Indonesia.","disambiguatingDescription":"<?php echo e(env('APP_COMPANY')); ?> adalah perusahaan yang memiliki spesialisasi dalam bidang teknologi, pengembangan software, kecerdasan buatan, internet, portal media online, digital marketing, teknologi finansial dan e-commerce di Indonesia. Berawal dari sebuah organisasi komunitas pada tahun 2009, <?php echo e(env('APP_COMPANY')); ?> saat ini berdiri sebagai perusahaan yang memiliki 20+ startup penyedia produk, layanan jasa, dan portal media informasi online.","telephone":"+6282377823390","sameAs":["https://g.page/401xd","https://facebook.com/401xd","https://twitter.com/401xdgroup","https://instagram.com/401xdgroup","https://linkedin.com/company/401xdgroup","https://pinterest.com/401xdgroup"],"logo":{"@type":"ImageObject","@id":"#LogoCorporation","inLanguage":"id-ID","url":"<?php echo e(env('APP_URL')); ?>/assets/img/kartunama/401XDGroup.png","caption":"<?php echo e(env('APP_COMPANY')); ?>"},"image":{"@type":"ImageObject","@id":"#ImageCorporation","inLanguage":"id-ID","url":"<?php echo e(env('APP_URL')); ?>/assets/img/kartunama/401XDGroupIndonesia.png","caption":"<?php echo e(env('APP_COMPANY')); ?>"},"address":{"@type":"PostalAddress","@id":"#PostalAddressCorporation","streetAddress":"<?php echo e(env('APP_COMPANY')); ?>, Jl. Sumbawa, Ulak Karang Utara, Kec. Padang Utara","addressLocality":"Kota Padang","addressRegion":"Sumatera Barat","postalCode":"25133","addressCountry":"Indonesia"},"aggregateRating":{"@type":"AggregateRating","ratingValue":"4.9","reviewCount":"2<?php echo e(date('m')); ?>"},"review":{"@type":"Review","@id":"#ReviewCorporation","name":"Ulasan <?php echo e(env('APP_NAME')); ?>","author":{"@type":"Person","name":"Adi Gunawan","honorificSuffix":"S.Kom., M.Kom.","url":"https://adigunawan.id/","sameAs":["https://orcid.org/0000-0002-5954-8068","https://www.researchgate.net/profile/Adi-Gunawan-3","https://scholar.google.com/citations?user=mDVQUgQAAAAJ","https://independent.academia.edu/AdiGunawanXD","https://www.facebook.com/AdigunawanXD","https://www.instagram.com/AdiGunawanXD"]},"description":"Platform pembuat halaman web kartu nama digital vCard premium dan bio link profesional","reviewRating":{"@type":"Rating","ratingValue":"4.9","worstRating":"1","bestRating":"5"}}}
</script>
<!--WebPage-->
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"WebPage","name":"<?php echo $__env->yieldContent('title'); ?> - <?php echo e(env('APP_NAME')); ?>","alternateName":"<?php echo $__env->yieldContent('title'); ?> - <?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_BRAND')); ?>","headline":"<?php echo $__env->yieldContent('title'); ?> - <?php echo e(env('APP_NAME')); ?>","url":"<?php echo e(url()->current()); ?>","description":"<?php echo e(env('GLOBAL_DESC')); ?>","disambiguatingDescription":"<?php echo e(env('GLOBAL_DESC')); ?> - <?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_BRAND')); ?>","keywords":["Kartu nama","Bio link","vCard indonesia","Kartu nama digital","Pembuat vCard","Bio link terbaik","Kartu nama bisnis","Bio link bisnis","Kartu nama online","Web kartu nama"],"genre":["vCards","Marketing","Business","Website","Software","Tool"],"image":{"@type":"ImageObject","@id":"#ImageWebSite","inLanguage":"id-ID","url":"<?php echo e(env('APP_URL')); ?>/assets/img/kartunama/kartunamapro.png","caption":"<?php echo e(env('APP_NAME')); ?> - <?php echo e(env('APP_TAGLINE')); ?>"},"inLanguage":"id-ID","sameAs":["https://facebook.com/kartunamaxd","https://twitter.com/401xdgroup","https://instagram.com/kartunamaxd","https://linkedin.com/company/401xdgroup","https://pinterest.com/401xdgroup","https://youtube.com/c/mycodingxd"],"potentialAction":{"@type":"SearchAction","target":"<?php echo e(env('APP_URL')); ?>/?q={query}","query-input":"required name=query"},"speakable":{"@type":"SpeakableSpecification","xpath":["/html/head/title","/html/head/meta[@name='description']/@content"]},"publisher":{"@id":"#Organization"},"sponsor":{"@id":"#Corporation"},"isPartOf":{"@id":"#WebSite"},"mainEntityOfPage":"true","isFamilyFriendly":"true","author":[{"@type":"Person","name":"Adi Gunawan","honorificSuffix":"S.Kom., M.Kom.","url":"https://adigunawan.id/","sameAs":["https://orcid.org/0000-0002-5954-8068","https://www.researchgate.net/profile/Adi-Gunawan-3","https://scholar.google.com/citations?user=mDVQUgQAAAAJ","https://independent.academia.edu/AdiGunawanXD","https://www.facebook.com/AdigunawanXD","https://www.instagram.com/AdiGunawanXD"]},{"@id":"#Organization"}]},{"@id":"#Organization"}]},"creator":{"@type":"Person","name":"Adi Gunawan","honorificSuffix":"S.Kom., M.Kom.","url":"https://adigunawan.id/","sameAs":["https://orcid.org/0000-0002-5954-8068","https://www.researchgate.net/profile/Adi-Gunawan-3","https://scholar.google.com/citations?user=mDVQUgQAAAAJ","https://independent.academia.edu/AdiGunawanXD","https://www.facebook.com/AdigunawanXD","https://www.instagram.com/AdiGunawanXD"]},{"@id":"#Organization"}]},"accountablePerson":{"@type":"Person","name":"Adi Gunawan","honorificSuffix":"S.Kom., M.Kom.","url":"https://adigunawan.id/","sameAs":["https://orcid.org/0000-0002-5954-8068","https://www.researchgate.net/profile/Adi-Gunawan-3","https://scholar.google.com/citations?user=mDVQUgQAAAAJ","https://independent.academia.edu/AdiGunawanXD","https://www.facebook.com/AdigunawanXD","https://www.instagram.com/AdiGunawanXD"]},{"@id":"#Organization"}]},"copyrightYear":"<?php echo e(date('Y')); ?>","copyrightHolder":{"@id":"#Corporation"}}
</script>
<!--ImageObject-->
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"ImageObject","@id":"#ImageObject","name":"<?php if(!empty($metas)): ?> <?php if($metas['home_title'] && $metas['site_title']): ?> <?php echo e($metas['home_title']); ?> - <?php echo e($metas['site_title']); ?> <?php else: ?> <?php echo $__env->yieldContent('title'); ?> <?php endif; ?> <?php else: ?> <?php echo $__env->yieldContent('title'); ?> <?php endif; ?>","alternateName":"<?php if(!empty($metas)): ?> <?php if($metas['home_title'] && $metas['site_title']): ?> <?php echo e($metas['home_title']); ?> - <?php echo e($metas['site_title']); ?> <?php else: ?> <?php echo $__env->yieldContent('title'); ?> <?php endif; ?> <?php else: ?> <?php echo $__env->yieldContent('title'); ?> <?php endif; ?> - <?php echo e(env('APP_NAME')); ?>","headline":"<?php if(!empty($metas)): ?> <?php if($metas['home_title'] && $metas['site_title']): ?> <?php echo e($metas['home_title']); ?> - <?php echo e($metas['site_title']); ?> <?php else: ?> <?php echo $__env->yieldContent('title'); ?> <?php endif; ?> <?php else: ?> <?php echo $__env->yieldContent('title'); ?> <?php endif; ?>","alternativeHeadline":"<?php if(!empty($metas)): ?> <?php if($metas['home_title'] && $metas['site_title']): ?> <?php echo e($metas['home_title']); ?> - <?php echo e($metas['site_title']); ?> <?php else: ?> <?php echo $__env->yieldContent('title'); ?> <?php endif; ?> <?php else: ?> <?php echo $__env->yieldContent('title'); ?> <?php endif; ?> - <?php echo e(env('APP_NAME')); ?>","description":"<?php if(!empty($metas)): ?> <?php if($metas['meta_description']): ?> <?php echo e($metas['meta_description']); ?> <?php endif; ?> <?php else: ?> <?php if(!empty($metas)): ?> <?php if($metas['meta_description']): ?> <?php echo e($metas['meta_description']); ?> <?php endif; ?> <?php else: ?> <?php echo e(env('GLOBAL_DESC')); ?> <?php endif; ?> <?php endif; ?>","disambiguatingDescription":"<?php if(!empty($metas)): ?> <?php if($metas['meta_description']): ?> <?php echo e($metas['meta_description']); ?> <?php endif; ?> <?php else: ?> <?php if(!empty($metas)): ?> <?php if($metas['meta_description']): ?> <?php echo e($metas['meta_description']); ?> <?php endif; ?> <?php else: ?> <?php echo e(env('GLOBAL_DESC')); ?> <?php endif; ?> <?php endif; ?> - <?php echo e(env('APP_NAME')); ?>","abstract":"<?php if(!empty($metas)): ?> <?php if($metas['meta_description']): ?> <?php echo e($metas['meta_description']); ?> <?php endif; ?> <?php else: ?> <?php if(!empty($metas)): ?> <?php if($metas['meta_description']): ?> <?php echo e($metas['meta_description']); ?> <?php endif; ?> <?php else: ?> <?php echo e(env('GLOBAL_DESC')); ?> <?php endif; ?> <?php endif; ?> - <?php echo e(env('APP_NAME')); ?>","keywords":["Kartu nama","Bio link","vCard indonesia","Kartu nama digital","Pembuat vCard","Bio link terbaik","Kartu nama bisnis","Bio link bisnis","Kartu nama online","Web kartu nama"],"genre":["Kartu nama","Bio link","vCard indonesia","Kartu nama digital","Pembuat vCard","Bio link terbaik","Kartu nama bisnis","Bio link bisnis","Kartu nama online","Web kartu nama"],"caption":"<?php if(!empty($metas)): ?> <?php if($metas['home_title'] && $metas['site_title']): ?> <?php echo e($metas['home_title']); ?> - <?php echo e($metas['site_title']); ?> <?php else: ?> <?php echo $__env->yieldContent('title'); ?> <?php endif; ?> <?php else: ?> <?php echo $__env->yieldContent('title'); ?> <?php endif; ?>","contentUrl":"<?php echo e(env('APP_URL')); ?>/assets/img/kartunama/kartunamapro.png","inLanguage":"<?php echo e(str_replace('_', '-', app()->getLocale())); ?>","license":"https://mycoding.id/terms-conditions","acquireLicensePage":"<?php echo e(url()->current()); ?>","creditText":"<?php echo e(env('APP_NAME')); ?>","creator":{"@type":"Person","name":"Adi Gunawan","honorificSuffix":"S.Kom., M.Kom.","url":"https://adigunawan.id/","sameAs":["https://orcid.org/0000-0002-5954-8068","https://www.researchgate.net/profile/Adi-Gunawan-3","https://scholar.google.com/citations?user=mDVQUgQAAAAJ","https://independent.academia.edu/AdiGunawanXD","https://www.facebook.com/AdigunawanXD","https://www.instagram.com/AdiGunawanXD"]},"copyrightNotice":"<?php echo e(env('APP_NAME')); ?>","isBasedOnUrl":"<?php echo e(url()->current()); ?>"}
</script>
<!--BreadcrumbList-->
<script type="application/ld+json">
{"@context":"https://schema.org","@type":"BreadcrumbList","@id":"#BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"<?php echo e(env('APP_NAME')); ?>","url":"<?php echo e(env('APP_URL')); ?>","item":"<?php echo e(env('APP_URL')); ?>"},{"@type":"ListItem","position":2,"name":"<?php if(!empty($metas)): ?> <?php if($metas['home_title'] && $metas['site_title']): ?> <?php echo e($metas['home_title']); ?> - <?php echo e($metas['site_title']); ?> <?php else: ?> <?php echo $__env->yieldContent('title'); ?> <?php endif; ?> <?php else: ?> <?php echo $__env->yieldContent('title'); ?> <?php endif; ?>","url":"<?php echo e(url()->current()); ?>","item":"<?php echo e(url()->current()); ?>"}]}
</script>
</head>
<body>
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed authImage">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <footer>
        <div class="container-fluid p-5">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6">
                    <div class="copyright text-center text-muted">
                       <?php echo e(__('auth.copyright_by')." "); ?> &copy;<?php echo e(date('Y')); ?> <?php echo e(env('APP_BRAND')); ?>.
                   </div>
               </div>
               <div class="col-xl-6">
                <div class="copyright text-center text-muted">
                   <?php echo e(__('messages.made_by')." "); ?> <a href="<?php echo e(env('APP_COMPANY_URL')); ?>" alt="<?php echo e(env('APP_COMPANY')); ?>" title="<?php echo e(env('APP_COMPANY')); ?>" target="_blank" rel="nofollow noreferrer noopener"><?php echo e(env('APP_COMPANY')); ?></a>.
               </div>
           </div>
       </div>
   </div>
</footer>
<!-- Scripts -->
<script src="<?php echo e(env('APP_URL')); ?><?php echo e(mix('assets/js/front-third-party.js')); ?>"></script>
<script src="<?php echo e(env('APP_URL')); ?><?php echo e(mix('assets/js/auth/auth.js')); ?>"></script>
<?php echo $__env->yieldPushContent('scripts'); ?>
<script>
    $(document).ready(function () {
        $('.alert').delay(8000).slideUp(5000);
    });
</script>
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
<!--Back to Top-->
<script>
//<![CDATA[
$(function() { $('.back-top').each(function() { var $this = $(this); $(window).on('scroll', function() { $(this).scrollTop() >= 100 ? $this.fadeIn(250) : $this.fadeOut(250) }), $this.click(function() { $('html, body').animate({ scrollTop: 0 }, 500) }) }); });
//]]>
</script>
<div class="back-top" title="Kembali ke Atas"> ↑ </div>
</body>
</html><?php /**PATH /home/maystudi/cardlyn.com/resources/views/layouts/auth.blade.php ENDPATH**/ ?>