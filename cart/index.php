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

<?php 
if (isset($_POST['buysp']))
        include("../connection.php");
        // $cate = $_POST["name"];
        // $des = $_POST["des"];
      include("../connection.php");
      $sql = "SELECT * FROM vegetable where CategoryID=2";
    $result = mysqli_query($connect, $sql); 
       ?>
       

<div class="card text-center">
  <div class="card-header">
    Sản phẩm bạn đã chọn
  </div>
  <div class="card-body">
  <div class="d-flex">
      <div class="p-2 border">#</div>
      <div class="p-2 border  col-4 ">Name</div>
      <div class="p-2 border col-3 ">Picture</div>
      <div class="p-2 border col-2 ">Amount</div>
      <div class="p-2 border flex-grow-1 ">Giá</div>
</div>
<?php
    $num=1;$gia=0;$amount=0;
    while($row = mysqli_fetch_assoc($result)) {?>
<div class="d-flex">
      <div class="p-2 border"><?=$num++;?></div>
      <div class="p-2 border  col-4 "><?=$row['VegetableName']?></div>
      <div class="p-2 border col-3 "><img width="50%" src="<?=$row['Image']?>" alt=""></div>
      <div class="p-2 border col-2 "><?=$row['Amount']?></div>
      <div class="p-2 border flex-grow-1"><?=number_format($row['Price'])?></div>
</div>
<?php
$amount=$amount+$row['Amount'];
$gia=$gia+$row['Price']*$row['Amount'];
  }
?>
<div class="d-flex" id="">
      <div class="p-2 border"> &nbsp&nbsp </div>
      <div class="p-2 border  col-4 "> Tổng</div>
      <div class="p-2 border col-3 "></div>
      <div class="p-2 border col-2 "><?php echo $amount ?></div>
      <div class="p-2 border flex-grow-1 "><?php echo number_format($gia) ?></div>
</div>
  </div>
 
</div>
</body>
</html>