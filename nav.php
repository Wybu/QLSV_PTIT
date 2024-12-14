<?php
	$connect = mysqli_connect('localhost','root','','qlsv');
	mysqli_set_charset($connect,"utf8");
    session_start();
    $user = $_SESSION['user'];
    $sql = "SELECT * FROM users WHERE username = '$user'";
    $query = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
          href="styleAdmin.css?v=1.0">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Quản lý sinh viên PTIT</title>
</head>

<body>
    <nav>
        <div class="group-user">
            <p><?php while($row = mysqli_fetch_array($query)){
                echo $row['full_name'];
            }?></p>
            <ul class="group-user-child">
                <li><a class="logout"
                       href="../login.php">Đăng xuất</a></li>
            </ul>
        </div>
    </nav>
</body>