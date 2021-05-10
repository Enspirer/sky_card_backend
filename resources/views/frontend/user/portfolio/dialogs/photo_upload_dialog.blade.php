<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="photo_upload" aria-hidden="true" style="">
    <div class="modal-dialog modal-lg">
        <form method="post" action="{{route('frontend.user.companies.portfolio_store')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div style="background-image: url('{{url('light_theme/dashboard/impack.jpg')}}');height: 500px;background-size: cover;"></div>
                        </div>
                        <div class="col-md-8">
                            <h3>Upload Videos</h3><br>
                            <div class="control-group file-upload" id="file-upload1" style="background: transparent;/* padding-top: 220px; */padding-right: 0px;padding-bottom: 0px;padding-left: 0px;margin-top: 0px;height: 490px;border-style: dashed;border-color: #ada5a5;">
                                <div class="image-box text-center" style="background: transparent;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;margin-top: 0px;height: 490px;">
                                    <p style="line-height: normal;padding-top: 45%;">
                                        Upload your Company/Brand/Organization<br> Photo or Logo
                                    </p>
                                    <img src="" alt="" style="display: none;height: 480px;width: 100%;">
                                </div>
                                <div class="controls" style="display: none;">
                                    <input type="file" name="picture"/>
                                    <input type="hidden" value="{{$company_details->id}}" name="company_id">
                                    <input type="hidden" class="form-control" value="Images" name="content_type">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Upload Photos</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


<script>
    $(".image-box").click(function(event) {
        var previewImg = $(this).children("img");
        $(this)
            .siblings()
            .children("input")
            .trigger("click");
        $(this)
            .siblings()
            .children("input")
            .change(function() {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var urll = e.target.result;
                    $(previewImg).attr("src", urll);
                    previewImg.parent().css("background", "transparent");
                    previewImg.show();
                    previewImg.siblings("p").hide();
                };
                reader.readAsDataURL(this.files[0]);
            });
    });
</script>
