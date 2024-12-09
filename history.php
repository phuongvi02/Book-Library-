<?php
session_start();
$servername ="localhost";
$username = "urginzgu_root";
$password = "123321@Aa";
$dbname = "urginzgu_root";

//khoi tao ket noi
$conn = new mysqli($servername, $username, $password, $dbname);
$user = $_SESSION['username'];

$sqlmuonsach = "SELECT masach, ngaymuon, ngaytra from sachmuon_tra where masv=$user";
$resultmuonsach = $conn->query($sqlmuonsach);
  // Đặt encoding UTF-8 để tránh lỗi hiển thị tiếng Việt
mysqli_query($conn, "SET NAMES 'UTF8'");
 
?>



<?php include('include/connection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<div class="nav-day"><?php include('include/nav.php'); ?></div>

<br>
<br>

<div class="container">
<br>
<div class="row">
        <aside class="col-md-1"><span> </span></aside>
        <article class="col-md-10">
        <div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Tên sách</th>
      <th scope="col">Ngày mượn</th>
      <th scope="col">Ngày trả</th>
    </tr>
  </thead>
  <tbody>
  <?php
        while($rowmuonsach = $resultmuonsach->fetch_assoc()){

          $masach = $rowmuonsach["masach"];
    $sqll1 = "SELECT tensach from sach where masach= $masach";
    $resultt1 = $conn->query($sqll1);
    $roww1 = $resultt1->fetch_assoc();

          ?>
        <tr>
        <td><?php  echo $roww1["tensach"]  ?></td>
        <td><?php echo $rowmuonsach["ngaymuon"]; ?></td>
        <td><?php echo $rowmuonsach['ngaytra'] ?></td>
            
        </tr>
    <?php
        }

        ?>
    
  </tbody>
</table>
        </div>
        </article>
        <aside class="col-md-1"><span>  </span></aside>
    </div>
</div>
<div>
    <?php include('include/footer.php'); ?>
</div>
</body>
</html>