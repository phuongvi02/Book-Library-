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
    $sql= "SELECT masach, tensach, idtacgia, theloai, soluong, tinhtrang, NXB, namxuatban from sach";
    $result = $conn->query($sql);
    if ($result->num_rows ==0) {
        echo "khong co du lieu datatable ";
    }
    // Đặt encoding UTF-8 để tránh lỗi hiển thị tiếng Việt
mysqli_query($conn, "SET NAMES 'UTF8'");
?>



<div class="container text-center ">
  <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
<!-- bắt đàu vòng lặp -->
    <?php
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
        <a class="btn btn-outline-info" href="productiona.php?masach=<?php echo $maid; ?>">xem sách</a>


      </div>
    </div>
    </div>
    <?php } ?>
    
  </div>
</div>
