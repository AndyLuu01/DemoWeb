<!-- Câu 22. Tạo file category/add.php được gọi xử lý khi nhấn nút Add thêm mới danh mục.  -->
<?php
//Khai báo sử dụng session
session_start();
//Xử lý đăng nhập
if (isset($_POST['addsp']))
{

        include("../connection.php");
        $cate = $_POST["name"];
        $des = $_POST["des"];
       // Kiểm tra category đã tồn tại chưa
          $sql="select Name from Category where Name='$cate'";
          $kt=mysqli_query($connect, $sql);
              if(mysqli_num_rows($kt)  > 0){
                  echo "đã tồn tại";
              }else{
                  // lưu trữ dữ liệu vào db
                  $sql = "INSERT INTO category(Name,Description) VALUES ('$cate','$des')";
                  // thực thi câu $sql với biến connect lấy từ file connection.php
                     mysqli_query($connect,$sql);
                     echo "Add Successfully!";
    
        }
}
?>