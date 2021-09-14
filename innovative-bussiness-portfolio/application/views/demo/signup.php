<!DOCTYPE html>
<html>
<head>
	<title>SIGNUP</title>
</head>
<body>


<?=form_open_multipart('admin/insert_signup');?>
	<label>User Name </label><br>
	<input type="text" name="name" required autofocus><br> <br>

	<label>Email </label><br>
	<input type="Email" name="email" required><br> <br>

	<label>Password </label><br>
	<input type="Password" name="password" required><br> <br>

	<label>Phone</label><br>
	<input type="number" name="phone" required><br> <br>

	<label>Country</label><br>
	<input type="text" name="country" required><br> <br>

	<label>CIty </label><br>
	<input type="text" name="city" required><br> <br>

	<input type="submit" name="signup">


</form>

</body>
</html>