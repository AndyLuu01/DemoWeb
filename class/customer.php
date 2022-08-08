<!-- Câu 4. Tạo file class/customer.php, viết lớp customer với các hàm thực hiện:  -->
<!-- a) Lấy thông tin khách hàng theo id  -->
<?php
getByID($cusID);
  function getByID($cusID){
    include("../connection.php");
 
    $sql = "SELECT * FROM customers where CustomerID='$cusID'";

    $result = mysqli_query($connect, $sql);
 
if (mysqli_num_rows($result) > 0) {
   // hiển thị dữ liệu trên trang
   while($row = mysqli_fetch_assoc($result)) {
       echo "Name: " . $row["FullName"]. " address: " . $row["Address"]. " "
           ." City ". $row["City"]. "<br>";
   }
} else {
   echo "0 results";
}
}

 // b) Thêm mới thông tin của một khách hàng 

function add($cus){
    include("../connection.php");

    //Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["FullName"])) { $name = $_POST['FullName']; }
    if(isset($_POST["Password"])) { $date = $_POST['Password']; }
    if(isset($_POST["Address"])) { $description = $_POST['Address']; }
    if(isset($_POST["City"])) { $content = $_POST['City']; }

    //Insert dữ liệu vào sql
    $sql = "INSERT INTO CustomerID (FullName,Password,Address,City)
    VALUES ('$CustomerID', '$Password', '$Address', '$City')";

    if ($connect->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}
//Đóng database
$connect->close();

}

?>

