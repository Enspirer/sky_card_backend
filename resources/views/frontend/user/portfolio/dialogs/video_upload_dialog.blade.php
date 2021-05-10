 <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="">
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
                            <h3>Upload Videos</h3><br>
                            <div class="form-group">
                                <label>Video Type</label>
                                <select class="form-control" name="video_type" required>
                                    <option value="Youtube Video">Youtube Video</option>
                                    <option value="Uploaded Video" disabled>Upload Video</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Video Link</label>
                                <input type="hidden" value="{{$company_details->id}}" name="company_id">
                                <input type="text" class="form-control" value="" name="video_link">
                            </div>
                            <div  class="form-group">
                                <label>Caption</label>
                                <input type="text" class="form-control" value="" name="caption" required>
                                <input type="hidden" class="form-control" value="Videos" name="content_type">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="10" name="description"></textarea>
                            </div>
                            <input type="hidden" class="form-control" value="Videos" name="content_type">

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