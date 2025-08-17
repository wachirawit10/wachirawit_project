<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RecMenu</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="body">
  <?php include "./components/navbar.php" ?>

  <div><a href="./foodrec.php"><img src="./assets/img/back-arrow.png" alt="" style="width: 50px; margin-top: 5px; margin-left: 15px; margin-bottom: 15px;"></a></div>
  <div class="container position-relative">

    <div class="menu-card">

      <!-- รายการ 1 -->
      <div class="menu-item">
        <img src="https://www.wendys.com/sites/default/files/styles/max_650x650/public/2021-05/daves-double.png?itok=0LISzLWe" alt="burger">
        <div class="menu-text">
          <div class="menu-title">เบอร์เกอร์ชีสเยิ้มๆ สองชั้น</div>
          <div class="menu-subtitle">(Double cheese Berger)</div>
        </div>
        <div class="menu-price">70 ฿</div>
        <button class="delete-btn"><img src="./assets/img/bin.png" alt=""></button>
      </div>

      <!-- รายการ 2 
      <div class="menu-item">
        <img src="https://bunny-wp-pullzone-8lgzf5kyx3.b-cdn.net/assets/uploads/2023/08/cookies-n-creme-frappuccino-onwhite-copy.png" alt="coffee">
        <div class="menu-text">
          <div class="menu-title">มิลค์เชคคุกกี้แอนด์ ครีม</div>
          <div class="menu-subtitle">(Milk Shake Cookie&Cream)</div>
        </div>
        <div class="menu-price">55 ฿</div>
        <button class="delete-btn"><img src="./assets/img/bin.png" alt=""></button>
      </div>-->

      <!-- รวมราคา -->
      <div class="total-section">
        Total Price: <span style="margin-left: 5px;">125</span>
        <button class="ms-auto order-btn">ยืนยันคำสั่งซื้อ</button>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
<footer><?php include "./components/bottomcart.php"?></footer>
</html>