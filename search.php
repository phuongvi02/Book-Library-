<?php include('include/connection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>

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


        if (isset($_POST['search'])) {
            $search = $_POST['datasearch'];
            $sqlsearch = "SELECT masach from sach where tensach like '%$search%' ";
            $resultsearch = mysqli_query($conn, $sqlsearch);
            if ($resultsearch) {
                if (mysqli_num_rows($resultsearch)>0) {
                    ?>
                    <div class="container text-center ">
                    <h5>Kết quả tìm kiếm cho "<?php echo $search ?>"</h5>
  <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
    
<!-- bắt đàu vòng lặp -->
    <?php
    $sql= "SELECT masach, tensach, idtacgia, theloai, soluong, tinhtrang, NXB, namxuatban from sach where tensach like '%$search%'";
    $result = $conn->query($sql);
    if ($result->num_rows ==0) {
        echo "khong co du lieu datatable ";
    }


  while($row = $result->fetch_assoc()){
    $masach = $row['masach'];
    $maid= $row['masach'];
    $masach = $masach+10;
    $sql1 = "SELECT image from image_book where id= $masach";
    $result1 = $conn->query($sql1);
    $row2 = $result1->fetch_assoc();



          ?>
    <div class="main">
    <div class="col">
      <div class="p-3">
        <br>
        <img class="rounded mx-auto d-block" src="image\<?php echo $row2['image'];
        $nameimg = $row2['image'];
        ?>" alt="" width="160" height="250" srcset="">
        <br>
        <?php echo $row['tensach'] ;
        $cout = strlen($row['tensach']);
        if($cout < 50){
          echo ("<br> <br>");
        }
        ?>
        <hr>
        <a class="btn btn-outline-info" href="productiona.php?masach=<?php echo $maid; ?>">Xem sách</a>


      </div>
    </div>
    </div>
    <?php } ?>
    
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
</div>
<div>
    <?php include('include/footer.php'); ?>
</div>
</body>
</html>