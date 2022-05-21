<?php include("path.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom Styles -->
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css?v=<?php echo time() ?>">


    <title>MorganStorage</title>
</head>
<body>
    
    <?php include(ROOT_PATH . "/app/includes/header.php") ?>
    <?php include(ROOT_PATH . "/app/includes/main-heading.php") ?>

    <h2>Another day</h2>

    <form action="fileUploadScript.php" method="post" enctype="multipart/form-data">
        Upload a File:
        <input type="file" name="the_file" id="fileToUpload">
        <input type="submit" name="submit" value="Start Upload">
    </form>

</body>
</html>