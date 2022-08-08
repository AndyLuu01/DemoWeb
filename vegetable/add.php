<!-- Câu 24. Tạo file vegetable/add.php được gọi xử lý khi nhấn nút Add thêm mới sản phẩm.  -->
<?php
//Khai báo sử dụng session
session_start();
if (isset($_POST['addvege']))
{
        include("../connection.php");
        $vename = $_POST["vename"];
        $unit = $_POST["unit"];
        $amount = $_POST["amount"];
        $price = $_POST["price"];
        $image = $_POST["image"];
       
          $sql="select * from vegetable where VegetableName='$vename'";
          $kt=mysqli_query($connect, $sql);
              if(mysqli_num_rows($kt)  > 0){
                  echo "đã tồn tại";
              }else{
                  // lưu trữ dữ liệu vào db
                  $sql = "INSERT INTO vegetable(VegetableName,Unit,Amount,Price,Image) VALUES ('$vename','$unit','$amount','$price','$image')";  
                  // thực thi câu $sql với biến conn lấy từ file connection.php
                     mysqli_query($connect,$sql);
                     echo "Add Successfully!";
    
        }
}
?>