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

    
    
    <form method="POST" action="index.php" enctype="multipart/form-data" >
      <label  class="form-label">Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="name" required > <br><br>
      file : <input type="file" name="file"><br><br>
      <br/>
      <input type="submit" value="submit"  name="submit">
    </form>

</body>
</html>

<?php
$server = 'localhost';
$user = "root";
$password = "Morgan22!";
$dbname = "storage";
$conn = mysqli_connect($server, $user, $password, $dbname) or die("could not connect to the database");

if(isset($_POST['submit'])){
    $fileName = $_POST['name'];
    $name = $_FILES['file']['name'];
    $targetDir = "uploads/";
    $targetFile = $targetDir.basename($_FILES['file']['name']);
    $fileType = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
    $extensions_arr= array("jpg","jpeg","png");
    if( in_array($fileType,$extensions_arr) ){
    // Insert record
    $query = " INSERT into `files` (`filename`) values('$name')";
    mysqli_query($conn,$query);
    // Upload file
    move_uploaded_file($_FILES['file']['tmp_name'],$targetDir.$name);
    } else echo " wrong file type ";

    }
    $sql = "SELECT  `filename` FROM `files` WHERE `filename`= '$name'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $image = $row['filename'];
    $image_src = "uploads/".$image;
 ?>
<img src='<?php echo $image_src; ?>' >