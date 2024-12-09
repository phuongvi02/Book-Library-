<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thông tin sách</title>
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


?>
<?php include('include/nav.php'); ?>
    
<div class="container">
    <?php 
    
    if (isset($_POST['search'])) {
        $search = $_POST['datasearch'];
        $sqlsearch = "SELECT masach from sach where tensach like '%$search%' ";
        $resultsearch = mysqli_query($conn, $sqlsearch);
        if ($resultsearch) {
            if (mysqli_num_rows($resultsearch)>0) {
                ?>
                <div class="container text-center ">
                <h5>kết quả tìm kiếm cho "<?php echo $search ?>"</h5>
<div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">

<!-- bắt đàu vòng lặp -->
<?php
$sql= "SELECT masach, tensach, idtacgia, theloai, soluong, tinhtrang, NXB, namxuatban from sach where tensach like '%$search%'";
$resultt = $conn->query($sql);
if ($resultt->num_rows ==0) {
    echo "khong co du lieu datatable ";
}
if ($resultt->num_rows > 0) {

    ?>
        
            <h1>Thông tin sách </h1>
<table class="table">
<thead>
<tr>
  <th scope="col">Mã sách</th>
  <th scope="col">Bìa sách</th>
  <th scope="col">Tên sách</th>
  <th scope="col">Tác giả</th>
  <th scope="col">Thể loại</th>
  <th scope="col">Số lượng</th>
  <th scope="col">Tình trạng</th>
  <th scope="col">Nhà xuất bản</th>
  <th scope="col">Năm xuất bản</th>
  <th scope="col">Chức năng</th>
</tr>
</thead>
<tbody>

    <?php
    while($roww = $resultt->fetch_assoc()){

      $masach = $roww["masach"];
      $maid= $roww['masach'];
      $masach = $masach+10;
$sqll1 = "SELECT image from image_book where id= $masach";
$resultt1 = $conn->query($sqll1);
$roww1 = $resultt1->fetch_assoc();

      ?>
    <tr>
    <td><?php  echo $roww["masach"]  ?></td>
    <td><img class="rounded mx-auto d-block" src="image1\<?php echo $roww1['image'];
    $nameimg = $roww1['image'];
    ?>" alt="" width="160" height="250" srcset=""></td>
    <td><?php echo $roww["tensach"]; ?></td>
    <td>
      <?php 
      //bảng tác giả
      $matacgia = $roww['idtacgia'];
    $sqll2 = "SELECT  tentacgia FROM tacgia where idtacga=$matacgia";
    $resultt2 = $conn->query($sqll2);
    if ($resultt2->num_rows ==0) {
      echo "khong co du lieu datatable ";
}
$roww2 = $resultt2->fetch_assoc();
echo $roww2['tentacgia'];

      ?>
    </td>
    <td>
        <?php 
        $matheloai = $roww['theloai'];
        $sqll3 = "SELECT  tentheloai FROM theloai where idtheloai=$matheloai";
        $resultt3 = $conn->query($sqll3);
        if ($resultt3->num_rows ==0) {
          echo "khong co du lieu datatable ";
}
$roww3 = $resultt3->fetch_assoc();
echo $roww3['tentheloai']; ?>
    </td>
    <td><?php echo $roww['soluong'] ?></td>
        
    <td><?php
$matinhtrang = $roww['tinhtrang'];
$sqll4 = "SELECT  chitiet FROM tinhtrang_sach where id=$matinhtrang";
$resultt4 = $conn->query($sqll4);
if ($resultt4->num_rows ==0) {
echo "khong co du lieu datatable ";
}
$roww4 = $resultt4->fetch_assoc();
echo $roww4['chitiet']; ?>

    </td>
    <td>
      <?php  
      $maxuatban = $roww['NXB'];
      $sqll5 = "SELECT  tennhaxuatban FROM nhaxuatban where idxuatban=$maxuatban";
      $resultt5 = $conn->query($sqll5);
      if ($resultt5->num_rows ==0) {
        echo "khong co du lieu datatable ";
}
$roww5 = $resultt5->fetch_assoc();
echo $roww5['tennhaxuatban'];
      
      ?>
    </td>
    <td><?php echo $roww['namxuatban'] ?></td>
    <td>
      <a class="btn btn-outline-primary" href="suasach.php?masach=<?php echo $roww['masach'] ?>">Sửa</a>
      <span> | </span>
      <a class="btn btn-outline-danger" onclick="return confirm('bạn có muốn xóa cuốn sách này không');" href="xoahoadon.php?mahoadon=<?php echo $mahoadon; ?>">Xóa</a>
      <span> | </span>
    </td>
    </tr>
<?php
    }

    ?>


    <?php
}else {
    echo "</br> khong co du lieu";
}



?>

</div>
</div>
<?php
            }else{
              ?>
              <div class="container text-center "> <h5> Không có kết quả tìm kiếm cho "<?php echo $search ?>"</h5> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> </div><?php
            }
        }
    }
    
    ?>


    </div>
    
</body>
</html>