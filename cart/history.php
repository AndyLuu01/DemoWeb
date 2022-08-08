<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../style1.css">
</head>
<body>

  <!-- kết nối db để lấy dữ liệu mua hàng -->
<?php 
if (isset($_POST['buysp']))
        include("../connection.php");
      include("../connection.php");
      $sql = "SELECT * FROM orders";
    $result = mysqli_query($connect, $sql); 
       ?>

<div class="card text-center">
  <div class="card-header">
    History
  </div>
  <div class="card-body">
  <div class="d-flex">
      <div class="p-2 border">#</div>
      <div class="p-2 border  col-4 ">Date</div>
      <div class="p-2 border col-3 ">Total</div>
      <div class="p-2 border flex-grow-1 ">Detail</div>
</div>

 <!-- in thông tin lịch sử mua hàng -->
<form action="detail.php" class="detail" method='POST'>
<?php
    $num=1;
    while($row = mysqli_fetch_assoc($result)) {?>
<div class="d-flex">
      <div class="p-2 border"><?=$num++;?></div>
      <div class="p-2 border  col-4 "><?=$row['Date']?></div>
      <div class="p-2 border col-3 "><?=number_format($row['Total'])?></div>
      <div class="p-2 border flex-grow-1">
          <button class="btn-primary" name="detail">Detail</button></div>
    </div>
<?php
  }
?>
</form>
  </div>
 
</div>
</body>
</html>