<?php
$db_host = "mysql-33be21d0-hainguuen03-bd23.l.aivencloud.com";
$db_port = "15504";
$db_name = "QUANLYSACH";
$db_username = "avnadmin";
$db_password = "AVNS_PX5a0PwZD0vjlbQA88-";

$conn = new mysqli($db_host, $db_username, $db_password, $db_name, $db_port);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form đăng nhập
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $TenUser = $_POST['TenUser'];
    $MatKhau = $_POST['MatKhau'];

    // Truy vấn để kiểm tra thông tin đăng nhập
    $sql = "SELECT * FROM User WHERE TenUser = '$TenUser' AND MatKhau = '$MatKhau'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Đăng nhập thành công
        session_start();
        $_SESSION['TenUser'] = $TenUser;
        header("Location: Sach.php");
        exit();
    } else {
        echo ("Tên đăng nhập hoặc mật khẩu không chính xác!");
    }
}

$conn->close();
?>
