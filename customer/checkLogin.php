<!-- Câu 6. Tạo trang customer/checkLogin.php sẽđược gọi xử lý khi nhấn nút Login. -->
<?php
//Khai báo sử dụng session
session_start();
//Xử lý đăng nhập
if (isset($_POST['dangnhap']))
{
//Kết nối tới database
include("../connection.php");
  
//Lấy dữ liệu nhập vào
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);
  
//Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
if (!$username || !$password) {
echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. ";
exit;
}
    
//Kiểm tra tên đăng nhập có tồn tại không
$query = "Select * From customers where CustomerID='$username'";
$result = mysqli_query($connect , $query);

if (mysqli_num_rows($result) > 0) {
    echo "đã tìm thấy người dùng"."<br/>";
    }
 else {
    echo "Không tìm thấy người dùng!"."<br/>";
    exit;
 
}
//Lấy mật khẩu trong database ra
$row = mysqli_fetch_array($result);  

//So sánh 2 mật khẩu có trùng khớp hay không
if ($password != $row['Password']) {
       echo "Mật khẩu không đúng. Vui lòng nhập lại. ";
       exit;
}
else{ 
//Lưu tên đăng nhập
       $_SESSION['name'] = $row['FullName'];
       header("Location: ../vegetable/index.php");
       die();
       $connect->close();
}
}
?>