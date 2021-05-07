<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="photo_upload" aria-hidden="true" style="">
    <div class="modal-dialog modal-lg">
        <form method="post" action="{{route('frontend.user.companies.portfolio_store')}}">
            {{csrf_field()}}
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div style="background-image: url('{{url('light_theme/dashboard/impack.jpg')}}');height: 500px;background-size: cover;"></div>
                        </div>
                        <div class="col-md-8">
                           
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Video</button>
                </div>
            </div>
        </form>

    </div>
</div>