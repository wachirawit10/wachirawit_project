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
<div><a href="./foodrec.php"><img src="./assets/img/back-arrow.png" alt="" style="width: 50px; margin-top: 5px; margin-left: 15px; margin-bottom: 15px;"></a></div>

<!-- Content -->
<div class="container mt-4">
  <div class="details-card">
    <div class="row align-items-center">
      <div class="col-md-4">
        <img class="img-detail img-fluid" src="https://www.wendys.com/sites/default/files/styles/max_650x650/public/2021-05/daves-double.png?itok=0LISzLWe" alt="Burger" class="img-fluid">
      </div>
      <div class="col-md-8">
        <p class="detail-name">Double Chesse Berger</p>
        <p class="detail-name">Price 70 B</p>
        <p class="food-detail">เป็นเบอร์เกอร์ที่มีสองชั้นเนื้อวัว 100% โรยหน้าด้วยชีสเชดดาร์ (หรือชีสอเมริกัน) และผักเครื่องเคียงชั้นๆ 
            เช่น แตงกวาดอง, หัวหอมสับ, ซอสมะเขือเทศ, และมัสตาร์ด</p>
      </div>
    </div>

    <textarea class="optional-box mt-3" placeholder="Optional: Add more text if necessary"></textarea>

    <a href="foodrec.php?added=1" class="mt-3 btn-right">
  <button class="add-btn">เพิ่มลงตะกร้า</button>
</a>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
<footer><?php include "./components/bottomcart.php"?></footer>
</html>