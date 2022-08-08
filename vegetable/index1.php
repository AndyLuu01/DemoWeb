 <!-- câu 12: lọc sản phẩm cùng trang -->
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

<div class="container">
<h1>Category Name:</h1>
  <div class="row">
    <div class="col">
      <form action="index1.php" method='POST'>
      <input type="checkbox" name="check1" id="check1">
      <label for="check1">Fruit</label><br>
      <input type="checkbox" name="check2" id="check2">
      <label for="check2">Vegetable</label><br>
      <input type="checkbox" name="check3" id="check3">
      <label for="check3">Spice</label><br>
      <input type="submit" class="btn btn-info"  name="btn_filter" value="Filter">
      </form>
    </div>
    <div class="col">
    <?php
     include("../class/vegetable.php");
    if(!isset($_POST['check1']) && !isset($_POST['check2']) && !isset($_POST['check3'])){
      getAll();
    }
    if( isset($_POST['check1']) && isset($_POST['btn_filter'])){
      ?>
      <h1>Fruit</h1>
      <?php
      getListByCateID(1);
    }
    if( isset($_POST['check2']) && isset($_POST['btn_filter'])){
      getListByCateID(2);
     }
     if( isset($_POST['check3']) && isset($_POST['btn_filter'])){
      getListByCateID(3);
     }

    ?>  
    </div>
  
</div>

</body>
</html>