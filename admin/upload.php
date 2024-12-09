<?php 

$servername ="localhost";
    $username = "urginzgu_root";
    $password = "123321@Aa";
    $dbname = "urginzgu_root";
    
    //khoi tao ket noi
    // Đặt encoding UTF-8 để tránh lỗi hiển thị tiếng Việt
mysqli_query($conn, "SET NAMES 'UTF8'");
    $conn = new mysqli($servername, $username, $password, $dbname);


    $ma_sach = $_POST['masach'];
    $ten_sach = $_POST['tensach'];
    $idtac_gia = $_POST['matacgia'];
    $idthe_loai = $_POST['matheloai'];
    $so_luong = $_POST['soluong'];
    $idtinh_trang = $_POST['matinhtrang'];
    $idnxb = $_POST['idnxb'];
    $nam_xb = $_POST['namxb'];
    $mota= $_POST['mota'];






    // $sql1= "INSERT INTO sach(masach, tensach, idtacgia, theloai, soluong, tinhtrang, NXB, namxuatban) values($masach, '$tensach', $idtacgia, $idtheloai, $soluong, $idtinhtrang, $idnxb, $nam_xb) ";
    // $result1 = $conn->query($sql1);
    $stmt = $conn->prepare("INSERT INTO sach(masach, tensach, idtacgia, theloai, soluong, tinhtrang, NXB, namxuatban) values(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $ma_sach, $ten_sach, $idtac_gia, $idthe_loai, $so_luong, $idtinh_trang, $idnxb, $nam_xb);
     if($stmt->execute()){
        echo "thêm thông tin thành công";
    }else {
        echo "thêm thông tin thất bại";
    }
    $stmt1 = $conn->prepare("INSERT INTO mota(id, mota) values (?, ?)");
    $stmt1->bind_param("ss", $ma_sach,$mota);
    if($stmt1->execute()){
        echo "thêm thông tin thành công";
    }else {
        echo "thêm thông tin thất bại";
    }

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
    echo "<pre>";
    print_r($_FILES['my_image']);
    echo"</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if ($error ===0) {
        $img_ex= pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $idimage= $ma_sach + 10 ;
        $allowed_ex = array("jpg", "jpeg", "png");

        if (in_array($img_ex_lc, $allowed_ex)) {
           $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
           $img_upload_path = 'C:\xampp\htdocs\test_btl\testbtl_quanlythuvien\trangchu\image/'.$new_img_name;
           $img_upload_path2 = 'C:\xampp\htdocs\test_btl\testbtl_quanlythuvien\trangchu\admin\image1/'.$new_img_name;
           move_uploaded_file($tmp_name, $img_upload_path);
           move_uploaded_file($tmp_name, $img_upload_path2);

           $sql = "INSERT INTO image_book(id, image) values ('$idimage','$new_img_name')";
           $result = $conn->query($sql);
        }else{
            $em = "You cant upload file of this type";
        header("Location: index.php");
        }
    }else {
        $em = "unknown error occurred!";
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}
header("Location: index.php");
 
?>