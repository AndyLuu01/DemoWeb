<!-- Câu 20. Chức năng đăng xuất  -->
<?php
session_start();
session_destroy();
header("Location: ../index.php");
?>