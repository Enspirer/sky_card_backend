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
                            <a role="tab" class="nav-link show" id="tab-2" data-toggle="tab" href="#tab-content-3" aria-selected="false">
                                <span>Website Links</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane tabs-animation fade active show" id="tab-content-1" role="tabpanel">
                            <div class="row">
                                <div class="col-md-3">
                                    <div style="padding: 20px;border-style: dashed;border-color: grey;text-align: center;padding-top: 120px;padding-bottom: 110px;" data-toggle="modal" data-target="#photo_upload">Add Photos</div>
                                </div>
                                @foreach($items as $image_item)
                                    @if($image_item->content_type == 'Images')
                                        <div class="col-md-4">
                                            <div class="card" style="">
                                                <div class="card-image">
                                                    <div style="background-image: url('{{$image_item->photo_link}}');height: 250px;background-size: contain;background-repeat: no-repeat;background-position: center;border-style: groove;"></div>
                                                </div>

                                                <div class="card-body">
                                                    <span class="card-title">{{$image_item->caption}}</span>
                                                </div><!-- card content -->
                                            </div>
                                        </div>
                                    @else

                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4">
                                    <div style="padding: 20px;border-style: dashed;border-color: grey;text-align: center;padding-top: 120px;padding-bottom: 110px;" data-toggle="modal" data-target=".bd-example-modal-lg">Add Videos</div>
                                </div>
                                @foreach($items as $video_items)
                                    @if($video_items->content_type == 'Videos')
                                        <div class="col-md-4">
                                            <div class="card" style="">
                                                <div class="card-image">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$video_items->youtube_link}}" frameborder="0" allowfullscreen></iframe>
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <span class="card-title">{{$video_items->caption}}</span>
                                                </div><!-- card content -->
                                            </div>
                                        </div>
                                    @else

                                    @endif


                                @endforeach

                            </div>
                        </div>

                        <div class="tab-pane tabs-animation fade" id="tab-content-3" role="tabpanel">
                            <div class="row">
                                <div class="col-md-4">
                                    <div style="padding: 20px;border-style: dashed;border-color: grey;text-align: center;padding-top: 120px;padding-bottom: 110px;" data-toggle="modal" data-target="#website_links_dialog">Add Website</div>
                                </div>
                                @foreach($items as $website_link)
                                    @if($website_link->content_type == 'Website Links')

                                    @endif
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
    @push('dialog-push')
        @include('frontend.user.portfolio.dialogs.video_upload_dialog')
        @include('frontend.user.portfolio.dialogs.photo_upload_dialog')
        @include('frontend.user.portfolio.dialogs.website_links_dialog')

    @endpush
@endsection
