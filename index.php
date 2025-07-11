<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="body"> 
<?php include "./components/navbar.php"?>
<div class="container-fluid">
    <h1 class="MenuH1">H<img src="./assets/img/casino.png" style="width: 60px; margin-right: 10px">bby Board Game Cafe</h1>
</div>
<div class="container mt-4">
  <div class="row justify-content-center g-5 " >

    <!-- การ์ด 1 -->
    <div class="col-6 col-md-3 d-flex justify-content-center">
      <div class="card align-items-center not-menu-pic" style="width: 15rem; border: 3px solid; border-radius: 25px; ">
        <img src="./assets/img/recom.png" class="card-img-top mt-3" style="width: 200px;" alt="...">
        <div class="card-body">
          <a href="./FoodRec.php" class="custom-button">เมนูแนะนำ</a>
        </div>
      </div>
    </div>

    <!-- การ์ด 2 -->
    <div class="col-6 col-md-3 d-flex justify-content-center">
      <div class="card align-items-center not-menu-pic" style="width: 15rem; border: 3px solid; border-radius: 25px; ">
        <img src="./assets/img/burger (1).png" class="card-img-top mt-3" style="width: 200px;" alt="...">
        <div class="card-body">
          <a href="#" class="custom-button">รายการอาหาร</a>
        </div>
      </div>
    </div>

    <!-- การ์ด 3 -->
    <div class="col-6 col-md-3 d-flex justify-content-center">
      <div class="card align-items-center not-menu-pic" style="width: 15rem; border: 3px solid; border-radius: 25px; ">
        <img src="./assets/img/cake.png" class="card-img-top mt-3" style="width: 200px;" alt="...">
        <div class="card-body">
          <a href="#" class="custom-button">ของหวาน</a>
        </div>
      </div>
    </div>

    <!-- การ์ด 4 -->
    <div class="col-6 col-md-3 d-flex justify-content-center">
      <div class="card align-items-center not-menu-pic" style="width: 15rem; border: 3px solid; border-radius: 25px; ">
        <img src="./assets/img/coffee-cup.png" class="card-img-top mt-3" style="width: 200px;" alt="...">
        <div class="card-body">
          <a href="#" class="custom-button">เครื่องดื่ม</a>
        </div>
      </div>
    </div>

  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
<footer><img src="./assets/img/bell-fix.png" class="floating-circle" alt="Circle Image"></footer>
</html>