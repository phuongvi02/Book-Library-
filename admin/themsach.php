<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tải lên sách</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</head>
<body>
    <?php 
    $servername ="localhost";
    $username = "urginzgu_root";
    $password = "123321@Aa";
    $dbname = "urginzgu_root";
    
    //khoi tao ket noi
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    //kiem tra ket noi
    if($conn->connect_error){
        die("ket noi that bai" . $conn->connect_error);
    }
    // Đặt encoding UTF-8 để tránh lỗi hiển thị tiếng Việt
mysqli_query($conn, "SET NAMES 'UTF8'");


//bảng tác giả
    $sql = "SELECT  idtacga FROM tacgia";
    $result = $conn->query($sql);
if ($result->num_rows ==0) {
   echo "khong co du lieu datatable ";
}
$sql4 = "SELECT  idtacga,tentacgia FROM tacgia";
    $result4 = $conn->query($sql4);
if ($result4->num_rows ==0) {
   echo "khong co du lieu datatable ";
}


//bảng thể loại
$sql1 = "SELECT  idtheloai FROM theloai";
    $result1 = $conn->query($sql1);
if ($result1->num_rows ==0) {
   echo "khong co du lieu datatable ";
}

$sql11= "SELECT  tentheloai FROM theloai";
    $result11 = $conn->query($sql11);
if ($result11->num_rows ==0) {
   echo "khong co du lieu datatable ";
}

//bảng tình trạng sách
$sql2 = "SELECT  id FROM tinhtrang_sach";
    $result2 = $conn->query($sql2);
if ($result2->num_rows ==0) {
   echo "khong co du lieu datatable ";
}

$sql22 = "SELECT chitiet FROM tinhtrang_sach";
    $result22 = $conn->query($sql22);
if ($result22->num_rows ==0) {
   echo "khong co du lieu datatable ";
}

//bảng nhà xuất bản
$sql3 = "SELECT  idxuatban FROM nhaxuatban";
    $result3 = $conn->query($sql3);
if ($result3->num_rows ==0) {
   echo "khong co du lieu datatable ";
}

$sql33 = "SELECT idxuatban, tennhaxuatban FROM nhaxuatban";
    $result33 = $conn->query($sql33);
if ($result33->num_rows ==0) {
   echo "khong co du lieu datatable ";
}


?>
<?php include('include/nav.php'); ?>
    
<div class="container">
    <div>
    <form class="row g-3 needs-validation" novalidate action="upload.php" method="post" enctype="multipart/form-data">
  <div class="col-md-1 position-relative">
    <label for="validationTooltip01" class="form-label">Mã sách</label>
    <input type="text" class="form-control" name="masach"  id="validationTooltip01" placeholder="1" required>
    
  </div>
  <div class="col-md-6 position-relative">
    <label for="validationTooltip02" class="form-label">Tên sách</label>
    <input type="text" name="tensach" class="form-control" id="validationTooltip02" placeholder="nhập tên sách" required>
  </div>
  <div class="col-md-1 position-relative">
    <label for="validationTooltip01" class="form-label">Mã tác giả</label>
    <select  class="form-select" required name="matacgia" aria-label="Default select example">
  <option  selected>Chọn mã</option>
  <?php
        while($row = $result->fetch_assoc()){
          ?>
            <option ><?php echo $row["idtacga"] ?></option>
                <?php
                }
                ?>
</select>
    
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltipUsername" class="form-label"> Tác giả</label>
    <div class="input-group has-validation">
      
    <select class="form-select" aria-label="Default select example">
  <option selected>Chọn tác giả sách</option>
  <?php
        while($row = $result4->fetch_assoc()){
          ?>
            <option> <?php echo $row['idtacga']; ?><span> | </span><?php echo $row["tentacgia"] ?></option>
                <?php
                }
                ?>
</select>
    </div>
  </div>
  <div class="col-md-2 position-relative">
    <label for="validationTooltip01" class="form-label">Mã thể loại</label>
    <select name="matheloai" required class="form-select" aria-label="Default select example">
  
  <?php
        while($row = $result1->fetch_assoc()){
          ?>
            <option><?php echo $row["idtheloai"] ?></option>
                <?php
                }
                ?>
</select>
    
  </div>
  <div class="col-md-2 position-relative">
    <label for="validationTooltip03" class="form-label">Thể loại</label>
    <select class="form-select" aria-label="Default select example">
  <option selected>Chọn thể loại sách</option>
  <?php
        while($row = $result11->fetch_assoc()){
          ?>
            <option><?php echo $row["tentheloai"] ?></option>
                <?php
                }
                ?>
</select>
  </div>
  <div class="col-md-2 position-relative">
    <label for="validationTooltip04" class="form-label">Số lượng</label>
    <input type="text" name="soluong"  class="form-control" id="validationTooltip02" placeholder="Nhập số lượng sách" required>
  </div>
  <div class="col-md-2 position-relative">
    <label for="validationTooltip01"  class="form-label">Mã tình trạng </label>
    <select name="matinhtrang" required class="form-select" aria-label="Default select example">
  
  <?php
        while($row = $result2->fetch_assoc()){
          ?>
            <option><?php echo $row["id"] ?></option>
                <?php
                }
                ?>
</select>
    
  </div>
  <div class="col-md-3 position-relative">
    <label for="validationTooltip05" class="form-label">Tình trạng sách</label>
    <select class="form-select"  aria-label="Default select example">
  <option name="chitietsach" selected>Chọn tình trạng sách</option>
  <?php
        while($row = $result22->fetch_assoc()){
          ?>
            <option><?php echo $row["chitiet"] ?></option>
                <?php
                }
                ?>
</select>

  </div>
  <div class="col-md-2 position-relative">
    <label for="validationTooltip01" class="form-label">Mã NXB </label>
    <select name="idnxb" required class="form-select" aria-label="Default select example">
  <option selected>Chọn mã</option>
  <?php
        while($row = $result3->fetch_assoc()){
          ?>
            <option><?php echo $row["idxuatban"] ?></option>
                <?php
                }
                ?>
</select>
    
  </div>
  <div class="col-md-4 position-relative">
    <label for="validationTooltip05" class="form-label">Nhà Xuất Bản</label>
    <select name="nxb" class="form-select" aria-label="Default select example">
  <option selected>Chọn NXB</option>
  <?php
        while($row = $result33->fetch_assoc()){
          ?>
            <option><?php echo $row['idxuatban'] ?><span> | </span> <?php echo $row["tennhaxuatban"]; ?></option>
                <?php
                }
                ?>
</select>
  </div>
  <div class="col-md-2 position-relative">
    <label for="validationTooltip04" class="form-label">Năm xuất bản</label>
    <input type="text" name="namxb"  class="form-control" id="validationTooltip02" placeholder="Nhập năm xuất bản sách" required>
  </div>
  <div class="mx-2">
  <div class="form-floating">
  <textarea required class="form-control" placeholder="Leave a comment here" name="mota" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Mô tả</label>
</div>
  </div>
  <div class="mx-2">
  <label for="formFile" class="form-label">Chọn ảnh bìa sách</label>
  <input required class="form-control" type="file" name="my_image" id="formFile">
</div>
<hr>
  <div class="col-12">
    <button class="btn btn-primary" onclick="return confirm('Thêm sách thành công');" name="submit" type="submit">Thêm sách</button>
    <br>
  </div>
</form>
    </div>



    <div>
    <form class="row g-3"  action="themtacgia.php" method="post" enctype="multipart/form-data">
      <br>
  <hr>
  <h5>thêm tác gỉả</h5>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Mã tác giả</label>
    <input type="text" required class="form-control" name="idtg" id="inputidtacgia">
  </div>
  <div class="col-md-8">
    <label for="inputPassword4" class="form-label">Tên tác giả</label>
    <input type="text" required class="form-control" name="nametg" id="inputnametacgia">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Thêm tác giả</button>
  </div>
</form>
    </div>

    <div>
    <form class="row g-3"  action="themNXB.php" method="post" enctype="multipart/form-data">
      <br>
  <hr>
  <h5>Thêm nhà xuất bản</h5>
  <div class="col-md-4">
    <label for="inputEmail4" class="form-label">Mã nhà xuất bản</label>
    <input type="text" required class="form-control" name="idNXB" id="inputidnxb">
  </div>
  <div class="col-md-8">
    <label for="inputPassword4" class="form-label">Tên nhà xuất bản</label>
    <input type="text" required class="form-control" name="nameNXB" id="inputnamenxb">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Thêm nhà xuất bản</button>
  </div>
</form>
    </div>

</div>
    






</body>
</html>