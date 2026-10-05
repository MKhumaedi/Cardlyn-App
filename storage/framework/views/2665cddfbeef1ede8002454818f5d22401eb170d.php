<!--user_pages-->
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
<meta property="og:type" content="website">
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
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700&display=swap"/>
<!-- General CSS Files -->
<link rel="stylesheet" href="<?php echo e(asset('assets/css/third-party.css')); ?>">
<link rel="stylesheet" href="<?php echo e(env('APP_URL')); ?><?php echo e(mix('assets/css/page.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">
<?php if(!getLogInUser()->theme_mode): ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/plugins.css')); ?>">
<?php else: ?>
<link rel="stylesheet" href="<?php echo e(asset('css/plugins.dark.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/style.dark.css')); ?>">
<?php endif; ?>
<?php echo \Livewire\Livewire::styles(); ?>

<?php echo \Livewire\Livewire::scripts(); ?>

<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
data-turbolinks-eval="false" data-turbo-eval="false"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
<script src="<?php echo e(asset('assets/js/third-party.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/messages.js')); ?>"></script>
<script data-turbo-eval="false">
    let stripe = ''
    <?php if(config('services.stripe.key')): ?>
    stripe = Stripe('<?php echo e(config('services.stripe.key')); ?>')
    <?php endif; ?>
    let noData = "<?php echo e(__('messages.no_data')); ?>"
    let utilsScript = "<?php echo e(asset('assets/js/inttel/js/utils.min.js')); ?>"
    let defaultProfileUrl = "<?php echo e(asset('web/media/avatars/150-26.jpg')); ?>"
    let defaultTemplate = "<?php echo e(asset('assets/images/default_cover_image.jpg')); ?>"
    let defaultServiceIconUrl = "<?php echo e(asset('assets/images/default_service.png')); ?>"
    let defaultCoverUrl = "<?php echo e(asset('assets/images/default_cover_image.jpg')); ?>"
    let defaultGalleryUrl = "<?php echo e(asset('assets/images/default_service.png')); ?>"
    let defaultAppLogoUrl = "<?php echo e(asset(getAppLogo())); ?>"
    let defaultFaviconUrl = "<?php echo e(getFaviconUrl()); ?>"
    let getLoggedInUserdata = "<?php echo e(getLogInUser()); ?>";
    let getLoggedInUserLang = "<?php echo e(getCurrentLanguageName()); ?>";
    let getCurrencyCode = "<?php echo e(getMaximumCurrencyCode()); ?>";
    let sweetAlertIcon = "<?php echo e(asset('images/remove.png')); ?>"
    let options = {
        'key': "<?php echo e(config('payments.razorpay.key')); ?>",
        'amount': 0, //  100 refers to 1
        'currency': 'INR',
        'name': "<?php echo e(getAppName()); ?>",
        'order_id': '',
        'description': '',
        'image': '<?php echo e(asset(getAppLogo())); ?>', // logo here
        'callback_url': "<?php echo e(route('razorpay.success')); ?>",
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
<?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
<script src="<?php echo e(env('APP_URL')); ?><?php echo e(mix('assets/js/pages.js')); ?>"></script>
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
</head>
<body>
    <div class="d-flex flex-column flex-root vh-100">
        <div class="d-flex flex-row flex-column-fluid">
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="wrapper d-flex flex-column flex-row-fluid">
                <div class='container-fluid d-flex align-items-stretch justify-content-between px-0'>
                    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class='content d-flex flex-column flex-column-fluid pt-7'>
                    <?php echo $__env->yieldContent('header_toolbar'); ?>
                    <div class='d-flex flex-wrap flex-column-fluid'>
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
                <div class='container-fluid'>
                    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('profile.changePassword', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('profile.changelanguage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--Lazy load img-->
    <script src="<?php echo e(asset('assets/js/lazysizes.src.js')); ?>" async></script>
    <script src="<?php echo e(asset('assets/js/lazyload.min.js')); ?>" async></script>
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
<?php /**PATH /home/maystudi/cardlyn.com/resources/views/layouts/app.blade.php ENDPATH**/ ?>