<?php include("path.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom Styles -->
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css?v=<?php echo time() ?>">


    <title>Login - MorganStorage</title>
</head>
<body>

<?php include(ROOT_PATH . "/app/includes/header.php") ?>

<div class="auth-content">
<form method="post" action="login.php">
<h2 class="form-title">Login</h2>
<?php echo display_error(); ?>

<div>
	<label>Username</label>
	<input class="text-input" type="text" name="username" >
</div>
<div>
	<label>Password</label>
	<input class="text-input" type="password" name="password">
</div>
<div>
	<button type="submit" class="log-btn" name="login_btn">Login</button>
</div>
<p>
	Not yet a member? <a href="register.php">Sign up</a>
</p>
</form>
</div>

</body>
</html>