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

    $sqlmuonsach = "SELECT id, masach, ngaymuon, tinhtrang, ngaytra, masv from sachmuon_tra ";
$resultmuonsach = $conn->query($sqlmuonsach);
 

?>
<?php include('include/nav.php'); ?>
    
<div class="container">
    <?php 
    

    
    $sqll = "SELECT  masach, tensach, idtacgia, theloai, soluong, tinhtrang, NXB, namxuatban from sach";
    $resultt = $conn->query($sqll);
    if ($resultt->num_rows ==0) {
       echo "khong co du lieu datatable ";
    }

    if ($resultt->num_rows > 0) {

?>
        <div class="container">
        <br>
        <div class="row">
                <aside class="col-md-1"><span> </span></aside>
                <article class="col-md-10">
                <div>
                <table class="table">
          <thead>
            <tr>
                <th scope="col">Id</th>
              <th scope="col">Tên sách</th>
              <th scope="col">Ngày mượn</th>
              <th scope="col">Tình trạng</th>
              <th scope="col">Ngày trả</th>
              <th scope="col">Mã sinh viên</th>
              <th scope="col">Chức năng</th>
            </tr>
          </thead>
          <tbody>
          <?php
                while($rowmuonsach = $resultmuonsach->fetch_assoc()){
                $idmuon= $rowmuonsach['id'];
                  $masach = $rowmuonsach["masach"];
            $sqll1 = "SELECT tensach from sach where masach= $masach";
            $resultt1 = $conn->query($sqll1);
            $roww1 = $resultt1->fetch_assoc();

            $tinhtrang = $rowmuonsach["tinhtrang"];
            $sqltinhtrang = "SELECT chitiet from tinhtrang_muontrasach where id= $tinhtrang";
            $resulttrang = $conn->query($sqltinhtrang);
            $rowttrang = $resulttrang->fetch_assoc();
        
                  ?>
                <tr>
                    <td><?php echo $rowmuonsach['id'] ?></td>
                <td><?php  echo $roww1["tensach"]  ?></td>
                <td><?php echo $rowmuonsach["ngaymuon"]; ?></td>
                <td><?php echo $rowttrang['chitiet'] ?></td>
                <td><?php echo $rowmuonsach['ngaytra'] ?></td>
                <td><?php echo $rowmuonsach['masv'] ?></td>
                <td>
                <a class="btn btn-outline-danger" onclick="return confirm('Bạn có muốn xóa lịch sử này không');" href="xoamuon.php?id=<?php echo $idmuon; ?>">Xóa</a>
                </td>
                </tr>
            <?php
                }
        
                ?>
            
          </tbody>
        </table>
                </div>
                   <div class= "d-grid gap-2 col-2 mx-auto">
                    <form action="xuatsachmuon.php" method="post">
                        <button name="btn-inout" class="btn  btn-outline-secondary" type="submit">Xuất ra danh sách</button>
                    </form>
                </div>
                </article>
                <aside class="col-md-1"><span>  </span></aside>
            </div>
        </div> 
        <?php
    }else {
        echo "</br> khong co du lieu";
    }
    
    ?>


    </div>
    
</body>
</html>