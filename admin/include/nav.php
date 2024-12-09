<?php 
$servername ="localhost";
$username = "urginzgu_root";
$password = "123321@Aa";
$dbname = "urginzgu_root";

//khoi tao ket noi
$conn = new mysqli($servername, $username, $password, $dbname);
// Đặt encoding UTF-8 để tránh lỗi hiển thị tiếng Việt
mysqli_query($conn, "SET NAMES 'UTF8'");


?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Ubook</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="themsach.php">Thêm sách</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="muonsach.php"  aria-expanded="false">
          Danh sách mượn
          </a>
         
        </li>
        
      </ul>
      <form class="d-flex" action="search.php" method="post" role="search">
        <input class="form-control me-2" type="search" name="datasearch" placeholder="Mời nhập" aria-label="search">
        <button class="btn btn-outline-success" name="search" type="submit">search</button>
      </form>
    </div>
  </div>
</nav>