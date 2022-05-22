<?php include("path.php"); ?>
<?php include('app/database/functions.php'); ?>
<?php
// if (isLoggedIN()) {
// 	header('location: /');
// }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register - MorganStorage</title>
    <meta name="viewport" content="width=device-width">
    
	<!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="/assets/images/fav.png"> -->

    <!-- Custome Styles -->
    <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>">

    <!-- Font Awesome -->
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
</head>
<body>

<?php include("app/includes/header.php") ?>
        
<div class="logreg_header">
	<h2>Register</h2>
</div>
<form method="post" action="register.php">
    <?php echo display_error(); ?>
	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirm password</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>


</body>
</html>