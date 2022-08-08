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
      include("../connection.php");
      $sql = "SELECT * FROM category";
    $result = mysqli_query($connect, $sql); 
       ?>

<div class="container">
  <div class="row row-cols-2">
    <div class="col">
        <form action="index.php" class="addsp" method='POST'>
            <label class="lable">Name</label> <br>
    <input type="textfield" class="form-control" name='name' required/> <br>
    <label class="lable">Description</label> <br>
    <input type="textfield" class="form-control" name='des' required/><br>
    <br>
    <button class="btn btn-primary" name="addsp" >Add</button>
  <?php require 'add.php';?> 
    </form>
    </div>
   
    <div class="col">
        <h3>Category</h3>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <th scope="row">1</th>
      <td>Green Vegetables</td>
      <td>Fresh</td>
    </tr>
    <?php
    $num=2;
    while($row = mysqli_fetch_assoc($result)) {?>
    <tr>
      <th scope="row"><?=$num++;?></th>
      <td ><?=$row['Name']?></td>
      <td><?=$row['Description']?></td>
    </tr>
  <?php 
} ?>
  </tbody>
</table>
    </div>
  </div>
  
</div>

</body>
</html>