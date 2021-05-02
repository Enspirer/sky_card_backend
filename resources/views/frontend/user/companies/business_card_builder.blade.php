@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )



@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            @include('frontend.user.dashboard_components.title_bar',[
            'title_icon' => 'fa fa-building',
            'title_description' => 'You can create your own company page with SkyCards',
            'title_name'=>'Create Company']
            )

            <div class="row">

            </div>

        </div>
    </div>


@endsection
