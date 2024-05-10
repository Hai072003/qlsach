<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Đăng nhập</div>
                    <div class="card-body">
                        <form action="login.php" method="post">
                            <div class="form-group">
                                <label for="TenUser">Tên đăng nhập</label>
                                <input type="text" name="TenUser" id="TenUser" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="MatKhau">Mật khẩu</label>
                                <input type="password" name="MatKhau" id="MatKhau" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Đăng nhập</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
