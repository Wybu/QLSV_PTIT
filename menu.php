<?php
	$connect = mysqli_connect('localhost','root','','qlsv');
	mysqli_set_charset($connect,"utf8");
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
    <section>
        <div class="section-contain">
            <div id="menu">
                <ul>
                    <li>
                        <a href="../index.php?page=admin"><i class="fa-solid fa-house"></i>Trang chủ</a>
                    </li>
                    <li>
                        <a href="../quanlysinhvien/showsinhvien.php"><i class="fa-solid fa-graduation-cap"></i>Sinh
                            viên</a>
                    </li>
                    <li class="more-func">
                        <a href="../quanlylop/dslop.php">
                            <i class="fa-solid fa-building-columns"></i> Lớp
                        </a>
                        <ul class="more-func-child nn">
                            <a href=""></a>
                            <li><a href="../quanlylop/dslop.php">Danh sách lớp</a></li>
                            <li><a href="../quanlylop/xetlop.php">Nhập học</a></li>
                        </ul>
                    </li>

                    <li class="more-func">
                        <a href="../danhgiasv/dskhenthuong.php">
                            <i class="fa-solid fa-user-graduate"></i>
                            Đánh giá sinh viên
                            <div class="func-icon-right">
                                <i class="fa-solid fa-angle-right"></i>
                            </div>
                            <div class="func-icon-down">
                                <i class="fa-solid fa-angle-down"></i>
                            </div>
                            <ul class="more-func-child">
                                <a href=""></a>
                                <li><a href="../danhgiasv/dskhenthuong.php">Danh sách khen thưởng</a></li>
                                <li><a href="../danhgiasv/dscanhcao.php">Danh sách cảnh cáo</a></li>
                                <li><a href="../danhgiasv/dsbuocthoihoc.php">Danh sách buộc thôi học</a></li>
                            </ul>
                        </a>
                    </li>
                    <li class="more-func">
                        <a href="">

                            <i class="fa-solid fa-file-circle-plus"></i>
                            Chức năng khác
                            <div class="func-icon-right">
                                <i class="fa-solid fa-angle-right"></i>
                            </div>
                            <div class="func-icon-down">
                                <i class="fa-solid fa-angle-down"></i>
                            </div>
                            <ul class="more-func-child">
                                <a href=""></a>
                                <li><a href="../doituong/doituonguutien.php">Đối tượng ưu tiên</a></li>
                                <li><a href="../capthe/quanlythe.php">Quản lý thẻ sinh viên</a></li>
                            </ul>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</body>