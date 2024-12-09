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
    
    $masach = $_GET["masach"];
    $sql = "DELETE FROM sach where masach=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $masach);
    if ($stmt->execute()) {
        echo"delete success </br>";
    }else{
        echo"delete failed </br>";
    }
    header("loaction:index.php")
?>

<a href="index.php">back</a>

</body>
</html>