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

    
    
    <form action="upload.php" method="post" enctype="multipart/form-data">
    Select Image File to Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload">
</form>

</body>
</html>