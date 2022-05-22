<?php include("path.php"); ?>
<?php include('app/database/functions.php'); ?>
<?php
if (isLoggedIN()) {
	header('location: /');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Register - MorganStorage</title>
    <meta name="viewport" content="width=device-width">
    
	<!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="/assets/images/fav.png"> -->

    <!-- Custome Styles -->
    <!-- <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>"> -->
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">

    <!-- Font Awesome -->
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
</head>
<body>

<?php include("app/includes/header.php") ?>
        
<main>
    <form action="register.php" method="post">
        <h1>Sign Up</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <label for="password2">Password Again:</label>
            <input type="password" name="password2" id="password2">
        </div>
        <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
            </label>
        </div>
        <button type="submit">Register</button>
        <footer>Already a member? <a href="login.php">Login here</a></footer>
    </form>
</main>


</body>
</html>