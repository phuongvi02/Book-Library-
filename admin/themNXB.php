<?php 

$servername ="localhost";
    $username = "urginzgu_root";
    $password = "123321@Aa";
    $dbname = "urginzgu_root";
    
    //khoi tao ket noi
    // Đặt encoding UTF-8 để tránh lỗi hiển thị tiếng Việt
mysqli_query($conn, "SET NAMES 'UTF8'");
    $conn = new mysqli($servername, $username, $password, $dbname);
 
    $id_nxb = $_POST['idNXB'];
    $name_nxb = $_POST['nameNXB'];

    // $sql1= "INSERT INTO sach(masach, tensach, idtacgia, theloai, soluong, tinhtrang, NXB, namxuatban) values($masach, '$tensach', $idtacgia, $idtheloai, $soluong, $idtinhtrang, $idnxb, $nam_xb) ";
    // $result1 = $conn->query($sql1);
    $stmt = $conn->prepare("INSERT INTO nhaxuatban(idxuatban, tennhaxuatban) values(?, ?)");
    $stmt->bind_param("ss", $id_nxb, $name_nxb);
     if($stmt->execute()){
        echo "Thêm thông tin thành công";
    }else {
        echo "Thêm thông tin thất bại";
    }
    header("Location: index.php");
?>