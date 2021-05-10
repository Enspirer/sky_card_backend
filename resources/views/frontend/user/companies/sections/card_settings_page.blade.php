<form method="post" action="{{route('frontend.user.companies.update_card')}}">
    {{csrf_field()}}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{$card_details->name}}">
                <input type="hidden" class="form-control" name="card_id" value="{{$card_details->id}}">
            </div>
            <div class="form-group">
                <label>Company Name</label>
                <input type="text" class="form-control" name="company_name" value="{{$card_details->company_name}}">
                <input type="hidden" class="form-control" name="company_id" value="{{$card_details->company_id}}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" value="{{$card_details->email}}">
            </div>
            <div class="form-group">
                <label>Job Role</label>
                <input type="text" class="form-control" name="job_role" value="{{$card_details->position}}">
            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address" value="{{$card_details->address}}">
            </div>

            @if($card_details->phone_number)

                    <div class="form-group">
                        <label>Phone Number1</label>
                        <input type="text" class="form-control" name="phone_numbers1" value="{{json_decode($card_details->phone_number)->phone_number1}}"><br>
                    </div>
                <div class="form-group">
                    <label>Phone Number2</label>
                    <input type="text" class="form-control" name="phone_numbers2" value="{{json_decode($card_details->phone_number)->phone_number2}}"><br>
                </div>

            @else

            @endif

        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Facebook</label>
                        @if($card_details->social_media_links==null)
                            <input type="text" name="facebook_link" value="" class="form-control">
                        @else
                            <input type="text" name="facebook_link" value="{{json_decode($card_details->social_media_links)->facebook_link}}" class="form-control">
                        @endif
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Instagram</label>
                        @if($card_details->social_media_links==null)
                            <input type="text" name="instagram_link" value="" class="form-control">
                        @else
                            <input type="text" name="instagram_link" value="{{json_decode($card_details->social_media_links)->instagram_link}}" class="form-control">
                        @endif
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Twitter</label>
                        @if($card_details->social_media_links==null)
                            <input type="text" name="twitter_link" value="" class="form-control">
                        @else
                            <input type="text" name="twitter_link" value="{{json_decode($card_details->social_media_links)->twitter_link}}" class="form-control">
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">LinkedIn</label>
                        @if($card_details->social_media_links==null)
                            <input type="text" name="linkedin_link" value="" class="form-control">
                        @else
                            <input type="text" name="linkedin_link" value="{{json_decode($card_details->social_media_links)->linkedin_link}}" class="form-control">
                        @endif
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Youtube</label>
                        @if($card_details->social_media_links==null)
                            <input type="text" name="youtube_link" value="" class="form-control">
                        @else
                            <input type="text" name="youtube_link" class="form-control" value="{{json_decode($card_details->social_media_links)->youtube_link}}" >
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Website</label>
                        <input type="text" class="form-control" name="website" value="{{$card_details->website}}">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleEmail" class="">About Yourself</label>
                <textarea class="form-control" rows="10" name="description">{{$card_details->description}}</textarea>
            </div>
            <div class="form-group">
                <label>Card Publish Type</label>
                <select class="form-control" name="is_public">
                    <option value="public" selected>Public</option>
                    <option value="private">My Private Card</option>
                </select>
            </div>
        </div>
    </div>
    <button class="btn btn-primary pull-right" type="submit">Save</button>

</form>