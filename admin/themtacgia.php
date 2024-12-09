<?php 

$servername ="localhost";
    $username = "urginzgu_root";
    $password = "123321@Aa";
    $dbname = "urginzgu_root";
    
    //khoi tao ket noi
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Đặt encoding UTF-8 để tránh lỗi hiển thị tiếng Việt
mysqli_query($conn, "SET NAMES 'UTF8'");


 
    $idtac_gia = $_POST['idtg'];
    $name_tg = $_POST['nametg'];

    // $sql1= "INSERT INTO sach(masach, tensach, idtacgia, theloai, soluong, tinhtrang, NXB, namxuatban) values($masach, '$tensach', $idtacgia, $idtheloai, $soluong, $idtinhtrang, $idnxb, $nam_xb) ";
    // $result1 = $conn->query($sql1);
    $stmt = $conn->prepare("INSERT INTO tacgia(idtacga, tentacgia) values(?, ?)");
    $stmt->bind_param("ss", $idtac_gia, $name_tg);
     if($stmt->execute()){
        echo "thêm thông tin thành công";
    }else {
        echo "thêm thông tin thất bại";
    }

    header("Location: index.php");
?>