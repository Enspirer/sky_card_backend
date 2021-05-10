@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                @if(count($cards) != 0)
                    @foreach($cards  as $my_cad)

                    @endforeach
                @else

                    <div class="col-md-12">
                        <div style="text-align: center;padding: 100px;">
                            <i class="fa fa-id-card" style="color: darkgray;font-size: 110px;"></i>
                            <h3 style="text-align: center;margin-top: 10px;">Cards Not Found</h3>
                            <p>Don't worry you can create own card for your business</p>
                            <button class="btn btn-primary"  data-toggle="modal" data-target=".bd-example-modal-lg">Add Cards your Holder</button>
                        </div>
                    </div>
                @endif


            </div>
        </div>
    </div>

    @push('dialog-push')
        @include('frontend.user.my_card_holder.dialogs.add_cards')
    @endpush
@endsection
