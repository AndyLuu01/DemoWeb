<!-- Câu 7. Chức năng đăng kí  -->
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
<div class="col md-2">
    <h3>Register</h3>
    <form action="register.php" class="dangky" method='POST'>
      
    <label >Your's FullName:</label><br>
        <input type="textfield" class="form-control register-form" name='username' required/>
        
        <label >Password</label><br>
        <input type="textfield" class="form-control register-form" name='password' required/>
        
    <label >Address</label><br>
        <input type="textfield" class="form-control register-form" name='address'required/>
       
    <label >City</label><br>
        <input type="textfield" class="form-control register-form" name='city'required/>
        
    <br>
    <button type="submit" class="btn btn-primary" name="dangky">Register</button>
    <?php require 'saveRegister.php';?> 
    </div>
</form>
 
</body>
</html>