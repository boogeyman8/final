<!DOCTYPE html>
<html>
<head>
	<title>Admin side</title>
</head>
<body>
	{{-- please dont shemten sagani  --}}
	<form method="get" action="{{ route('products.store') }}"> 
		@csrf
		<label for="">name:  </label> <br>
		<input type="text" name="product_name"> <br>
		<label for="">price:  </label> <br>
		<input type="text" name="product_price"> <br>
		<label for="">descritpion:  </label> <br>
		<input type="text" name="product_description"> <br>
		<input type="file" name="product_image">
		<input type="submit" name="submit">
	</form>
</body>
</html>