<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    @if($vcard->meta_description)
        <meta name="description" content="{{$vcard->meta_description}}">
    @endif
    @if($vcard->meta_keyword)
        <meta name="keywords" content="{{$vcard->meta_keyword}}">
    @endif
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if($vcard->site_title && $vcard->home_title)
        <title>{{ $vcard->home_title }} | {{ $vcard->site_title }}</title>
    @else
        <title>{{ $vcard->name }} | {{ getAppName() }}</title>
    @endif
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">

    {{--css link--}}
    <link rel="stylesheet" href="{{ asset('assets/css/vcard9.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-vcard.css') }}">
    <link href="{{ asset('backend/css/vendor.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/css/3rd-party.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('backend/css/3rd-party-custom.css') }}" rel="stylesheet" type="text/css"/>

     {{--font-awesome Cdn--}}
     <link href="{{ asset('backend/css/all.min.css') }}" rel="stylesheet">

    {{--slick slider--}}
    <link rel="stylesheet" href="{{ asset('backend/css/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/slick/slick-theme.css') }}">

    {{--google Font--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Roboto&display=swap" rel="stylesheet">

    <title>{{ $vcard->name }} | {{ getAppName() }}</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ getFaviconUrl() }}" type="image/png">
    @if($vcard->font_family)
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family={{$vcard->font_family}}">
    @endif

    @if($vcard->font_family || $vcard->font_size || $vcard->custom_css)
        <style>
        @if($vcard->font_family)
        body {
            font-family: {{$vcard->font_family}};
        }

        @endif
         @if($vcard->font_size)
        div > h4 {
            font-size: {{$vcard->font_size}}px !important;
        }
            @endif
            {!! $vcard->custom_css !!}
        </style>
    @endif
</head>
<body>
<div class="container">
    @include('vcards.password')
    <div class="vcard-nine main-content w-100 mx-auto overflow-hidden content-blur">
        <div class="d-flex justify-content-end">
            <div class="language pt-4 me-2">
                <ul class="text-decoration-none">
                    <li class="dropdown1 dropdown lang-list">
                        <a href="#" class="dropdown-toggle lang-head" data-toggle="dropdown" role="button"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="fa-solid fa-language me-2"></i>{{getSelectedLanguageName()}}</a>
                        <ul class="dropdown-menu start-0 lang-hover-list">
                            @foreach(\App\Models\User::LANGUAGES as $key => $language)
                                <li class="{{ getSelectedLanguageName() == $language ? 'active' : '' }}">
                                    <img src="{{asset(\App\Models\User::FLAG[$key])}}" width="25px" height="20px"
                                         class="me-3"><a href="javascript:void(0)" id="languageName"
                                                         data-name="{{ $key }}">{{ $language }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        {{--banner--}}
        <div class="vcard-nine__banner w-100 position-relative">
            <img src="{{ $vcard->cover_url }}" class="img-fluid banner-image" alt="banner"/>
        </div>
        {{--profile--}}
        <div class="vcard-nine__profile position-relative">
            <div class="avatar position-absolute top-0 start-50 translate-middle">
                <img src="{{ $vcard->profile_url }}" alt="profile-img" class="rounded-circle"/>
            </div>
        </div>
        {{--profile details--}}
        <div class="vcard-nine__profile-details py-3 px-sm-3 px-2">
            <h4 class="profile-name text-center mb-1">{{ ucwords($vcard->first_name.' '.$vcard->last_name) }}</h4>
            <span class="profile-designation text-center d-block">{{ ucwords($vcard->occupation) }}</span>
            @if(getSocialLink($vcard))
                <div class="social-icons d-flex justify-content-center pt-sm-5 pt-4 flex-wrap mx-auto">
                    @foreach(getSocialLink($vcard) as $value)
                        <span class="rounded-circle d-flex justify-content-center align-items-center m-sm-3 m-1">
                   {!! $value !!}
                </span>
                    @endforeach
                </div>
            @endif
        </div>
        {{--event--}}
        <div class="vcard-nine__event py-3 px-3 mt-2 position-relative">
            <div class="container">
                <div class="row g-3">
                    @if($vcard->email)
                        <div class="col-sm-6 col-12">
                            <div class="card event-card px-3 py-4 h-100 border-0 flex-sm-row flex-column align-items-center">
                            <span class="event-icon d-flex justify-content-center align-items-center">
                                <img src="{{asset('assets/img/vcard9/vcard9-email.png')}}" alt="email"/>
                            </span>
                                <div class="event-detail ms-sm-3 mt-sm-0 mt-4">
                                    <h6 class="text-sm-start text-center">{{ __('messages.vcard.email_address') }}</h6>
                                    <h5><a href="mailto:{{ $vcard->email }}"
                                           class="event-name text-sm-start text-center mb-0">{{ $vcard->email }}</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($vcard->phone)
                        <div class="col-sm-6 col-12">
                            <div class="card event-card px-3 py-4 h-100 border-0 flex-sm-row flex-column align-items-center">
                            <span class="event-icon d-flex justify-content-center align-items-center">
                                <img src="{{asset('assets/img/vcard9/vcard9-phone.png')}}" alt="phone"/>
                            </span>
                                <div class="event-detail ms-sm-3 mt-sm-0 mt-4">
                                    <h6 class="text-sm-start text-center">{{ __('messages.vcard.mobile_number') }}</h6>
                                    <h5><a href="tel:{{ $vcard->phone }}"
                                           class="event-name text-center mb-0">+{{ $vcard->region_code }} {{ $vcard->phone }}</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($vcard->dob)
                        <div class="col-sm-6 col-12">
                            <div class="card event-card px-3 py-4 h-100 border-0 flex-sm-row flex-column align-items-center">
                            <span class="event-icon d-flex justify-content-center align-items-center">
                                <img src="{{asset('assets/img/vcard9/vcard9-birthday.png')}}" alt="birthday"/>
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
                                <img src="{{asset('assets/img/vcard9/vcard9-location.png')}}" alt="location"/>
                            </span>
                                <div class="event-detail ms-sm-3 mt-sm-0 mt-4">
                                    <h6 class="text-sm-start text-center">{{ __('messages.vcard.location') }}</h6>
                                    <h5 class="event-name text-center mb-0">{{ ucwords($vcard->location) }}</h5>
                                </div>
                            </div>
                        </div>
                        @endif
                </div>
            </div>
        </div>
        {{--our services--}}
        @if($vcard->services->count())
            <div class="vcard-nine__service py-4 px-3 position-relative px-sm-3">
                <h4 class="heading-right heading-line position-relative text-center">{{ __('messages.vcard.our_service') }}</h4>
                <div class="container mt-5">
                    <div class="row service-row g-4">
                        @foreach($vcard->services as $service)
                            <div class="col-12">
                                <div
                                    class="card service-card h-100 w-100 p-3 border-0 d-flex align-items-center flex-sm-row">
                                    <div
                                        class="service-image rounded-circle d-flex justify-content-center align-items-center justify-content-center">
                                        <img src="{{$service->service_icon}}" class="rounded-circle" alt="service"/>
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
        @if($vcard->gallery->count())
        <div class="vcard-nine__gallery py-4 px-3 position-relative px-sm-3">
            <h4 class="heading-right heading-line position-relative text-center">{{ __('messages.plan.gallery') }}</h4>
            <div class="container">
                <div class="row g-3 gallery-slider mt-4">
                    @foreach($vcard->gallery as $file)
                    <div class="col-6">
                        <div class="card gallery-card p-3 border-0 w-100">
                            <div class="gallery-profile">
                                @if($file->link == null)
                                    <img src="{{$file->gallery_image}}" alt="profile" class="w-100"/>
                                @else
                                    <a id="video_url" data-id="https://www.youtube.com/embed/{{YoutubeID($file->link)}}" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                       class="gallery-link">
                                        <div class="gallery-item"
                                             style="background-image: url(&quot;https://vcard.waptechy.com/assets/img/video-thumbnail.png&quot;)">
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
                            <iframe id="video" src="//www.youtube.com/embed/Q1NKMPhP8PY"
                                    class="w-100" height="315">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{--products--}}
        @if($vcard->products->count())
            <div class="vcard-nine__product py-4 px-3 position-relative px-sm-3">
                <h4 class="heading-left heading-line position-relative text-center">{{ __('messages.plan.products') }}</h4>
                <div class="container">
                    <div class="row g-3 product-slider mt-4">
                        @foreach($vcard->products as $product)
                            <div class="col-6">
                                <div class="card product-card p-3 border-0 w-100">
                                    <div class="product-profile">
                                        <img src="{{ $product->product_icon }}" alt="profile" class="w-100"
                                             height="208px"/>
                                    </div>
                                    <div class="product-details mt-3">
                                        <h4>{{$product->name}}</h4>
                                        <p class="mb-2">
                                            {{$product->discription}}
                                        </p>
                                        @if($product->currency_id && $product->price)
                                            <span
                                                class="text-black">{{$product->currency->currency_icon}}{{$product->price}}</span>
                                        @elseif($product->price)
                                    <span class="text-black">{{$product->price}}</span>
                                @else
                                    <span class="text-black">N/A</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
        {{--testimonial--}}
        @if($vcard->testimonials->count())
            <div class="vcard-nine__testimonial py-4 px-3 position-relative px-sm-3">
                <h4 class="heading-right heading-line position-relative text-center">{{ __('messages.plan.testimonials') }}</h4>
                <div class="container">
                    <div class="row g-3 testimonial-slider mt-4">
                        @foreach($vcard->testimonials as $testimonial)
                            <div class="col-12">
                                <div class="card testimonial-card p-3 border-0 w-100">
                                    <div class="testimonial-user d-flex flex-sm-row flex-column align-items-center justify-content-sm-start justify-content-center">
                                        <img src="{{ $testimonial->image_url }}" alt="profile" class="rounded-circle"/>
                                        <div class="user-details d-flex flex-column ms-sm-3 mt-sm-0 mt-2">
                                            <span class="user-name text-sm-start text-center">{{ ucwords($testimonial->name) }}</span>
                                            <span class="user-designation text-sm-start text-center"></span>
                                        </div>
                                    </div>
                                    <p class="review-message mb-2 text-sm-start text-center mt-2">
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
        <div class="vcard-nine__qr-code py-4 px-3 position-relative px-sm-3">
            <h4 class="heading-left position-relative text-center">{{ __('messages.vcard.qr_code') }}</h4>
            <div class="container mt-5">
                <div class="card qr-code-card flex-sm-row flex-column justify-content-center align-items-center mt-3 border-0">
                    <div class="mx-2">
                        <div class="qr-profile mb-3 d-flex justify-content-center">
                            <img src="{{$vcard->profile_url}}" alt="qr profile" class="mx-auto d-block rounded-circle"/>
                        </div>
                        <a class="qr-code-btn text-white mt-4 d-sm-block d-none mx-auto text-decoration-none"
                           href="data:image/svg;base64,{{ base64_encode(QrCode::size(150)->format('svg')->generate(Request::url())) }}"
                           download="qr_code.svg">{{ __('messages.vcard.download_my_qr_code') }}</a>
                    </div>
                    <div class="qr-code-scanner mx-md-4 mx-2 p-4 bg-white">
                        {!! QrCode::size(130)->format('svg')->generate(Request::url()); !!}
                    </div>
                    <div class="qr-profile mt-3 d-flex justify-content-center d-sm-none d-block">
                        <a class="qr-code-btn text-white mt-4 d-block mx-auto text-decoration-none"
                           href="data:image/svg;base64,{{ base64_encode(QrCode::size(150)->format('svg')->generate(Request::url())) }}"
                           download="qr_code.svg">{{ __('messages.vcard.download_my_qr_code') }}</a>
                    </div>
                </div>
            </div>
        </div>
        {{--business hour--}}
        @if($vcard->businessHours->count())
            <div class="vcard-nine__timing py-4 px-3 position-relative px-sm-3">
                <h4 class="heading-right position-relative text-center">{{ __('messages.business.business_hours') }}</h4>
                <div class="container">
                    <div class="row mt-3 justify-content-center">
                        <div class="col-sm-8 col-12 time-section p-sm-3 p-2">
                            @foreach($vcard->businessHours as $day)
                                <div class="d-flex justify-content-center time-zone">
                                    <span class="me-2">{{ strtoupper(__('messages.business.'.\App\Models\BusinessHour::DAY_OF_WEEK[$day->day_of_week]))}} :</span>
                                    <span>{{ $day->start_time.' - '.$day->end_time }}</span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{--Appointment--}}
        @if($vcard->appointmentHours->count())
            <div class="vcard-nine__appointment py-3 px-sm-4 px-3 mt-2 position-relative">
                <h4 class="heading-left heading-line position-relative text-center mb-5">{{__('messages.make_appointments')}}</h4>
                <div class="container">
                    <div class="appointment-card p-3">
                        <div class="row d-flex align-items-center justify-content-center mb-3">
                            <div class="col-md-2">
                                <label for="date" class="appoint-date mb-2">{{__('messages.date')}}</label>
                            </div>
                            <div class="col-md-10">
                                {{ Form::text('date', null, ['class' => 'date appoint-input', 'placeholder' => 'Pick a Date','id'=>'pickUpDate']) }}
                            </div>
                        </div>
                        <div class="row d-flex align-items-center justify-content-center mb-md-3">
                            <div class="col-md-2">
                                <label for="text" class="appoint-date mb-2">{{__('messages.hour')}}</label>
                            </div>
                            <div class="col-md-10">
                                <div id="slotData" class="row">
                                </div>
                            </div>
                        </div>


                        <button type="button"
                                class="appointmentAdd appoint-btn text-white mt-4 d-block mx-auto ">{{__('messages.make_appointments')}}
                        </button>
                </div>
            </div>
        </div>
            @include('vcardTemplates.appointment')
        @endif


        {{--contact us--}}
        @php $currentSubs = $vcard->subscriptions()->where('status', \App\Models\Subscription::ACTIVE)->latest()->first() @endphp
        @if($currentSubs && $currentSubs->plan->planFeature->enquiry_form)
            <div class="vcard-nine__contact py-4 px-3 position-relative px-sm-3">
                <h4 class="heading-right position-relative text-center">{{ __('messages.contact_us.contact_us') }}</h4>
                <div class="container mt-5">
                    <div class="row mt-4">
                        <div class="col-12 px-0">
                            <form id="enquiryForm">
                                @csrf
                                <div class="contact-form px-sm-2">
                                    <div id="enquiryError" class="alert alert-danger d-none"></div>
                                    <div class="mb-3">
                                        <input type="text" name="name" class="form-control" id="name"
                                               placeholder="{{__('messages.form.your_name')}}">
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" name="email" class="form-control" id="email"
                                               placeholder="{{__('messages.form.your_email')}}">
                                    </div>
                                    <div class="mb-3">
                                        <input type="tel" name="phone" class="form-control" id="mobile"
                                               placeholder="{{__('messages.form.phone')}}">
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control" name="message"
                                                  placeholder="{{__('messages.form.type_message')}}" id="message"
                                                  rows="5"></textarea>
                                    </div>
                                    <button type="submit"
                                            class="contact-btn text-white mt-4 d-block mx-auto">{{ __('messages.contact_us.send_message') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="d-sm-flex justify-content-center mt-5 pb-5">
                    <button type="submit" class="vcard-nine-btn mt-4 d-block btn text-white "
                            onclick="downloadVcard('{{ $vcard->name }}.vcf',{{ $vcard->id }})"><i
                                class="fas fa-download me-2"></i>{{ __('messages.vcard.download_vcard') }}</button>
                    {{--share btn--}}
                    <button type="button" class="vcard9-share share-btn d-block btn mt-4 ms-sm-3">
                        <a class="text-decoration-none text-white">
                            <i class="fas fa-share-alt me-2"></i>{{ __('messages.vcard.share') }}</a>
                    </button>
                </div>

            </div>
        @endif
        @if($vcard->branding == 0)
            <div class="text-center">
                <small>{{ __('messages.made_by') }} {{ $setting['app_name'] }}</small>
            </div>
        @endif
    </div>

    {{-- share modal code--}}
    <div id="vcard9-shareModel" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ __('messages.vcard.share_my_vcard') }}</h5>
                    <button type="button" aria-label="Close" class="btn btn-sm btn-icon btn-active-color-danger"
                            data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                             version="1.1">
							<g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                               fill="#000000">
								<rect fill="#000000" x="0" y="7" width="16" height="2" rx="1"/>
								<rect fill="#000000" opacity="0.5"
                                      transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                      x="0" y="7" width="16" height="2" rx="1"/>
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
                        <div class="col-sm-12 d-flex justify-content-between">
                            <a href="http://www.facebook.com/sharer.php?u={{$shareUrl}}"
                               target="_blank" class="mx-2 share9" title="Facebook">
                                <i class="fab fa-facebook fa-3x" style="color: #1B95E0"></i>
                            </a>
                            <a href="http://twitter.com/share?url={{$shareUrl}}&text={{$vcard->name}}&hashtags=sharebuttons"
                               target="_blank" class="mx-2 share9" title="Twitter">
                                <i class="fab fa-twitter fa-3x" style="color: #1DA1F3"></i>
                            </a>
                            <a href="http://www.linkedin.com/shareArticle?mini=true&url={{$shareUrl}}"
                               target="_blank" class="mx-2 share9" title="Linkedin">
                                <i class="fab fa-linkedin fa-3x" style="color: #1B95E0"></i>
                            </a>
                            <a href="mailto:?Subject=&Body={{$shareUrl}}" target="_blank"
                               class="mx-2 share9" title="Email">
                                <i class="fas fa-envelope fa-3x" style="color: #191a19  "></i>
                            </a>
                            <a href="http://pinterest.com/pin/create/link/?url={{$shareUrl}}"
                               target="_blank" class="mx-2 share9">
                                <i class="fab fa-pinterest fa-3x" style="color: #bd081c" title="Pinterest"></i>
                            </a>
                            <a href="http://reddit.com/submit?url={{$shareUrl}}&title={{$vcard->name}}"
                               target="_blank" class="mx-2 share9" title="Reddit">
                                <i class="fab fa-reddit fa-3x" style="color: #ff4500"></i>
                            </a>
                            <a href="https://wa.me/?text={{$shareUrl}}" target="_blank" class="mx-2 share9" title="Whatsapp">
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
@include('vcardTemplates.template.templates')

<script type="text/javascript" src="{{ asset('backend/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/js/slick.min.js') }}" type="text/javascript"></script>
@if($vcard->google_analytics)
    {!! $vcard->google_analytics !!}
@endif
@if($vcard->custom_js)
    {!! $vcard->custom_js !!}
@endif
<script>
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
                    dots: true
                }
            }
        ]
    });
</script>
<script>
    let isEdit = false;
    let password = "{{!empty($vcard->password) }}";
    let passwordUrl = "{{ route('vcard.password', $vcard->id) }}";
    let enquiryUrl = "{{ route('enquiry.store', $vcard->id) }}";
    let appointmentUrl = "{{ route('appointment.store', $vcard->id) }}";
    let slotUrl = "{{route('appointment-session-time')}}";
    let appUrl = "{{ config('app.url') }}";
    let vcardId = {{$vcard->id}};
    let languageChange = "{{ url('language') }}";
    let lang = "{{checkLanguageSession()}}";
</script>
<script src="{{ mix('assets/js/custom/helpers.js') }}"></script>
<script src="{{ asset('backend/js/vendor.js') }}"></script>
<script src="{{ mix('assets/js/custom/custom.js') }}"></script>
<script src="{{ mix('assets/js/vcards/vcard-view.js') }}"></script>

</body>
</html>
