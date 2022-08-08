<!-- Câu 13. Tạo file class/order.php. Viết lớp order gồm các hàm sau:  -->
<!-- Câu 14. Trong lớp order viết thêm hàm:
- Hàm thêm mới thông tin hóa đơn và chi tiết hóa đơn  -->
<?php
    //  a) Lấy tất cả thông tin hóa đơn của 01 khách hàng

    function getAllOrder($cusID){
        include("../connection.php");
    $sql = "SELECT * FROM orders where CustomerID='$cusid'";
    $result = mysqli_query($connect, $sql);
 
      if (mysqli_num_rows($result) > 0) {
   // hiển thị dữ liệu trên trang
         while($row = mysqli_fetch_assoc($result)) {
                  echo "OrderID: " . $row["OrderID"]. " CustomerID: " . $row["CustomerID"]. " "
                  ."Date ". $row["Date"]." Total ". $row["Total"]." Note ". $row["Note"]. "<br>";
                                                   }
       } else {
                echo "0 results";
               }
    }

    // b) Lấy tất cả thông tin chi tiết hóa đơn theo OrderID 

    function getOrderDetail($orderid) {
        include("../connection.php");
    $sql = "SELECT * FROM orderdetail where OrderID='$orderid'";
    $result = mysqli_query($connect, $sql);
 
      if (mysqli_num_rows($result) > 0) {
         while($row = mysqli_fetch_assoc($result)) {
                  echo "OrderID: " . $row["OrderID"]. " VegetableID: " . $row["VegetableID"]. " "
                  ."Quantity ". $row["Quantity"]." Price ". $row["Price"]. "<br>";
                                                   }
       } else {
                echo "0 results";
               }

    }

    // - Hàm thêm mới thông tin hóa đơn và chi tiết hóa đơn  -->

    function addOrder($order, $detail){
     include("../connection.php");
     // lấy thông tin hóa đơn nhập vào từ user
    $order = $_POST["orderID"];
    $cus = $_POST["cusID"];
    $date = $_POST["Date"];
    $total = $_POST["Total"];
    $note = $_POST["Note"];
     // lấy thông tin chi tiết hóa đơn
    $detail = $_POST["OrderID"];
    $vetID = $_POST["VegetableID"];
    $quantity = $_POST["Quantity"];
    $price = $_POST["Price"];

   // Kiểm tra hóa đơn đã tồn tại chưa
      $sql="select OrderID from orders where OrderID='$order'";
      $kt=mysqli_query($connect, $sql);
          if(mysqli_num_rows($kt)  > 0){
              echo "Hóa đơn đã tồn tại";
          }else{
              // lưu trữ dữ liệu vào db
        $sql = "INSERT INTO orders(orderID,cusID,Date,Total,Note) VALUES ('$order','$cus','$date','$total','$note')";
        $sql1 = "INSERT INTO orderdetail(OrderID,VegetableID,Quantity) VALUES ('$detail','$vetID','$quantity','$price')";
              // thực thi câu $sql với biến connect lấy từ file connection.php
                 mysqli_query($connect,$sql);
                 mysqli_query($connect,$sql1);
                 echo '<script">alert("Đăng ký thành công!"); window.location="register.php";</script>';

    }

    } 





?>