<form method="post" action="">
    {{csrf_field()}}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{$card_details->name}}">
            </div>
            <div class="form-group">
                <label>Company Name</label>
                <input type="text" class="form-control" name="company_name" value="{{$card_details->company_name}}">
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
                        <label>Phone Number</label>
                        @foreach(json_decode($card_details->phone_number) as $item)
                        <input type="text" class="form-control" name="phone_numbers[]" value="{{$card_details->$item}}"><br>
                        @endforeach
                    </div>

            @else

            @endif

        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Facebook</label>
                        <input type="text" name="facebook_link" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Instagram</label>
                        <input type="text" name="instagram_link" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Twitter</label>
                        <input type="text" name="twitter_link" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">LinkedIn</label>
                        <input type="text" name="linkedin_link" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Youtube</label>
                        <input type="text" name="youtube_link" class="form-control">
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

</form>