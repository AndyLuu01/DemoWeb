<!-- Câu 9. Tạo file class/vegetable.php. Viết lớp vegetable có các hàm sau:  -->
<?php
// a) Lấy tất cả sản phẩm 
function getAll(){
    include("../connection.php");
     $sql = "SELECT * FROM Vegetable";
     $result = mysqli_query($connect, $sql); 
     ?>
<div class="container">
  <div class="row row-cols-2">
     <?php
if (mysqli_num_rows($result) > 0) {
    // hiển thị dữ liệu trên trang
    while($row = mysqli_fetch_assoc($result)) {
        ?>

<div class="col">
    <div class="w3-col l3 s6 w3-center">
           <div class="w3-container"> 
               <img src="../img/<?=$row['Image']?>" width="80%" alt="">
           </div>
           <p ><?=$row['VegetableName']?> <b class="bg-warning"> <?=$row['Price']?> </b> </p>
           <button class="btn-info">Buy</button>
</div>
</div>
   <?php }
} else {
    echo "0 results";
}
}

//  b) Lấy tất cả sản phẩm thuộc 01 danh mục (category) 
 function getListByCateID($cateid){
    include("../connection.php");
    $sql = "SELECT * FROM Vegetable where CategoryID='$cateid'";
    $result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
   // hiển thị dữ liệu trên trang
   while($row = mysqli_fetch_assoc($result)) {
    ?>

    <div class="col">
        <div class="w3-col l3 s6 w3-center">
               <div class="w3-container"> 
                   <img src="../img/<?=$row['Image']?>" width="50%" alt="">
               </div>
               <p ><?=$row['VegetableName']?> <b class="bg-warning"> <?=$row['Price']?> </b> </p>
               <button class="btn-info">Buy</button>
    </div>
    </div>
       <?php }
} else {
   echo "0 results";
       }
}

//  b) Lấy tất cả sản phẩm thuộc nhiều danh mục (category) 
function getListByCateIDs($cateids){
    include("../connection.php");
    $sql = "SELECT * FROM Vegetable where CategoryID='$cateids'";
    $result = mysqli_query($connect, $sql);
if (mysqli_num_rows($result) > 0) {
   // hiển thị dữ liệu trên trang
   while($row = mysqli_fetch_assoc($result)) {
       echo "Name: " . $row["VegetableName"]. " Unit: " . $row["Unit"]. " "
           ."Amount ". $row["Amount"]." Price ". $row["Price"]. "<br>";
   }
} else {
   echo "0 results";
       }

}

//  d) Lấy chi tiết sản phẩm theo khóa chính
function getByID($vegetableID) {
    include("../connection.php");
    $sql = "SELECT * FROM Vegetable where VegetableID='$vegetableID'";
    $result = mysqli_query($connect, $sql);
 
if (mysqli_num_rows($result) > 0) {
   // hiển thị dữ liệu trên trang
   while($row = mysqli_fetch_assoc($result)) {
    ?>

    <div class="col">
        <div class="w3-col l3 s6 w3-center">
               <div class="w3-container"> 
                   <img src="../img/<?=$row['Image']?>" width="80%" alt="">
               </div>
               <p ><?=$row['VegetableName']?> <b class="bg-warning"> <?=$row['Price']?> </b> </p>
               <button class="btn-info">Buy</button>
    </div>
    </div>
       <?php }
} else {
   echo "0 results";
}

}


?>
