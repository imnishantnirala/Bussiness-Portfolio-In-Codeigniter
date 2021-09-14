<!DOCTYPE html>
<html>
<head>
	<title>SIGNUP</title>
</head>
<body>


<?=form_open_multipart('admin/chake_signup');?>
	
<h3><?php echo $msg; ?></h3>
	<label>Email </label><br>
	<input type="Email" name="email" required><br> <br>

	<label>password </label><br>
	<input type="password" name="password" required><br> <br>

	<input type="submit" name="signup">


</form>

</body>
</html>