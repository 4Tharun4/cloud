






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="upload.css">
</head>

<body>
	<form method="post"  action="Add Products.php" enctype="multipart/form-data">
		</form>
		<form class="set" action="admin.php" method="post" class="w-50 " enctype="multipart/form-data" >
			
		<div >
			<input type="file" name="file" value="image">
		</div>
		<div>
			<textarea name="text" cols="40" rows="4" placeholder="Say any Thing about Plants" name="text"></textarea>
		</div>
		<div>
			<span class="text">$</span>
			<input type="text" name="prices" placeholder="price" >

		

		<div>

			<button type="submit" name="submit">UPLOAD</button>
		</div>
		</form>

		
	

</body>
</html>