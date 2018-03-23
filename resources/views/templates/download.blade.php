@if(Session::has('modal'))
<!-- modal_thank_you -->
  <div class="modal fade modal_thankyou in" id="modal_thankyou" role="dialog" style="{{ Session::get('modal') }}">
    <div class="modal-dialog">
    
      <!-- modal_thank_you content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
          	<span class="glyphicon glyphicon-remove"></span>
          </button>
        </div>
        <div class="modal-body">
          <h2>ДЯКУЮ!</h2>
          <img src="{{ asset('public/img/fotograf_i.png')}}" alt="">
          <br>
           <a href="{{asset("public/img/Презентація+прайс.pdf")}}" download="{{asset("public/img/Презентація+прайс.pdf")}}">
                <button type="button" class="btn btn-primary">
                <i class="glyphicon glyphicon-download">
                  Download
                </i>
                </button>
                   </a>
        </div>
      </div>
      <!-- modal_thank_you content end -->
      
    </div>
  </div>
<!-- modal_thank_you end -->
<div class="modal-backdrop fade in" style="{{ Session::get('modal') }}"></div>

@endif
