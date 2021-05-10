<div class="no-gutters row">
    <div class="col-md-4">
        <div class="widget-content">
            <div class="widget-content-wrapper">
                <div class="widget-content-right ml-0 mr-3">
                    @if($card_details)
                        <div class="widget-numbers text-success">{{$card_details->visitor_count}}</div>

                    @else
                        <div class="widget-numbers text-success">00</div>

                    @endif
                </div>
                <div class="widget-content-left">
                    <div class="widget-heading">Views</div>
                    <div class="widget-subheading">Last year expenses</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="widget-content">
            <div class="widget-content-wrapper">
                <div class="widget-content-right ml-0 mr-3">
                    <div class="widget-numbers text-warning">00</div>
                </div>
                <div class="widget-content-left">
                    <div class="widget-heading">Action Calls</div>
                    <div class="widget-subheading">Total</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="widget-content">
            <div class="widget-content-wrapper">
                <div class="widget-content-right ml-0 mr-3">
                    <div class="widget-numbers text-danger">00</div>
                </div>
                <div class="widget-content-left">
                    <div class="widget-heading">Published Posts</div>
                    <div class="widget-subheading">Last Week</div>
                </div>
            </div>
        </div>
    </div>
</div>