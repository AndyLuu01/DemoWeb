<!-- Câu 8. Tạo trang customer/saveRegister.php sẽ được gọi xử
lý khi nhấn nút Register lưu để thông tin khách hàng.  -->
<?php
// Dùng isset để kiểm tra Form
if(isset($_POST['dangky'])){
    include("../connection.php");
    $username = $_POST["username"];
    $password = $_POST["password"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    //Kiểm tra xem đã điền đủ thông tin chưa
    if ($username == "" || $password == "" || $address == "" || $city == "") {
         echo "bạn vui lòng nhập đầy đủ thông tin";
    }else{
            // Kiểm tra tài khoản đã tồn tại chưa
            $sql="select * from customers where FullName='$username'";
          $kt=mysqli_query($connect, $sql);

          if(mysqli_num_rows($kt)  > 0){
              echo "Tài khoản đã tồn tại";
          }else{
              // lưu trữ dữ liệu vào db
              $sql = "INSERT INTO customers(Password,FullName,Address,City) VALUES ('$password','$username','$address','$city')";
              // thực thi câu $sql với biến connect lấy từ file connection.php
                 mysqli_query($connect,$sql);
                 echo '<script">alert("Đăng ký thành công!"); window.location="register.php";</script>';
    }
}       
}
?>