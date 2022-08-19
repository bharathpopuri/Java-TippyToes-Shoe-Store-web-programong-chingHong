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
 <h2 style="margin: 50px; text-align: center;">
 You are trying to sign as:<?php echo $_POST['email'];  ?>
 </h2>
<?php include 'footer.html' ?>

</body>
</html>