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
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <form class="" action="" method="post">
                        {{csrf_field()}}
                        <div  class="row">
                            <div class="col-md-6">
                                <div class="" style="border-style: dashed;padding: 200px;border-color: grey;border-width: 2px;text-align: center">
                                    <i class="fa fa-images" style="font-size: 100px;color: grey"></i><br><br>
                                    Company Image
                                </div>
                            </div>

                            <div class="col-md-6">
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="exampleEmail11" class="">Email</label>
                                                <input name="email" id="exampleEmail11" placeholder="with a placeholder" type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="examplePassword11" class="">Password</label>
                                                <input name="password" id="examplePassword11" placeholder="password placeholder" type="password" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="exampleAddress" class="">Address</label>
                                        <input name="address" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control">
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="exampleAddress2" class="">Address 2</label>
                                        <input name="address2" id="exampleAddress2" placeholder="Apartment, studio, or floor" type="text" class="form-control">
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="position-relative form-group">
                                                <label for="exampleCity" class="">City</label>
                                                <input name="city" id="exampleCity" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="exampleState" class="">State</label>
                                                <input name="state" id="exampleState" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="position-relative form-group">
                                                <label for="exampleZip" class="">Zip</label>
                                                <input name="zip" id="exampleZip" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
