<!-- Câu 11. Tạo file class/category.php. Viết lớp category với các hàm sau:  -->
<?php
// a) Lấy tất cả danh mục 
   function getAll(){
    include("../connection.php");
    $sql = "SELECT * FROM category";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row["CategoryID"]. " Name: " . $row["Name"]. " "
                ." Description ". $row["Description"]. "<br>";
        }
     } else {
        echo "0 results";
     }   
   } 

//    b) Thêm mới một danh mục
    function add($cate){
    include("../connection.php");
    $cate = $_POST["cateInput"];
    $name = $_POST["nameInput"];
    $discreption = $_POST["desInput"];

   // Kiểm tra category đã tồn tại chưa
      $sql="select Name from Category where Name='$name'";
      $kt=mysqli_query($connect, $sql);
          if(mysqli_num_rows($kt)  > 0){
              echo "Tài khoản đã tồn tại";
          }else{
              // lưu trữ dữ liệu vào db
              $sql = "INSERT INTO Category(CategoryID,Name,Discription) VALUES ('$cate','$name','$discreption')";
              // thực thi câu $sql với biến connect lấy từ file connection.php
                 mysqli_query($connect,$sql);
                 echo '<script">alert("Đăng ký thành công!"); window.location="register.php";</script>';

    }
}

    } 

?>
