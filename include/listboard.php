<?php 
$matl =$_GET["matheloai"];
$sql = "SELECT tentheloai from theloai where idtheloai= $matl";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();


    $sql1= "SELECT masach, tensach, idtacgia, soluong, tinhtrang, NXB, namxuatban from sach where theloai = $matl";
    $result1 = $conn->query($sql1);

     ?>


<hr>


    <h5 class="text-left">Thể loại: <?php echo $row['tentheloai'] ?> </h5>
    <hr>
  <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
<!-- bắt đàu vòng lặp -->

    <?php
    
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
        if($cout < 30){
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

$count ++;} ?>
    
  </div>