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
$t = time();
$ngaymuon = date("Y-m-d", $t);

$sql = "SELECT count(id) as soluong FROM sachmuon_tra";
$result = $conn->query($sql);
if ($result->num_rows ==0) {
   echo "khong co du lieu datatable ";
}
$masv = $_POST['masv'];
$tinhtrang = 1;
$masach = $_POST['masach'];
$ngay_tra = $_POST['ngaytra'];
$sqlcout = " SELECT count(id) as id from sachmuon_tra";
$resultcount = $conn->query($sqlcout);

$rowcount = $resultcount->fetch_assoc();    
$id_muon = $rowcount['id'];
$id_muon++;
echo $id_muon;
echo $masach;
$row = $result->fetch_assoc();
$stmt = $conn->prepare("INSERT INTO sachmuon_tra(id, masach, ngaymuon, tinhtrang, ngaytra, masv) values(?, ?, ?, ?, ?, ?)");
//đang làm đến đây LV

    $stmt->bind_param("ssssss", $id_muon, $masach, $ngaymuon, $tinhtrang, $ngay_tra, $masv );
     if($stmt->execute()){
        echo "Thêm thông tin thành công";
    }else {
        echo "Thêm thông tin thất bại";
    }
    header("Location: history.php");

?>