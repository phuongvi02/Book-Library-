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
?>