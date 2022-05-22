<?php include("path.php"); 
include('app/database/functions.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom Styles -->
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css?v=<?php echo time() ?>">

    <!-- Font Awesome -->
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

    <title>MorganStorage</title>
</head>
<body>
    
    <?php include(ROOT_PATH . "/app/includes/header.php") ?>
    <?php include(ROOT_PATH . "/app/includes/main-heading.php") ?>

    <h2>Another day</h2>

</body>
</html>