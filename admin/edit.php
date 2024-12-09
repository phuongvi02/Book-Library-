<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin sách </title>
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

    $masach= $_POST['masach'];
    $tensach = $_POST['tensach'];
    $idtacgia= $_POST['matacgia'];
    $theloai= $_POST['matheloai'];
    $soluong= $_POST['soluong'];
    $tinhtrang = $_POST['matinhtrang'];
    $NXB= $_POST['idnxb'];
    $namxuatban= $_POST['namxb'];
     $stmt = $conn->prepare("UPDATE sach SET tensach=?, idtacgia=?, theloai=?, soluong=?, tinhtrang=?, NXB=?, namxuatban=? WHERE masach =?");
     $stmt->bind_param("ssssssss", $tensach, $idtacgia, $theloai, $soluong, $tinhtrang, $NXB, $namxuatban, $masach);
     if($stmt->execute()){
        echo "sửa thông tin thành công";
    }else {
        echo "sửa thông tin thất bại";
    }
    



    header("Location: muonsach.php");
     ?><br>
    
</body>
</html>