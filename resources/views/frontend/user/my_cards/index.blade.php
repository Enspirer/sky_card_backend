@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

    <link href="{{url('light_theme/dashboard/my_card/card_style.css')}}" rel="stylesheet">

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                @if(count($my_cards) != 0)
                    @foreach($my_cards  as $my_cad)
                        @include('frontend.user.my_cards.sections.card_item')
                    @endforeach
                @else

                    <div class="col-md-12">
                        <div style="text-align: center;padding: 100px;">
                            <i class="fa fa-id-card" style="color: darkgray;font-size: 110px;"></i>
                            <h3 style="text-align: center;margin-top: 10px;">Cards Not Found</h3>
                            <p>Don't worry you can create own card for your business</p>
                            <button class="btn btn-primary"  data-toggle="modal" data-target=".bd-example-modal-lg">Create your own Business card</button>
                        </div>
                    </div>
                @endif


            </div>
        </div>
    </div>
    @push('dialog-push')
        @include('frontend.user.my_cards.sections.dialogs.create_business_card')
    @endpush
@endsection
