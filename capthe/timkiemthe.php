<?php
    $conn = mysqli_connect("localhost", "root", "", "qlsv") or die("Connection failed !");
    mysqli_set_charset($conn, 'utf8');
    if(isset($_POST['masv'])){
        $ma = $_POST['masv'];
        $sql ="select * from thesv join sinhvien on sinhvien.MaSV=thesv.MaSV where thesv.MaSV='$ma'";
        $qr = mysqli_query($conn,$sql);
        $item = mysqli_fetch_array($qr);
    }
    else{
        echo "Error";
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
                    <table class="fl-table tt timkiem ">
                        <thead>
                            <tr>
                                <th>Mã sinh viên</th>
                                <th>Họ tên</th>
                                <th>Giới tính</th>
                                <th>Địa chỉ</th>
                                <th>Ngày cấp</th>
                                <th>Trạng thái</th>
                                <th>Ghi chú</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $item['MaSV']; ?></td>
                                <td><?php echo $item['TenSV']; ?></td>
                                <td><?php echo $item['GioiTinh']; ?></td>
                                <td><?php echo $item['QueQuan']; ?></td>
                                <td><?php echo $item['NgayCap']; ?></td>
                                <td><?php echo $item['TrangThai']; ?></td>
                                <td width="300"><?php echo $item['GhiChu']; ?></td>
                            </tr>
                        </tbody>
                    </table><br><br>

                    <button class="btn-submit-css"
                            onclick="window.location = '../capthe/quanlythe.php'">Trở về</button><br><br>
                </div>
    </section>
    <?php include("../footer.php"); ?>
</body>

</html>