<!-- start subscribe section -->
<section class="subscribe-section padding-t-100px padding-b-100px">
    <div class="container">
        <div class="subscribe-section__subscribe-inner position-relative rounded-20">
            <div class="position-relative subscribe-section__subscribe-block text-center mx-auto">
                <h2 class="text-white">{{ __('auth.subscribe_here') }}</h2>
                <p class="text-blue-100 fs-18">
                    {{ __('messages.placeholder.receive_latest_news') }}
                </p>
                <form action="{{route('email.sub') }}" method="post" id="addEmail">
                    @csrf()
                    <div class="subscribe-inputgrp position-relative">
                        <input name="email" type="email" class="form-control" placeholder="{{ __('messages.front.your_email_address') }}">
                        <div class="subscribe-btn d-flex align-items-center">
                            <button type="submit" class="btn btn-primary">{{ __('messages.subscribe') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end subscribe section -->

<!-- start footer section -->
<footer>
    <div class="container">
        <div class="row" itemscope itemtype="https://www.schema.org/SiteNavigationElement">

            <div class="col-xl-5 col-lg-5 col-md-12 text-center mb-3">
                <img data-sizes="auto" data-src="{{ env('APP_URL') }}/assets/img/kartunama/kartunamablack.png" title="{{ env('APP_NAME') }}" alt="{{ env('APP_NAME') }}" class="lazyload" width="215px"/>
                <p>{{ env('GLOBAL_DESC') }}</p>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-6 text-center mb-3">
                <h3 class="mb-2 pb-1">{{ __('messages.services') }}</h3>
                <ul class="ps-0">
                    <li itemprop="name">
                        <a href="{{ env('APP_URL') }}" class="text-decoration-none mb-2 d-block text-secondary" itemprop="url">{{ env('APP_NAME') }}</a>
                    </li>
                    <li itemprop="name">
                        <a href="{{ env('APP_COMPANY_URL') }}" class="text-decoration-none mb-2 d-block text-secondary" itemprop="url">{{ env('APP_COMPANY') }}</a>
                    </li>
                    @if($setting['terms_conditions'] !== '' || $setting['privacy_policy'] !== '')
                    @if($setting['terms_conditions'] !== '')
                    <li itemprop="name">
                        <a href="{{ route('terms.conditions') }}" class="text-decoration-none mb-2 d-block {{ request()->routeIs('terms.conditions') ? 'active' : 'text-secondary' }}" itemprop="url">{{ __('messages.vcard.term_condition') }}</a>
                    </li>
                    @endif
                    @if($setting['privacy_policy'] !== '')
                    <li itemprop="name">
                        <a href="{{ route('privacy.policy') }}" class="text-decoration-none mb-2 d-block {{ request()->routeIs('privacy.policy') ? 'active' : 'text-secondary' }}" itemprop="url">{{(__('messages.vcard.privacy_policy')) }}</a>
                    </li>
                    @endif
                    @endif
                </ul>
            </div>

            <div class="{{$setting['terms_conditions'] !== '' || $setting['privacy_policy'] !== '' ? 'col-xl-3 col-lg-3 col-md-6' : 'col-xl-12 col-lg-12 col-md-12'}} text-center mb-3">
                <h3 class="mb-2 pb-1">{{ __('messages.contact_us.contact') }}</h3>
                <div class="footer-info">
                    <div class="d-flex align-items-center footer-info__block mb-2 pb-1 text-center justify-content-center">
                        <a href="/" class="text-decoration-none text-secondary fs-6">{{ $setting['address'] }}</a>
                    </div>
                    <div class="d-flex align-items-center footer-info__block mb-2 pb-1 text-center justify-content-center">
                        <a href="mailto:{{ $setting['email'] }}" class="text-decoration-none text-secondary fs-6">{{ $setting['email'] }}</a>
                    </div>
                    <div class="d-flex align-items-center footer-info__block mb-2 pb-1 text-center justify-content-center">
                        <a href="tel:{{"+".$setting['prefix_code']."-".$setting['phone'] }}"
                        class="text-decoration-none text-secondary fs-6">{{"+".$setting['prefix_code']."-".$setting['phone'] }}</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-2 col-md-12 text-center">
                <h3 class="mb-2 pb-1">{{ __('Play Store') }}</h3>
                <a href="{{ env('APP_PLAYSTORE') }}" target="_blank" rel="nofollow noopener noreferrer">
                    <img data-sizes="auto" data-src="{{ env('APP_URL') }}/assets/img/kartunama/playstore.png" title="playstore" alt="playstore" class="lazyload" width="150px"/>
                </a>
            </div>

        </div>
    </div>
</footer>
<!-- end footer section -->

<div class="footercopyright" style="font-size:85%">
    <div class="container text-center">
        <div class="row">

            <div class="col-lg-12">
                <p class="mb-0 text-white">
                    {{ __('auth.copyright_by')." " }} &copy;{{ date('Y') }} {{ env('APP_BRAND') }}.
                </p>
                <p class="mb-0 text-white">
                    {{ __('messages.made_by')." " }} <a href="{{ env('APP_COMPANY_URL') }}" alt="{{ env('APP_COMPANY') }}" title="{{ env('APP_COMPANY') }}" target="_blank" rel="dofollow">{{ env('APP_COMPANY') }}</a>.
                </p>
            </div>
        </div>
    </div>
</div>