<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Замовнення з сайту</title>
</head>
<body>
	<h4>Тип замовлення : {{ $id }}</h4>
	<p>Імя: {{ $name }}</p>
	<p>Email: {{ $email }}</p>
	@if($phone)
	<p>Телефон: {{ $phone }}</p>
	@endif
	@if($date)
	<p>Дата: {{ $date }}</p>
	@endif
	@if($sel)
	<p>Тип зйомки: {{ $sel }}</p>
	@endif
	@if($msg)
	<p>Попідомлення: {{ $msg }}</p>
	@endif
	@if($cert)
	<p>Тип сертифікату: {{ $cert }}</p>
	@endif
	
	
</body>
</html>
