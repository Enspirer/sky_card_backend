<div class="modal fade bd-example-modal-lg" id="cover_photo_picker" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="mb-3">
                    <div class="card-header">
                        <ul class="nav nav-justified">
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-0" class="nav-link active show">Library</a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-1" class="nav-link show">Upload</a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-2" class="nav-link">URL</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-eg7-0" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div style="background-image: url('{{url('files/cover_images/1.jpg')}}');height: 160px;" onclick="update_cover_photo('1.jpg')"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div onclick="update_cover_photo('2.jpg')" style="background-image: url('{{url('files/cover_images/2.jpg')}}');height: 160px;" ></div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div onclick="update_cover_photo('3.jpg')" style="background-image: url('{{url('files/cover_images/3.jpg')}}');height: 160px;"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div onclick="update_cover_photo('4.jpg')" style="background-image: url('{{url('files/cover_images/4.jpg')}}');height: 160px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane show" id="tab-eg7-1" role="tabpanel">
                                <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
                                <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
                                <form action="{{route('frontend.user.companies.upload_card_cover_photo')}}" class="dropzone">
                                    {{csrf_field()}}
                                    <input type="hidden" value="{{$cardDetaials->id}}" name="card_id">
                                </form>
                            </div>

                            <div class="tab-pane" id="tab-eg7-2" role="tabpanel">

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    Dropzone.on("queuecomplete", function (file) {
        alert("All files have uploaded ");
    });
    


    function update_cover_photo(file_name) {
            $.post('{{route('cover_photo_update')}}', { business_card_id: "{{$cardDetaials->id}}", file_name : file_name},
                function(returnedData){
                    document.getElementById('frame_1').contentDocument.location.reload(true);
                    $('#cover_photo_picker').modal('hide');
                });

    }
</script>