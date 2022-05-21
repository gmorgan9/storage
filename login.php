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

<form action="login.php" method="post">
    <label for="email">Email:</label>
    <input name="email" type="text" require><br>
    <label for="username">Username:</label>
    <input name="username" type="text" require><br>
    <label for="password">Password:</label>
    <input name="password" type="password" require><br>
    <label for="password2">Confirm Password:</label>
    <input name="password2" type="password" require><br>
    <input type="submit">
</form>

</body>
</html>