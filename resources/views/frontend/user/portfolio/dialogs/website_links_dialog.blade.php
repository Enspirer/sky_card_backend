<div class="modal fade bd-example-modal-lg" tabindex="-1" id="website_links_dialog" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="">
    <div class="modal-dialog modal-lg">
        <form method="post" action="{{route('frontend.user.companies.portfolio_store')}}">
            {{csrf_field()}}
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div style="background-image: url('{{url('light_theme/dashboard/impack.jpg')}}');height: 300px;background-size: cover;"></div>
                        </div>
                        <div class="col-md-8">
                            <h3>Add Website</h3><br>

                            <div class="form-group">
                                <label>Caption</label>
                                <input type="text" class="form-control" value="" name="caption">
                            </div>

                            <div class="form-group">
                                <label>Website Link</label>
                                <input type="hidden" value="{{$company_details->id}}" name="company_id">
                                <input type="text" class="form-control" value="" name="website">
                            </div>
                            <input type="hidden" class="form-control" value="Website Links" name="content_type">

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