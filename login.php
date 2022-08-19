<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css"
    />
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Log In</title>
  </head>
  <?php
     include 'header.html';
    include('navigation.php');
 ?>
  <body>
    <form action="loginData.php" method="POST" style="margin: 50px;">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input
          type="email"
          class="form-control"
          id="exampleInputEmail1"
          aria-describedby="emailHelp"
          name="email"
          required
        />
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input
          type="password"
          class="form-control"
          id="exampleInputPassword1"
          name="pwd"
          required
        />
      </div>
     
      <p>Create account<a href="signup.php">Sign up</a></p>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
	<?php include('footer.html');  ?>

  </body>
</html>
