<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    
    $id = $_GET["id"];
    $sql = "DELETE FROM sachmuon_tra where id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    if ($stmt->execute()) {
        echo"delete success </br>";
    }else{
        echo"delete failed </br>";
    }
?>

<a href="muonsach.php">back</a>
</body>
</html>