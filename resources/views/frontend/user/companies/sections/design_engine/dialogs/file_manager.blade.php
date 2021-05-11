<div class="modal fade bd-example-modal-lg" data-backdrop="static" data-keyboard="false" id="cover_photo_picker" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="mb-3">
                    <div class="card-header">
                        <ul class="nav nav-justified">
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-0" class="nav-link active show">Library</a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-1" class="nav-link show">Upload</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-eg7-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card backimage" id="image1">
                                            <div style="background-image: url('{{url('files/cover_images/1.jpg')}}');height: 160px;" onclick="update_cover_photo('1.jpg','image1')"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card backimage" id="image2">
                                            <div onclick="update_cover_photo('2.jpg','image2')" style="background-image: url('{{url('files/cover_images/2.jpg')}}');height: 160px;" ></div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card backimage" id="image3">
                                            <div onclick="update_cover_photo('3.jpg','image3')" style="background-image: url('{{url('files/cover_images/3.jpg')}}');height: 160px;"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card backimage" id="image4">
                                            <div onclick="update_cover_photo('4.jpg','image4')" style="background-image: url('{{url('files/cover_images/4.jpg')}}');height: 160px;"></div>
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <div class="">
                                    <button onclick="apply_cover_photo()" class=" btn btn-primary pull-right" id="select_this" data-dismiss="modal" style="display: none;margin-right: 4px;margin-left: 4px;">Select This</button>
                                    <button type="button" class="btn btn-secondary pull-right" onclick="reset_cover_photo()" data-dismiss="modal" style="margin-right: 4px;margin-left: 4px;">Close</button>
                                </div>
                            </div>
                            <div class="tab-pane show" id="tab-eg7-1" role="tabpanel">
                                <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
                                <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
                                <form action="" class="dropzone" id="dropzone">
                                    {{csrf_field()}}
                                    <input type="hidden" value="{{$cardDetaials->id}}" name="card_id">
                                </form>
                                <div class=""><br>
                                    <button onclick="apply_cover_photo()" class=" btn btn-primary pull-right" id="upload_photo" data-dismiss="modal" style="display: none;margin-right: 4px;margin-left: 4px;">Upload Photo</button>
                                    <button type="button" class="btn btn-secondary pull-right" onclick="reset_cover_photo()" data-dismiss="modal" style="margin-right: 4px;margin-left: 4px;">Close</button>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-eg7-2" role="tabpanel">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<script>

    var myDropzone = new Dropzone("#dropzone", {
        url: "{{route('frontend.user.companies.upload_card_cover_photo')}}",
        maxFilesize: 2, // MB
    });

    myDropzone.on("complete", function(file) {
        $('#upload_photo').show();
        var all_thumbs = $('.backimage');
        all_thumbs.css('border-color', 'none');
        all_thumbs.css('border-style', 'none');
        all_thumbs.css('border-width', '0px');
        $('#select_this').hide();
    });



    function update_cover_photo(file_name,imageid) {
            $.post('{{route('cover_photo_update')}}', { business_card_id: "{{$cardDetaials->id}}", file_name : file_name},
                function(returnedData){
                    var image_thumb = $('#'+imageid);
                    var all_thumbs = $('.backimage');

                    all_thumbs.css('border-color', 'none');
                    all_thumbs.css('border-style', 'none');
                    all_thumbs.css('border-width', '0px');

                    image_thumb.css('border-color', '#ff5722');
                    image_thumb.css('border-style', 'solid');
                    image_thumb.css('border-width', '3px');
                    document.getElementById('frame_1').contentDocument.location.reload(true);
                    $('#select_this').show();
                    $('#upload_photo').hide();
                    myDropzone.removeAllFiles();
                });

    }

    function reset_cover_photo() {
        $.post('{{route('cover_photo_update')}}', { business_card_id: "{{$cardDetaials->id}}", file_name : null},
            function(returnedData){
                document.getElementById('frame_1').contentDocument.location.reload(true);
                $('#cover_photo_picker').modal('hide');
            });
    }

    function apply_cover_photo() {
        document.getElementById('frame_1').contentDocument.location.reload(true);
    }
</script>