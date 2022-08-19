<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
<?php
     include 'header.html';
    include('navigation.php');
 ?>
 <h4 style="text-align: center;">
Your trying to signin with below details:<br>
               firstname: <?php echo $_POST["fname"]; ?><br>
               lastname: <?php echo $_POST["lname"]; ?><br>
               Email: <?php echo $_POST["email"]; ?><br>
               </h4>
<?php include 'footer.html' ?>

</body>
</html>