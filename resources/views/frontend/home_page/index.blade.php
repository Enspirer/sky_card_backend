@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    @include('frontend.home_page.sections.top_slider')
    @include('frontend.home_page.sections.digital_bussiness_card_section')
    @include('frontend.home_page.sections.sky_club_section')
    @include('frontend.home_page.sections.sky_dialy_section')

    @include('frontend.home_page.sections.sky_vip')

    @include('frontend.home_page.sections.contact_organizer_section')
    @include('frontend.home_page.sections.sky_card_app_section')

@endsection

@push('after-scripts')
@if(config('access.captcha.contact'))
    @captchaScripts
@endif
@endpush














