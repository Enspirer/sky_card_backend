<div class="modal fade bd-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="delete_{{$item_id}}" aria-hidden="true" style="">
    <div class="modal-dialog modal-md">
        <form method="post" action="{{route('frontend.user.companies.portfolio_store')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="modal-content">
                <div class="modal-header">
                    <p>Delete Item</p>
                </div>
                <div class="modal-body">
                    <p>Are you sure delete this item </p>

                </div>
                <div class="modal-footer">
                    <a href="{{route('frontend.user.companies.portfolio_delete',$res_id)}}" class="btn btn-danger">Delete Item</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>
