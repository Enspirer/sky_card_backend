<div class="container" style="text-align: center;padding-top: 50px;padding-bottom: 100px">
    <div class="row">

    </div>

    <div class="" style="background-image: url('{{url('/img/frontend/card.svg')}}');height: 150px;background-position: center;background-repeat: no-repeat;background-size: contain;"></div>
    <h3><b>Congratulation !!</b></h3>
    <br>
    <h4>Your Business Card Almost Done</h4>
    <p></p>
    <a href="{{route('frontend.view_card',$cardDetails->slug)}}" target="_blank" class="btn btn-primary">View Your Business Card</a>
</div>








@push('dialog-push')
    @include('frontend.user.companies.sections.design_engine.dialogs.publish_window')
@endpush