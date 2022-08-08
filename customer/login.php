<!-- Câu 5. Chức năng đăng nhập.  -->
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
<!-- form dang nhap -->
<h3 class="col-md-2">Login</h3>
<form action='login.php' class="dangnhap" method='POST'> 
  <div class="col-md-2" >
Your's ID: <input type='text' name='username' class="form-control "/> <br>
</div >
<div class="col-md-2" >
Password: <br> <input type='text' name='password' class="form-control"/> <br>
</div >
<input type='submit' class="btn btn-primary" name="dangnhap" value='Login' />
<input type='submit' class="btn btn-primary" name="dangky" value='Register' />
  <?php require 'checkLogin.php';?> 
</form>
</body>
</html>
