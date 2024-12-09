<?php 
session_start();
$masach= $_GET['masach'];
$user = $_SESSION['username'];
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

<div class="container">
<div class="card mb-3" style="max-width: 95%;
    background-color: 	rgba(245, 238, 158,0.01);">
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
        <!-- Scrollable modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary btn_lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Đăng ký mượn sách
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Nhập thông tin</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="muon.php" method="post">
<div class="row">
<input class="col-md-12" type="text" name="masv" value="<?php echo $user ?>" id="">
<input class="col-md-12" type="text" name="ngaytra" placeholder="Nhập hạn ngày trả(năm-tháng-ngày)" id="">
<input class="col-md-12" type="text" name="masach" value="<?php echo $masach ?>" id="">
<hr>
<button class="btn btn-secondary" onclick="return confirm('B  ạn đã đăng ký mượn thành công cuốn sách này !!');" action="submit">Mượn sách</button>
</div>
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
        
      </div>
    </div>
  </div>
</div>
        
        
    </div>
  </div>
</div>

<article class="col-md-8">

</article>
</div>

<!-- Thể loại     : <?php echo $row2['tentheloai'] ?> -->