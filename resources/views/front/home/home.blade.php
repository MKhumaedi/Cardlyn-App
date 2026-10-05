@extends('front.layouts.app')
@section('title')
{{ getAppName() }}
@endsection
@section('content')

<!-- start hero section -->
<section class="hero-section padding-b-100px" style="padding-bottom:90px" id="home">
    <div class="container">
        <div class="row align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6">
                <div class="hero-content mt-2 mt-lg-0">
                    <h1 class="text-success">
                        {{ $setting['home_page_title'] }}
                    </h1>

                    <p class="text-secondary fs-5 mb-2">
                        {{ __('messages.create_your_business_digital_card_with_lots_of_information') }}
                    </p>

                    @if(empty(getLogInUser()))
                        <p class="text-secondary">
                            <a class="btn btn-primary rounded-pill me-sm-3" href="{{ route('register') }}">
                                {{ __('auth.get_started') }}
                            </a>
                        </p>
                    @else
                        @if(getLogInUser()->hasrole('admin') || getLogInUser()->hasrole('user'))
                        <p class="text-secondary">
                            <a class="btn btn-primary rounded-pill me-sm-3" href="{{ route('admin.dashboard') }}">
                                {{ __('messages.dashboard') }}
                            </a>
                        </p>
                        @endif
                        @if(getLogInUser()->hasrole('super_admin'))
                        <p class="text-secondary">
                            <a class="btn btn-primary rounded-pill me-sm-3" href="{{ route('sadmin.dashboard') }}">
                                {{ __('messages.dashboard') }}
                            </a>
                        </p>
                        @endif
                    @endif

                    <p class="text-secondary">
                        Lihat tampilan dan desain tema vCard
                    </p>

                    <a class="btn btn-success me-sm-1 mb-1" href="/vcard1" target="_blank">
                        Tema 1
                        <span class="avatar-xs">
                            <span class="avatar-title rounded-circle btn-icon">
                                <i class="mdi mdi-chevron-double-right"></i>
                            </span>
                        </span>
                    </a>
                    <a class="btn btn-success me-sm-1 mb-1" href="/vcard2" target="_blank">
                        Tema 2
                        <span class="avatar-xs">
                            <span class="avatar-title rounded-circle btn-icon">
                                <i class="mdi mdi-chevron-double-right"></i>
                            </span>
                        </span>
                    </a>
                    <a class="btn btn-success me-sm-1 mb-1" href="/vcard3" target="_blank">
                        Tema 3
                        <span class="avatar-xs">
                            <span class="avatar-title rounded-circle btn-icon">
                                <i class="mdi mdi-chevron-double-right"></i>
                            </span>
                        </span>
                    </a>
                    <a class="btn btn-success me-sm-1 mb-1" href="/vcard4" target="_blank">
                        Tema 4
                        <span class="avatar-xs">
                            <span class="avatar-title rounded-circle btn-icon">
                                <i class="mdi mdi-chevron-double-right"></i>
                            </span>
                        </span>
                    </a>
                    <a class="btn btn-success me-sm-1 mb-1" href="/vcard5" target="_blank">
                        Tema 5
                        <span class="avatar-xs">
                            <span class="avatar-title rounded-circle btn-icon">
                                <i class="mdi mdi-chevron-double-right"></i>
                            </span>
                        </span>
                    </a>
                    <a class="btn btn-success me-sm-1 mb-1" href="/vcard6" target="_blank">
                        Tema 6
                        <span class="avatar-xs">
                            <span class="avatar-title rounded-circle btn-icon">
                                <i class="mdi mdi-chevron-double-right"></i>
                            </span>
                        </span>
                    </a>
                    <a class="btn btn-success me-sm-1 mb-1" href="/vcard7" target="_blank">
                        Tema 7
                        <span class="avatar-xs">
                            <span class="avatar-title rounded-circle btn-icon">
                                <i class="mdi mdi-chevron-double-right"></i>
                            </span>
                        </span>
                    </a>
                    <a class="btn btn-success me-sm-1 mb-1" href="/vcard8" target="_blank">
                        Tema 8
                        <span class="avatar-xs">
                            <span class="avatar-title rounded-circle btn-icon">
                                <i class="mdi mdi-chevron-double-right"></i>
                            </span>
                        </span>
                    </a>
                    <a class="btn btn-success me-sm-1 mb-1" href="/vcard9" target="_blank">
                        Tema 9
                        <span class="avatar-xs">
                            <span class="avatar-title rounded-circle btn-icon">
                                <i class="mdi mdi-chevron-double-right"></i>
                            </span>
                        </span>
                    </a>
                    <a class="btn btn-success me-sm-1 mb-1" href="/vcard10" target="_blank">
                        Tema 10
                        <span class="avatar-xs">
                            <span class="avatar-title rounded-circle btn-icon">
                                <i class="mdi mdi-chevron-double-right"></i>
                            </span>
                        </span>
                    </a>

                </div>
            </div>
            <div class="col-lg-6">
                <img data-sizes="auto" data-src="{{ isset($setting['home_page_banner']) ? $setting['home_page_banner'] : asset('front/images/hero.png') }}" style="border-radius:15px" title="{{ env('APP_NAME') }}" alt="{{ env('APP_NAME') }}" class="lazyload img-fluid image-object-fit-cover" />
            </div>
        </div>
    </div>
</section>
<!-- end hero section -->

<!-- start features section -->
<section class="features-section" id="features">
    <div class="container">
        <h2 class="heading text-success text-center margin-b-80px">
            {{ __('messages.plan.features') }}
        </h2>
        <div class="row">
            @foreach($features as $feature)
            <div class="col-lg-4 col-md-6 features-section__block">
                <div class="border rounded-20 features-section__features-inner mx-xxl-2">
                    <div class="features-section__features-icon text-white fs-2 d-flex align-items-center justify-content-center">
                        <i class="mdi mdi-trophy-variant-outline"></i>
                        <img data-sizes="auto" data-src="{{ $feature->profile_image }}" title="{{ $feature->name }}" alt="{{ $feature->name }}" class="lazyload feature-image feature-image-card image-object-fit-cover">
                    </div>

                    <h3 class="text-secondary fw-light">{{ $feature->name }}</h3>
                    <p class="text-gray-100 fs-18 mb-0">
                        {!! $feature->description !!}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- end features section -->

<!-- start about section -->
<section class="about-section overflow-hidden padding-t-100px" id="about">
    <div class="container">
        <h2 class="heading text-success text-center margin-b-100px">
            {{ __('auth.modern_&_powerful_interface') }}
        </h2>
        <div class="row pt-3 pt-lg-0">
            <div class="col-12 margin-b-80px">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-5 position-relative">
                        <img data-sizes="auto" data-src="{{ isset($aboutUS[0]['about_url']) ? $aboutUS[0]['about_url'] : asset('front/images/about-1.png') }}" title="About" alt="About" class="lazyload img-fluid d-block mx-auto image-object-fit-cover" />
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="about-section__about-right-content about-content mt-4 mt-lg-0">
                            <div class="d-flex align-items-center flex-wrap">
                                <div>
                                    <h3 class="w-100 mb-3"> {{$aboutUS[0]['title']}}</h3>
                                    <p class="text-gray-100 fs-18 mb-0"> {!! $aboutUS[0]['description'] !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 margin-b-80px">
                <div class="row align-items-center flex-column-reverse flex-lg-row">
                    <div class="col-xl-6 col-lg-7">
                        <div class="about-section__about-left-content about-content mt-4 mt-lg-0">
                            <div class="d-flex align-items-center justify-content-lg-end flex-wrap">
                                <div>
                                    <h3 class="w-100 mb-3">{{ $aboutUS[1]['title'] }}</h3>
                                    <p class="text-gray-100 fs-18 mb-0">{!! $aboutUS[1]['description'] !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 position-relative">
                        <img data-sizes="auto" data-src="{{ isset($aboutUS[1]['about_url']) ? $aboutUS[1]['about_url'] : asset('front/images/about-2.png') }}" title="About" alt="About" class="lazyload img-fluid d-block mx-auto image-object-fit-cover" />
                    </div>
                </div>
            </div>
            <div class="col-12 margin-b-80px">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-5 position-relative">
                        <img data-sizes="auto" data-src="{{ isset($aboutUS[2]['about_url']) ? $aboutUS[2]['about_url'] : asset('front/images/about-3.png') }}" title="About" alt="About" class="lazyload img-fluid d-block mx-auto image-object-fit-cover" />
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="about-section__about-right-content about-content mt-4 mt-lg-0">
                            <div class="d-flex align-items-center flex-wrap">
                                <div>
                                    <h3 class="w-100 mb-3">{{ $aboutUS[2]['title']}}</h3>
                                    <p class="text-gray-100 fs-18 mb-0">{!! $aboutUS[2]['description'] !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end about section -->

<!-- start pricing section -->
<section class="pricing-plan-section padding-t-100px padding-b-100px" id="pricing">
    <div class="container">
        <h2 class="heading text-success text-center margin-b-100px">
            {{ __("auth.choose_a_plan_that's_right_for_you") }}
        </h2>
        <div class="pricing-carousel">
            @foreach($plans as $plan)
            <div class="pricing-plan-card card rounded-20">
                <div class="card-body text-center">
                    <h3 class="mb-1 mt-3 ">{{ $plan->name }}</h3>
                    <label class="fs-18">{{ __('messages.plan.no_of_vcards') }} : {{$plan->no_of_vcards }}</label>
                    <div class="d-flex justify-content-center my-3">
                        <h4 class="text-center mb-6 mt-2 pricing">
                            <span class="fs-4">{{ $plan->currency->currency_icon }}{{ $plan->price }}</span>
                            @if($plan->frequency == 1)
                            <span class="fs-5 fw-light ml-2">/ {{ __('messages.plan.months') }}</span>
                            @elseif($plan->frequency == 2)
                            <span class="fs-5 fw-light ml-2">/ {{ __('messages.plan.years') }}</span>
                            @endif
                        </h4>
                    </div>
                    <ul class="pricing-plan-features text-secondary text-start mx-auto fs-6">
                        <li class="active-check">
                            <span class="check-box"><i class="fa-solid fa-check"></i></span>
                            {{ __('Semua Template (Tema)') }}
                        </li>
                        @foreach(getPlanFeature($plan) as $feature => $value)
                        <li class="{{ $value == 1 ? 'active-check' : 'unactive-check' }}">
                            <span class="check-box"><i class="fa-solid fa-check"></i></span>
                            {{ __('messages.feature.'.$feature) }}
                        </li>
                        @endforeach
                    </ul>
                    @if(getLogInUser() && getLoggedInUserRoleId() != getSuperAdminRoleId())
                    <div class="mx-auto">
                        @if(!empty(getCurrentSubscription()) && $plan->id == getCurrentSubscription()->plan_id && !getCurrentSubscription()->isExpired())
                            @if($plan->price != 0)
                            <button type="button" class="btn btn-success rounded-pill mx-auto d-block cursor-remove-plan pricing-plan-button-active" data-id="{{ $plan->id }}">
                                {{ __('messages.subscription.currently_active') }}
                            </button>
                            @else
                            <button type="button" class="btn btn-info rounded-pill mx-auto d-block cursor-remove-plan">
                                {{ __('messages.subscription.renew_free_plan') }}
                            </button>
                            @endif
                        @else
                            @if(!empty(getCurrentSubscription()) && !getCurrentSubscription()->isExpired() && ($plan->price == 0 || $plan->price != 0))
                                @if($plan->hasZeroPlan->count() == 0)
                                <a href="{{ $plan->price != 0 ? route('choose.payment.type', $plan->id) : 'javascript:void(0)' }}" class="btn btn-primary rounded-pill mx-auto {{ $plan->price == 0 ? 'freePayment' : ''}}" data-id="{{ $plan->id }}" data-plan-price="{{ $plan->price }}">
                                    {{ __('messages.subscription.switch_plan') }}
                                </a>
                                @else
                                <button type="button" class="btn btn-info rounded-pill mx-auto d-block cursor-remove-plan">
                                    {{ __('messages.subscription.renew_free_plan') }}
                                </button>
                                @endif
                            @else
                                @if($plan->hasZeroPlan->count() == 0)
                                <a href="{{ $plan->price != 0 ? route('choose.payment.type', $plan->id) : 'javascript:void(0)' }}" class="btn btn-primary rounded-pill mx-auto  {{ $plan->price == 0 ? 'freePayment' : ''}}" data-id="{{ $plan->id }}" data-plan-price="{{ $plan->price }}">
                                    {{ __('messages.subscription.choose_plan') }}
                                </a>
                                @else
                                <button type="button" class="btn btn-info rounded-pill mx-auto d-block cursor-remove-plan">
                                    {{ __('messages.subscription.renew_free_plan') }}
                                </button>
                                @endif
                            @endif
                        @endif
                    </div>
                    @else
                        @if(empty(getLogInUser()))
                            <a href="{{ route('register') }}" class="btn btn-primary rounded-pill mx-auto">
                                {{ __('auth.get_started') }}
                            </a>
                        @else
                            @if(getLogInUser()->hasrole('super_admin'))
                            <a href="{{ route('sadmin.dashboard') }}" class="btn btn-primary rounded-pill mx-auto">
                                {{ __('messages.dashboard') }}
                            </a>
                            @endif
                        @endif
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- end pricing section -->

<!-- start testimonial section -->
@if(!$testimonials->isEmpty())
<section class="testimonial-section padding-t-100px" id="testimonial">
    <div class="container">
        <h2 class="heading text-success text-center margin-b-80px">
            {{ __('auth.stories_from_our_customers') }}
        </h2>
        <div class="testimonial-section__testimonial-block mx-auto">
            <div class="testimonial-carousel">
                @foreach($testimonials as $testimonial)
                <div class="testimonial-section__testimonial-card border rounded-20 position-relative {{$loop->iteration == 1 ? 'active' : ''}}">
                    <div class="quotation-mark">
                        <img data-sizes="auto" data-src="{{ asset('front/images/quotation.png') }}" class="lazyload" title="Quotation Mark" alt="Quotation Mark">
                    </div>
                    <p class="text-gray-100 fs-18 mb-4 pb-0">
                        {!! $testimonial->description !!}
                    </p>
                    <div class="d-flex profile-box align-items-center">
                        <img data-sizes="auto" data-src="{{ $testimonial->testimonial_url }}" title="profile" alt="Profile {{ env('APP_NAME') }}" class="lazyload profile-img rounded-circle img-fluid image-object-fit-cover">
                        <span class="ms-3">
                            <div class="profile-name mb-md-2 mb-1">{{ $testimonial->name }}</div>
                        </span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif
<!-- end testimonial section -->

<!-- start contact section -->
<section class="contact-section padding-t-100px padding-b-100px" id="contact">
    <h2 class="heading text-success text-center margin-b-80px">
        {{ __('messages.contact_us.contact') }}
    </h2>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-info mb-4">
                    <div class="d-flex align-items-center contact-info__block">
                        <div class="contact-info__contact-icon text-white fs-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <a href="mailto:{{ $setting['email'] }}"
                        class="text-decoration-none text-secondary contact-info__contact-label">{{ $setting['email'] }}</a>
                    </div>
                    <div class="d-flex align-items-center contact-info__block">
                        <div class="contact-info__contact-icon text-white fs-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <a href="tel:{{"+".$setting['prefix_code']."-".$setting['phone'] }}"
                        class="text-decoration-none text-secondary contact-info__contact-label">{{"+".$setting['prefix_code']."-".$setting['phone'] }}</a>
                    </div>
                    <div class="d-flex align-items-center contact-info__block">
                        <div class="contact-info__contact-icon text-white fs-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <p class="text-secondary contact-info__contact-label mb-0">
                            {{ $setting['address'] }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form class="contact-form" id="myForm">
                    @csrf
                    <div id="contactError" class="alert alert-danger d-none"></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-form__input-block">
                                <input name="name" id="name" type="text" class="form-control"
                                placeholder="{{ __('messages.front.enter_your_name') }}*" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form__input-block">
                                <input name="email" id="email" type="email" class="form-control"
                                placeholder="{{ __('messages.front.enter_your_email') }}*" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="contact-form__input-block">
                                <input name="subject" id="subject" type="text" class="form-control"
                                placeholder="{{ __('messages.common.subject') }}*" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="contact-form__input-block">
                                <textarea name="message" id="message" rows="4" class="form-control form-textarea"
                                placeholder="{{ __('messages.front.enter_your_message') }}*" required></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 text-end">
                            <input type="submit" id="submit" name="send" class="btn btn-primary"
                            value="{{ __('messages.contact_us.send_message') }}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end contact section -->

@endsection
@section('page_js')
<script src="{{ env('APP_URL') }}{{ mix('assets/js/home/contact.js') }}"></script>
@endsection