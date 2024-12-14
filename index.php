<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'qlsv');
mysqli_set_charset($conn, "utf8");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Kiểm tra nếu người dùng đã đăng nhập
if (isset($_SESSION["loged"]) && $_SESSION["loged"] === true) {
    // Nếu đã đăng nhập, chuyển hướng tới trang admin
    header("location:http://localhost/qlsv_php/admin.php");
    exit;
}

if (isset($_POST["login"])) {
    // Lấy thông tin người dùng nhập vào form
    $tk = mysqli_real_escape_string($conn, $_POST["username"]);
    $mk = mysqli_real_escape_string($conn, $_POST["passlg"]);

    // Chuẩn bị truy vấn SQL sử dụng prepared statements để tránh SQL injection
    $query = "SELECT * FROM users WHERE username = ? AND pass = ?";
    if ($stmt = mysqli_prepare($conn, $query)) {
        mysqli_stmt_bind_param($stmt, "ss", $tk, $mk);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            // Đăng nhập thành công, tạo session và cookie
            $_SESSION["loged"] = true;
            $_SESSION['user'] = $tk;
            setcookie("success", "Đăng nhập thành công!", time() + 1, "/", "", 0);
            header("location:http://localhost/qlsv_php/admin.php");
        } else {
            // Đăng nhập thất bại, thông báo lỗi
            setcookie("error", "Sai tài khoản hoặc mật khẩu!", time() + 1, "/", "", 0);
            header("location:index.php?page=login");
        }

        mysqli_stmt_close($stmt);
    } else {
        // Trường hợp lỗi khi chuẩn bị câu lệnh SQL
        echo "Lỗi kết nối cơ sở dữ liệu.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Quản lý sinh viên PTIT</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css?v=1.0" />
</head>

<body>
  <!-- Thực hiện kiểm tra đăng nhập -->
  <?php
  if (isset($_COOKIE["error"])) {
    echo "<script type='text/javascript'>
    alert('Sai tài khoản hoặc mật khẩu! Vui lòng đăng nhập lại.');
    </script>";
  }

  if (isset($_COOKIE["success"])) {
    echo "<script type='text/javascript'>
    alert('Đăng nhập thành công!');
    document.getElementById('panel').style.display = 'none';
    </script>";
  }
  ?>

  <?php
  // Kiểm tra tham số 'page' trong URL
  if (isset($_GET["page"])) {
      // Kiểm tra các giá trị hợp lệ của tham số 'page'
      if ($_GET["page"] == "admin") {
          include "admin.php";
      }
      elseif ($_GET["page"] == "login") {
          include "login.php";
      }
      else {
          echo "Page not found!";
      }
  } else {
      // Nếu không có tham số 'page', bạn có thể đặt trang mặc định là login
      include "login.php";  // Hoặc trang mặc định bạn muốn
  }
  ?>
</body>

</html>
