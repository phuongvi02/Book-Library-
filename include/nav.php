<?php 

ini_set("display_errors",0);
$servername ="localhost";
$username = "urginzgu_root";
$password = "123321@Aa";
$dbname = "urginzgu_root";
session_start();
//khoi tao ket noi
$conn = new mysqli($servername, $username, $password, $dbname);
// Đặt encoding UTF-8 để tránh lỗi hiển thị tiếng Việt
mysqli_query($conn, "SET NAMES 'UTF8'");



//kiem tra ket noi
if($conn->connect_error){
    die("ket noi that bai" . $conn->connect_error);
}

$sql = "SELECT  idtheloai, tentheloai FROM theloai";
$result = $conn->query($sql);
if ($result->num_rows ==0) {
   echo "khong co du lieu datatable ";
}

?>

<nav id="2231" class="navbar center fixed-top bg-dark border-bottom border-body navbar-expand-lg bg-opacity-50 bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Ubook</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul id="223112" class="navbar-nav  mx-auto mb-3 mb-lg-0 position-relative">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Thể loại
          </a>
          <ul class="dropdown-menu">

          <?php
        while($row = $result->fetch_assoc()){
          ?>
            <li><a class="dropdown-item" href="theloai.php?matheloai=<?php echo $row["idtheloai"] ?>"><?php echo $row["tentheloai"]  ?></a></li>
                <?php
                }
                ?>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="lienhe.php" >Liên hệ</a>
        </li>
        <?php 
        
        if (isset($_SESSION["username"]) && isset( $_SESSION["password"])) {
          $user = $_SESSION["username"];
          $pass = $_SESSION["password"];
          $_SESSION['username']= $user;
          $_SESSION['password']= $pass;

          $sqlsinhvien = "SELECT tensv from sinhvien where masv = $user";
          $resultsinhvien = $conn ->query($sqlsinhvien);
          $rowsinhvien = $resultsinhvien->fetch_assoc();

$logined = '<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAZxJREFUSEu11L1vjWEYx/HPSecmmgpCajHUaOofIF5K01EbU/8CidCkpoYNIQzduyojUukLo9UmBgtB21RIGQnPldxtTh7nPveTU+da7/v6fa/3lj5bq8/6mgImq0Bu4kQK6D3m8bwUYBPAHG5nhGZxvxukBDiPF9hAgFaS2DncwRGcwXoOUgKsJoFpPK6JTGEJy7jYK+AbDlRlGMTPmsgwtvEZx3oFbOIQDuJrBhB/olQdrVSiqPlZRDmeZEoUPbrQK6C9yTEx0ZOBBL2Lw/ttcgR2DSEWwu32u+pLQB/uZ0x3fUdxHTGev/Ayzf+7/7FoJY2u792aHOMZUY/hVJqmdrEtvMHrlM2PTqQcIKZiMTWxSQaxCzNYq3/uBJjAs/TxKW4hjtv3mnNkGMcv3sMnLAKLsd2zOmAIb1PkcWtuNAkf91I5v+BkNXk7u351wFU8wCucbige30InljIO35Vq8xdygDhol0rLkwGPp8P3CJdzgA8YQZSqXvNSQkfxCR9xPAf4kx5KNyoH+8e/V6FSNtkpauzY9GPfM/gL5dBHGcZ57nQAAAAASUVORK5CYII="/>
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="#">xin chào '.$rowsinhvien["tensv"].' </li>
  <li><a class="dropdown-item" href="history.php">Lịch sử mượn sách</a></li>
      <li><a href="logout.php" class="dropdown-item">thoát</a></li>
</ul>
</li>';

echo $logined;
       }else {
          //kie tra cookie
          if (isset($_COOKIE[""])) {
            $logina= '<li class="nav-item">
            <a class="nav-link " href="login.php" >Login</a>
          </li>';
              echo $logina;
          }else{
            $logina= '<li class="nav-item">
            <a class="nav-link " href="login.php" >Login</a>
          </li>';
          echo $logina;
       }}
      
        
        ?>
      </ul>
      <form class="d-flex" action="search.php" method="post" role="search">
        <input class="form-control me-2" name="datasearch" type="search" placeholder="Mời nhập" aria-label="search">
        <button class="btn btn-outline-light" name="search" type="submit">search</button>
      </form>
    </div>
  </div>
  
</nav>
