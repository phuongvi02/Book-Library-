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
 

if (isset($_POST['btn-inout'])) {
      $st = time();
      $ngaymuon= date("Y-m-d", $st);
    header("Content-Type: application/xls   ");
    header("Content-Disposition: attachment; Filename = $ngaymuon.xls");
 

}



?>

    
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
                <th scope="col">id</th>
              <th scope="col">tên sách</th>
              <th scope="col">ngày mượn</th>
              <th scope="col">tình trạng</th>
              <th scope="col">ngày trả</th>
              <th scope="col">mã sinh viên</th>
              
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

        <?php
         //  require 'muonsach.php';
    }else {
        echo "</br> khong co du lieu";
    }
    
    ?>


    </div>
    
</body>