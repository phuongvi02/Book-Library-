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
    // thể loại giáo dục id=1
    $sql1= "SELECT masach, tensach, idtacgia, soluong, tinhtrang, NXB, namxuatban from sach where theloai = 1";
    $result1 = $conn->query($sql1);
   

    //thể loại trinh thám id=2
    $sql2= "SELECT masach, tensach, idtacgia, soluong, tinhtrang, NXB, namxuatban from sach where theloai = 2";
    $result2 = $conn->query($sql2);
    

    //thể loạikinh dị id=3
    $sql3= "SELECT masach, tensach, idtacgia, soluong, tinhtrang, NXB, namxuatban from sach where theloai = 3";
    $result3 = $conn->query($sql3);
    
    // thể loại tình cảm id =4
    $sql4= "SELECT masach, tensach, idtacgia, soluong, tinhtrang, NXB, namxuatban from sach where theloai = 4";
    $result4 = $conn->query($sql4);
   

    //thể loại đời sống id =5
    $sql5= "SELECT masach, tensach, idtacgia, soluong, tinhtrang, NXB, namxuatban from sach where theloai = 5";
    $result5 = $conn->query($sql5);
    

    // thể loại tiểu thyết id =6
    $sql6= "SELECT masach, tensach, idtacgia,soluong, tinhtrang, NXB, namxuatban from sach where theloai = 6";
    $result6 = $conn->query($sql6);
    

?>

<div class="container text-center ">
    <hr>
    <h5 class="text-left">Thể loại Giáo dục</h5>
    <hr>
  <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
<!-- bắt đàu vòng lặp -->

    <?php
    $count =1;
  while($row1 = $result1->fetch_assoc()){
    $masach = $row1['masach'];
    $maid= $row1['masach'];
    $masach = $masach+10;
    $sql7 = "SELECT image from image_book where id= $masach";
    $result7 = $conn->query($sql7);
    $row7 = $result7->fetch_assoc();
          ?>
    <div class="main">
    <div class="col">
      <div class="p-3">
        <br>
        <img class="rounded mx-auto d-block" src="image\<?php echo $row7['image'];
        $nameimg = $row7['image'];
        ?>" alt="" width="160" height="250" srcset="">
        <br>
        <?php echo $row1['tensach'] ;
        $cout = strlen($row1['tensach']);
        if($cout < 40){
          echo ("<br> <br>");
        }
        ?>
        <hr>
        <a class="btn btn-outline-info" href="productiona.php?masach=<?php echo $maid; ?>">xem sách</a>


      </div>
    </div>
    </div>
    <?php
    mysqli_free_result($result7);
if ($count ==4) {
    break;
}
$count ++;} ?>
    
  </div>

  <hr>
    <h5 class="text-left">Thể loại Trinh thám</h5>
    <hr>
  <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
<!-- bắt đàu vòng lặp -->

    <?php
    $count =1;
  while($row2 = $result2->fetch_assoc()){
    $masach = $row2['masach'];
    $maid= $row2['masach'];
    $masach = $masach+10;
    $sql7 = "SELECT image from image_book where id= $masach";
    $result7 = $conn->query($sql7);
    $row7 = $result7->fetch_assoc();
          ?>
    <div class="main">
    <div class="col">
      <div class="p-3">
        <br>
        <img class="rounded mx-auto d-block" src="image\<?php echo $row7['image'];
        $nameimg = $row7['image'];
        ?>" alt="" width="160" height="250" srcset="">
        <br>
        <?php echo $row2['tensach'] ;
        $cout = strlen($row2['tensach']);
        if($cout < 40){
          echo ("<br> <br>");
        }
        ?>
        <hr>
        <a class="btn btn-outline-info" href="productiona.php?masach=<?php echo $maid; ?>">xem sách</a>


      </div>
    </div>
    </div>
    <?php
    mysqli_free_result($result7);
if ($count ==4) {
    break;
}
$count ++;} ?>
    
  </div>


  <hr>
    <h5 class="text-left">Thể loại Kinh dị</h5>
    <hr>
  <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
<!-- bắt đàu vòng lặp -->

    <?php
    $count =1;
  while($row3 = $result3->fetch_assoc()){
    $masach = $row3['masach'];
    $maid= $row3['masach'];
    $masach = $masach+10;
    $sql7 = "SELECT image from image_book where id= $masach";
    $result7 = $conn->query($sql7);
    $row7 = $result7->fetch_assoc();
          ?>
    <div class="main">
    <div class="col">
      <div class="p-3">
        <br>
        <img class="rounded mx-auto d-block" src="image\<?php echo $row7['image'];
        $nameimg = $row7['image'];
        ?>" alt="" width="160" height="250" srcset="">
        <br>
        <?php echo $row3['tensach'] ;
        $cout = strlen($row3['tensach']);
        if($cout < 40){
          echo ("<br> <br>");
        }
        ?>
        <hr>
        <a class="btn btn-outline-info" href="productiona.php?masach=<?php echo $maid; ?>">xem sách</a>


      </div>
    </div>
    </div>
    <?php
    mysqli_free_result($result7);
if ($count ==4) {
    break;
}
$count ++;} ?>
    
  </div>


  <hr>
    <h5 class="text-left">Thể loại tình cảm</h5>
    <hr>
  <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
<!-- bắt đàu vòng lặp -->

    <?php
    $count =1;
  while($row4 = $result4->fetch_assoc()){
    $masach = $row4['masach'];
    $maid= $row4['masach'];
    $masach = $masach+10;
    $sql7 = "SELECT image from image_book where id= $masach";
    $result7 = $conn->query($sql7);
    $row7 = $result7->fetch_assoc();
          ?>
    <div class="main">
    <div class="col">
      <div class="p-3">
        <br>
        <img class="rounded mx-auto d-block" src="image\<?php echo $row7['image'];
        $nameimg = $row7['image'];
        ?>" alt="" width="160" height="250" srcset="">
        <br>
        <?php echo $row4['tensach'] ;
        $cout = strlen($row4['tensach']);
        if($cout < 40){
          echo ("<br> <br>");
        }
        ?>
        <hr>
        <a class="btn btn-outline-info" href="productiona.php?masach=<?php echo $maid; ?>">xem sách</a>


      </div>
    </div>
    </div>
    <?php
    mysqli_free_result($result7);
if ($count ==4) {
    break;
}
$count ++;} ?>
    
  </div>

  <hr>
    <h5 class="text-left">Thể loại đời sống</h5>
    <hr>
  <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
<!-- bắt đàu vòng lặp -->

    <?php
    $count =1;
  while($row5 = $result5->fetch_assoc()){
    $masach = $row5['masach'];
    $maid= $row5['masach'];
    $masach = $masach+10;
    $sql7 = "SELECT image from image_book where id= $masach";
    $result7 = $conn->query($sql7);
    $row7 = $result7->fetch_assoc();
          ?>
    <div class="main">
    <div class="col">
      <div class="p-3">
        <br>
        <img class="rounded mx-auto d-block" src="image\<?php echo $row7['image'];
        $nameimg = $row7['image'];
        ?>" alt="" width="160" height="250" srcset="">
        <br>
        <?php echo $row5['tensach'] ;
        $cout = strlen($row5['tensach']);
        if($cout < 40){
          echo ("<br> <br>");
        }
        ?>
        <hr>
        <a class="btn btn-outline-info" href="productiona.php?masach=<?php echo $maid; ?>">xem sách</a>


      </div>
    </div>
    </div>
    <?php
    mysqli_free_result($result7);
if ($count ==4) {
    break;
}
$count ++;} ?>
    
  </div>


  <hr>
    <h5 class="text-left">Thể loại tiểu thuyết</h5>
    <hr>
  <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
<!-- bắt đàu vòng lặp -->

    <?php
    $count =1;
  while($row6 = $result6->fetch_assoc()){
    $masach = $row6['masach'];
    $maid= $row6['masach'];
    $masach = $masach+10;
    $sql7 = "SELECT image from image_book where id= $masach";
    $result7 = $conn->query($sql7);
    $row7 = $result7->fetch_assoc();
          ?>
    <div class="main">
    <div class="col">
      <div class="p-3">
        <br>
        <img class="rounded mx-auto d-block" src="image\<?php echo $row7['image'];
        $nameimg = $row7['image'];
        ?>" alt="" width="160" height="250" srcset="">
        <br>
        <?php echo $row6['tensach'] ;
        $cout = strlen($row6['tensach']);
        if($cout < 40){
          echo ("<br> <br>");
        }
        ?>
        <hr>
        <a class="btn btn-outline-info" href="productiona.php?masach=<?php echo $maid; ?>">xem sách</a>


      </div>
    </div>
    </div>
    <?php
    mysqli_free_result($result7);
if ($count ==4) {
    break;
}
$count ++;} ?>
    
  </div>

</div>