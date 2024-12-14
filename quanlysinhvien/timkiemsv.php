<?php
    $conn = mysqli_connect("localhost", "root", "", "qlsv") or die("Connection failed !");
    mysqli_set_charset($conn, 'utf8');
    if(isset($_POST['submit'])){
        $ma = $_POST['masv'];
        $sql ="select *from sinhvien join lop where sinhvien.MaLop=lop.MaLop AND (MaSV='$ma' or TenSV='$ma')";
        $qr = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($qr);
    }
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
          href="../styleAdmin.css?v=1.0">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <?php include("../header.php"); ?>
    <?php include("../nav.php"); ?>
    <section>
        <div class="section-contain">
            <?php include("../menu.php"); ?>
            <div id="showFunction">
                <div class="table-wrapper">
                    <div class="head_title">
                        <h1>Kết quả tìm kiếm</h1>
                    </div>
                    <br>
                    <?php if($num<1){ ?> <p style="font-size: 18px;">Không tìm thấy</p><br><br> <?php } ?>
                    <?php 
            foreach ($qr as $item){ ?>
                    <table class="fl-table tt timkiem ">
                        <thead>
                            <tr>
                                <th>Mã sinh viên</th>
                                <th>Họ tên</th>
                                <th>Giới tính</th>
                                <th>Ngày sinh</th>
                                <th>Địa chỉ</th>
                                <th>SĐT</th>
                                <th>Email</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><?php echo $item['MaSV']; ?></td>
                                <td><?php echo $item['TenSV']; ?></td>
                                <td><?php echo $item['GioiTinh']; ?></td>
                                <td><?php echo $item['NgaySinh']; ?></td>
                                <td><?php echo $item['QueQuan']; ?></td>
                                <td><?php echo $item['SDT']; ?></td>
                                <td><?php echo $item['Email']; ?></td>
                                <td>
                                    <form method="post"
                                          action="">
                                        <input onclick="window.location = '../quanlysinhvien/thongtinsv.php?id=<?php echo $item['MaSV'] ?>'"
                                               type="button"
                                               value="Xem thông tin"
                                               class="btn-submit-css">
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table><br><br>
                    <?php } ?>
                    <button class="btn-submit-css"
                            onclick="window.location = '../quanlysinhvien/showsinhvien.php'">Trở về</button><br><br>
                </div>
    </section>
    <?php include("../footer.php"); ?>
</body>

</html>