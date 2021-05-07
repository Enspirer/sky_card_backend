@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

    <link href="{{url('light_theme/dashboard/my_card/card_style.css')}}" rel="stylesheet">

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="card" style="padding: 10px;padding-top: 60px;padding-bottom: 60px;">
                <div class="container">
                    <div class="row">

                    </div>

                    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                        <li class="nav-item">
                            <a role="tab" class="nav-link show active" id="tab-1" data-toggle="tab" href="#tab-content-1" aria-selected="true">
                                <span>Photos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a role="tab" class="nav-link show" id="tab-2" data-toggle="tab" href="#tab-content-2" aria-selected="false">
                                <span>Videos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a role="tab" class="nav-link show" id="tab-2" data-toggle="tab" href="#tab-content-2" aria-selected="false">
                                <span>Website Links</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade active show" id="tab-content-1" role="tabpanel">
                            <div class="row">
                                <div class="col-md-3">
                                    <div style="padding: 30px;border-style: dashed;border-color: grey;text-align: center;padding-top: 80px;padding-bottom: 80px;">Add Photos</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
                            <div class="row">
                                <div class="col-md-3">
                                    <div style="padding: 30px;border-style: dashed;border-color: grey;text-align: center;padding-top: 80px;padding-bottom: 80px;" data-toggle="modal" data-target=".bd-example-modal-lg">Add Videos</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    @push('dialog-push')
        @include('frontend.user.portfolio.dialogs.video_upload_dialog')
    @endpush
@endsection
