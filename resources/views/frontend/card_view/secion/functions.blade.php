


<div id="share" class="share d-none" style="width: 100%;height: 100vh;background: rgba(0, 0, 0, 0.90);position: absolute;top: 0;left: 0;z-index: 99999999;overflow-y: scroll;position: fixed;">
    <div class="row ml-1 mr-1 mt-3 pl-4 pt-3">
        <a style="display: contents;text-decoration: none;" href="whatsapp://send?text=*This%20is%20my%20digital%20business%20card:*%20https://www.skycards.lk/c/{{$card_details->slug}}">
            <i style="font-size: 50px;color: #fff;" class="fab fa-whatsapp"></i>
            <h4 style="font-family: 'Montserrat', sans-serif;font-size: 30px; color: #fff;margin-left: 15px;margin-top: 5px;">Whatsapp</h4>
        </a>
    </div>

    <div class="row ml-1 mr-1 mt-3 pl-4 pt-3">
        <a style="display: contents;text-decoration: none;" href="sms:?body=This%20is%20my%20digital%20business%20card:%20https://www.skycards.lk/c/">
            <i style="font-size: 50px;color: #fff;" class="far fa-comments"></i>
            <h4 style="font-family: 'Montserrat', sans-serif;font-size: 30px; color: #fff;margin-left: 15px;margin-top: 5px;">SMS</h4>
        </a>
    </div>

    <div class="row ml-1 mr-1 mt-3 pl-4 pt-3">
        <a style="display: contents;text-decoration: none;" href="mailto:?subject=  &amp;body=This is my digital business card: https://www.skycards.lk/c/">
            <i style="font-size: 50px;color: #fff;" class="far fa-envelope"></i>
            <h4 style="font-family: 'Montserrat', sans-serif;font-size: 30px; color: #fff;margin-left: 15px;margin-top: 5px;">Email</h4>
        </a>
    </div>

    <div class="row ml-1 mr-1 mt-3 pl-4 pt-3">
        <a style="display: contents;text-decoration: none;" href="https://www.facebook.com/sharer/sharer.php?u=https://www.skycards.lk/card_preview&amp;quote=This is my digital business card: https://www.skycards.lk/c/{{$card_details->slug}}">
            <i style="font-size: 50px;color: #fff;" class="fab fa-facebook-f"></i>
            <h4 style="font-family: 'Montserrat', sans-serif;font-size: 30px; color: #fff;margin-left: 15px;margin-top: 5px;">Facebook</h4>
        </a>
    </div>

    <div class="row ml-1 mr-1 mt-3 pl-4 pt-3">
        <a style="display: contents;text-decoration: none;" target="_blank" href="http://twitter.com/home?status=This is my digital business card: https://www.skycards.lk/c/{{$card_details->slug}}">
            <i style="font-size: 50px;color: #fff;" class="fab fa-twitter"></i>
            <h4 style="font-family: 'Montserrat', sans-serif;font-size: 30px; color: #fff;margin-left: 15px;margin-top: 5px;">Twitter</h4>
        </a>
    </div>

    <div class="row ml-1 mr-1 mt-3 pl-4 pt-3">
        <a style="display: contents;text-decoration: none;" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.skycards.lk/c/{{$card_details->slug}}&amp;title=This is my digital business card:&amp;summary=&amp;source=">
            <i style="font-size: 50px;color: #fff;" class="fab fa-linkedin-in"></i>
            <h4 style="font-family: 'Montserrat', sans-serif;font-size: 30px; color: #fff;margin-left: 15px;margin-top: 5px;">Linkedin</h4>
        </a>
    </div>

    <div style="position: absolute;top: 20px;right: 20px;" class="close"><i id="btn-close" style="color: #fff;" class="fas fa-times"></i></div>
</div>



<!-- Modal -->
<div class="modal fade exampleModalCenter" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
