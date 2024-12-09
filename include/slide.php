<?php 

$masach= 1;
$sql= "SELECT tensach, idtacgia, theloai, soluong, tinhtrang, NXB, namxuatban from sach where masach=$masach";
    $result = $conn->query($sql);
    if ($result->num_rows ==0) {
        echo "khong co du lieu datatable ";
    }
$idimage = $masach + 10;
$row= $result->fetch_assoc();
$idtheloai= $row['theloai'];
$idtacgia=$row['idtacgia'];
$idxuatban = $row['NXB'];
//gọi bảng image
$sql1= "SELECT image from image_book where id=$idimage";
    $result1 = $conn->query($sql1);
    if ($result1->num_rows ==0) {
        echo "khong co du lieu datatable ";
    }
    $row1= $result1->fetch_assoc();

    //thể loại

    $sql2= "SELECT tentheloai from theloai where idtheloai=$idtheloai";
    $result2 = $conn->query($sql2);
    if ($result2->num_rows ==0) {
        echo "khong co du lieu datatable ";
    }
    $row2= $result2->fetch_assoc();

//
$sql3= "SELECT tentacgia from tacgia where idtacga=$idtacgia";
    $result3 = $conn->query($sql3);
    if ($result3->num_rows ==0) {
        echo "khong co du lieu datatable ";
    }
    $row3= $result3->fetch_assoc();


    //
$sql4= "SELECT tennhaxuatban from nhaxuatban where idxuatban=$idxuatban";
$result4 = $conn->query($sql4);
if ($result4->num_rows ==0) {
    echo "khong co du lieu datatable ";
}
$row4= $result4->fetch_assoc();

//
$sql5= "SELECT mota from mota where id=$masach";
$result5 = $conn->query($sql5);
if ($result5->num_rows ==0) {
    echo "khong co du lieu datatable ";
}
$row5= $result5->fetch_assoc();




?>
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  <div class="carousel-item active" data-bs-interval="10000">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="image/<?php echo $row1['image']; ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['tensach'] ?></h5>
        <p class="production_b"> <span class="producion_b_sp">
        Thể loại     : <?php echo $row2['tentheloai'] ?>
    </span></p>
    <p class="production_b"><span class="production_b_sp">Tác giả      : <?php echo $row3['tentacgia'] ?></span></p>
    <p class="production_b"><span class="production_b_sp">Nhà xuất bản : <?php echo $row4['tennhaxuatban'] ?></span></p>
    <p class="production_b"><span class="production_b_sp">Năm xuất bản : <?php echo $row['namxuatban'] ?></span></p>
    <h6>Mô tả: </h4>
    <p style="text-indent: 30px;" align="left"> <?php echo $row5['mota'] ?></p> 
      </div>
    </div>
    <div class="col-md-11 mx-auto">
        <br>
    
    </div>
  </div>
    </div>
    <div class="carousel-item">
    <img src="image/IMG-65a949305eb205.97260083.jpg" class="d-block w-20" width="360" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>