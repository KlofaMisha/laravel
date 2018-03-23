<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
	<title>Фотограф Іван Шумик</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="icon" href="{{ asset('public/img/iconcamera.png') }}" type="images/png">
	<link rel="stylesheet" href="{{ asset('public/css/style.css') }}">



</head>
<body>

<img src="{{ asset('public/img/shumuklogo.png') }}" style="display: none;" alt="">



@yield('content')





	<footer class="section_footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
					<table>
						<tr>
							<td>
								<a href="https://vk.com/ivanshumyk" class="sotsial vk">
									<img src="{{ asset('public/img/sotsial_vk.png')}}" alt="">
								</a>
							</td>
							<td>
								<a href="https://www.facebook.com/vaniashumyk" class="sotsial facebook">
									<img src="{{ asset('public/img/sotsial_facebook.png')}}" alt="">
								</a>
							</td>
							<td>
								<a href="https://www.instagram.com/ivanshumyk" class="sotsial instagram">
									<img src="{{ asset('public/img/sotsial_instagram.png')}}" alt="">
								</a>
							</td>
							<td>
								<a href="https://plus.google.com/u/0/115383695551615171429" class="sotsial google">
									<img src="{{ asset('public/img/sotsial_google.png')}}" alt="">
								</a>
							</td>
						</tr>
						<tr>
							<td colspan="4">
								<a class="footer_tel" href="tel:+38 (098) 97-91-764">+38 (098) 97-91-764</a>, 
								<a class="footer_tel" href="tel:(063) 23-24-911">(063) 23-24-911</a>
							</td>
						</tr>
						<tr>
							<td colspan="4">e-mail: <a class="footer_tel" href="mailto:vaniashumyk@gmail.com">vaniashumyk@gmail.com</a></td>
						</tr>
					</table>

					
				</div>
			</div>
			<div class="row">
				<h5>ПЕРСОНАЛЬНИЙ САЙТ ФОТОГРАФА ІВАНА ШУМИКА
					<?php
					echo date("Y");
					?>
					 ©</h5>
			</di>
		</div>
	</footer>
	<!-- section_footer -->


 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script type="text/javascript" src="{{ asset('public/js/validator.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/script.js') }}"></script>
@yield('script')

</body>
</html>