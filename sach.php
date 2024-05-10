<?php
session_start();
if (!isset($_SESSION['TenUser'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Sách</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Danh sách Sách</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã Sách</th>
                    <th scope="col">Tên Sách</th>
                    <th scope="col">Số Lượng</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Thông tin kết nối đến cơ sở dữ liệu
                $db_host = "mysql-33be21d0-hainguuen03-bd23.l.aivencloud.com";
                $db_port = "15504";
                $db_name = "QUANLYSACH";
                $db_username = "avnadmin";
                $db_password = "AVNS_PX5a0PwZD0vjlbQA88-";

                // Kết nối đến cơ sở dữ liệu
                $conn = new mysqli($db_host, $db_username, $db_password, $db_name, $db_port);

                // Kiểm tra kết nối
                if ($conn->connect_error) {
                    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
                }

                // Truy vấn dữ liệu sách
                $sql = "SELECT * FROM Sach";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['MaSach'] . "</td>";
                        echo "<td>" . $row['TenSach'] . "</td>";
                        echo "<td>" . $row['SoLuong'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Không có dữ liệu sách</td></tr>";
                }

                // Đóng kết nối
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
