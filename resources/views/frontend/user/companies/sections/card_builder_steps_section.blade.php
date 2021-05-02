<div class="row">
    <div id="steps" style="margin-top: 0px;margin-bottom: 0px;">
            @if($step == 1)
                <div class="step active" data-desc="Create Business Card">1</div>
            @else
                <div class="step" data-desc="Create Business Card">1</div>

            @endif

            @if($step == 2)
                <div class="step active" data-desc="Select Template">2</div>

            @else
                <div class="step" data-desc="Select Template">2</div>
            @endif

                @if($step == 3)
                    <div class="step active" data-desc="Add Social Links">3</div>

                @else
                    <div class="step" data-desc="Add Social Links">3</div>
                @endif

                @if($step == 4)
                    <div class="step active" data-desc="Publish">4</div>

                @else
                    <div class="step" data-desc="Publish">4</div>
                @endif
    </div>

</div>