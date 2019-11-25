<!DOCTYPE html>
<html>
<head>
	<title>Upload multiple images</title>
</head>
<body>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="myImages[]" multiple /> <br/><br/>
		<input type="submit" name="submit" value="Upload Images">
	</form>
</body>
</html>