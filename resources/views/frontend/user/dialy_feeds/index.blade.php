@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <div class="col-md-6">
                    @include('frontend.user.dialy_feeds.sections.feeds_section')
                </div>
            </div>
        </div>
    </div>


@endsection
