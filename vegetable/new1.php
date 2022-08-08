<!-- Câu 23. Tạo file vegetable/new.php hiển thị form nhập sản phẩm mới.  -->
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
    <h3>Add Vegetable</h3>
<form action="new1.php" class="addvege" method='POST'> 
  <div class="row g-3">
  <div class="col-md-6">
    <label for="input" class="form-label">VegetableName:</label>
    <input type="textfield" class="form-control" name='vename' id="input">
  </div>
  <div class="col-md-4">
  <label for="inputPassword4" class="form-label">CategoryName:</label> <br>
    <select id="inputState" class="form-control selected3" name='unit' required>
      <option selected>Fruit</option>
      <option>Fruit</option>
      <option>vegetable</option>
    </select>
  </div>
    </div>
    <div class="row g-3">
    <div class="col-md-3">
    <label for="inputPassword4" class="form-label">Unit:</label> <br>
    <select id="inputState" class="form-control selected3" name='unit' required>
      <option selected>Kg</option>
      <option>Kg</option>
      <option>gam</option>
      <option>quintal</option>
    </select>
    </div>
    <div class="col-md-3">
    <label for="inputPassword4" class="form-label">Amount:</label> <br>
    <input type="textfield" class="form-control selected4" id="inputEmail4" name='amount' value="20" required>
    </div>
    <div class="col-md-4">
    <label for="inputPassword4" class="form-label">Price:</label> <br>
    <input type="textfield" class="form-control selected3" id="inputEmail4" name='price' value="50000" required>
    </div>
</div>
<script>
  const fileUpload = document.querySelector("#file-upload");
  fileUpload.addEventListener("change", (event) => {
	const files = event.target.files;
	
	const getSizeImage = files[0].size;
	
	if(size > 1024 * 1024) alert("Chỉ cho phép tải tệp tin nhỏ hơn 1MB");
	else alert("Đăng tải tệp thành công");
})

</script>
  <label for="inputEmail4" class="form-label">Image:</label>
  <button class="form-control image-field1">
     <input type="file" class="image-click" name='image' id='file-upload' required/>
</button>
  <div class="col-12">
    <br><button class="btn btn-primary" name="addvege" >Add</button>
    <?php require 'add.php';?> 
  </div>
</form>
</body>
</html>