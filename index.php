<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tippy-Toes Shoe Store</title>
    <meta charset="UTF-8" />
    <!-- <link rel="stylesheet" href="style.css" > -->
    <link
      rel="stylesheet"
      href="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.min.css"
    />
    <style>
      h1 {
        background-color: black;
        color: white;
        text-align: center;
        padding: 15px;
      }
      h3{
      font-size: 20px;
      padding: 15px;
      background-color: black;
      }
    </style>
  </head>
  <body>
     <?php
     include 'header.html';
    include('navigation.php');
 ?>
    <div
      id="carouselExampleControls"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="main.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="main.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="main.jpg" class="d-block w-100" alt="..." />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleControls"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div
      class="card"
      style="
        width: 20rem;
        height: 300px;
        margin-top: 50px;
        float: left;
        margin-left: 300px;
      "
    >
      <div class="card-body">
        <h5 class="card-title">Men Shoes</h5>
        <p class="card-text">
          you can find men's footwear from a variety of brands, such as Crocs ,
          Adidas , Levi's, Woodland , Puma,
        </p>
        <a href="#" class="btn btn-primary">View Details</a>
      </div>
    </div>

    <div
      class="card"
      style="
        width: 20rem;
        height: 300px;
        margin-top: 50px;
        float: left;
        margin-left: 20px;
      "
    >
      <div class="card-body">
        <h5 class="card-title">Women Shoes</h5>
        <p class="card-text">
          We have sneakers, heels, flats and casual shoes for women online in a
          range of colours and styles.
        </p>
        <a href="#" class="btn btn-primary">View Details</a>
      </div>
    </div>

    <div
      class="card"
      style="width: 20rem; height: 300px; margin-top: 50px; margin-left: 980px"
    >
      <div class="card-body">
        <h5 class="card-title">Kids Shoes</h5>
        <p class="card-text">
          Buy latest collection of kid's Footwear on Sale. Check out a wide
          range of girl's, boy's and infant's sports shoes, flip-flop, slippers
          at the best price .
        </p>
        <a href="#" class="btn btn-primary">View Details</a>
      </div>
    </div>

    <div
      class="card"
      style="
        width: 20rem;
        height: 300px;
        margin-top: 50px;
        margin-left: 300px;
        float: left;
      "
    >
      <div class="card-body">
        <h5 class="card-title">Best Quality</h5>
        <p class="card-text">
          Tippy-Toes Shoe Store offers designer footwear collection. Here, you
          can get luxury boots, sneakers, slippers, heels and wedges designed by
          international brands..
        </p>
        <a href="#" class="btn btn-primary">View Details</a>
      </div>
    </div>

    <div
      class="card"
      style="
        width: 20rem;
        height: 300px;
        margin-top: 50px;
        margin-left: 20px;
        float: left;
      "
    >
      <div class="card-body">
        <h5 class="card-title">Brands Shoes</h5>
        <p class="card-text">
          You can find footwear from a variety of brands, such as Crocs , Adidas
          , Levi's, Woodland , Puma,
        </p>
        <a href="#" class="btn btn-primary">View Details</a>
      </div>
    </div>

    <div
      class="card"
      style="
        width: 20rem;
        height: 300px;
        margin-top: 50px;
        margin-left: 20px;
      "
    >
      <div class="card-body">
        <h5 class="card-title">Loafer Shoes</h5>
        <p class="card-text">
          For those who like to dress casually in their time off and who prize
          shoes that are easy to put on, there’s no better men’s shoe than the
          loafer. And who better to first catch on to the trend than students
        </p>
        <a href="#" class="btn btn-primary">View Details</a>
      </div>
    </div>
    
      <?php include('footer.html');  ?>
    </div>
    <script src="bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
  </body>
</html>
