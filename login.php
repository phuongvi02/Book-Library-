<?php 
$servername ="localhost";
$username = "urginzgu_root";
$password = "123321@Aa";
$dbname = "urginzgu_root";
ini_set("display_errors",0);
//khoi tao ket noi
$conn = new mysqli($servername, $username, $password, $dbname);

//kiem tra ket noi
if($conn->connect_error){
    die("ket noi that bai" . $conn->connect_error);
}
  // Đặt encoding UTF-8 để tránh lỗi hiển thị tiếng Việt
mysqli_query($conn, "SET NAMES 'UTF8'");

session_start();




if ($_SERVER["REQUEST_METHOD"]="POST") {
$usernamecheck = $_POST["usernamecheck"];
$passwordcheck = $_POST["passwordcheck"];

$sqlcheck = "select permission from userlog where user = '".$usernamecheck."' and password = '".$passwordcheck."'";

$resultcheck = mysqli_query($conn, $sqlcheck);
$rowcheck = mysqli_fetch_array($resultcheck);
    if ($rowcheck["permission"] =="1") {
        header("location:admin/index.php");

    }
    elseif ($rowcheck["permission"] == "3") {
        header("location:history.php");  
        $_SESSION['username']= $usernamecheck;
$_SESSION['password']= $passwordcheck;
    }else {
        echo "";
    }

   
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<div class="nav-day"><?php include('include/nav.php'); ?></div>
<div class="container">
<br>
<div class="row">
        <aside class="col-md-2"><span> </span></aside>
        <article class="col-md-8">
            <br>
            <br>
            <h5>Đăng nhập bằng tài khoản sinh viên</h5>
            <br>
            <form action="#" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Mã sinh viên</label>
                <input required type="text" name="usernamecheck" class="form-control" id="exampleFormControlInput1" placeholder="Mã sinh viên của bạn">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Mật khẩu</label>
                <input required type="password" name="passwordcheck" class="form-control" placeholder="Nhập password">
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="submit">Đăng nhập</button>
            </div>
            </form>
        <hr>
        <br>
        <br>
        <br>
        

        </article>
        <aside class="col-md-2"><span> </span></aside>
    </div>
</div>
<div>
    <?php include('include/footer.php'); ?>
</div>

</body>
</html>