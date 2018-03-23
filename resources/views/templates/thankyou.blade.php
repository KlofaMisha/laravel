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
          <p>Я отримав Ваше повідомлення і сконтактуюсь із Вами якнайшвидше</p>
          <img src="{{ asset('public/img/fotograf_i.png')}}" alt="">
          <h3>ДОЛУЧАЙТЕСЬ У СОЦМЕРЕЖАХ</h3>
          <ul class="sotsial_modal">
				<li>
					<a href="https://vk.com/ivanshumyk">
						<img src="{{ asset('public/img/sotsial_vk.png')}}" alt="">
					</a>
				</li>
				<li>
					<a href="https://www.facebook.com/vania.shymuk">
						<img src="{{ asset('public/img/sotsial_facebook.png')}}" alt="">
					</a>
				</li>
				<li>
					<a href="https://www.instagram.com/ivanshumyk">
						<img src="{{ asset('public/img/sotsial_instagram.png')}}" alt="">
					</a>
				</li>
				<li>
					<a href="https://plus.google.com/u/0/115383695551615171429">
						<img src="{{ asset('public/img/sotsial_google.png')}}" alt="">
					</a>
				</li>
			</ul>
        </div>
      </div>
      <!-- modal_thank_you content end -->
      
    </div>
  </div>
<!-- modal_thank_you end -->
<div class="modal-backdrop fade in" style="{{ Session::get('modal') }}"></div>

@endif