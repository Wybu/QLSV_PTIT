<?php
    $conn = mysqli_connect("localhost", "root", "", "qlsv") or die("Connection failed !");
    mysqli_set_charset($conn, 'utf8');
    if(isset($_POST['masv'])){
        $ma = $_POST['masv'];
        $sql ="select * from lop join sinhvien on lop.MaLop=sinhvien.MaLop where MaSV='$ma'";
        $qr = mysqli_query($conn,$sql);
        $item = mysqli_fetch_array($qr);
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
                        <?php if($item['DoiTuongMG']==1||$item['DoiTuongMG']==2){?>
                        <thead>
                            <tr>
                                <th>Mã sinh viên</th>
                                <th>Họ tên</th>
                                <th>Quê Quán</th>
                                <th>Dân tộc</th>
                                <th>Tôn giáo</th>
                                <th>Đối tượng ưu tiên</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td><?php echo $item['MaSV']; ?></td>
                                <td><?php echo $item['TenSV']; ?></td>
                                <td><?php echo $item['QueQuan']; ?></td>
                                <td><?php echo $item['DanToc']; ?></td>
                                <td><?php echo $item['TonGiao']; ?></td>
                                <td>
                                    <?php
                                    if($item['DoiTuongMG'] == 1){
                                        echo "Hoàn cảnh khó khăn";
                                    }
                                    if($item['DoiTuongMG'] == 2){
                                        echo "Dân tộc thiểu số";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <form method="post"
                                          action="">
                                        <input onclick="window.location = '../doituong/thongtindoituong.php?id=<?php echo $item['MaSV'] ?>'"
                                               type="button"
                                               value="Xem thông tin"
                                               class="btn-submit-css">
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        <?php } else{?>
                        <p style="font-size: 18px;">Sinh viên không thuộc diện ưu tiên</p><br><br> <?php } ?>
                    </table><br><br>

                    <button class="btn-submit-css"
                            onclick="window.location = '../doituong/doituonguutien.php'">Trở về</button><br><br>
                </div>

    </section>
    <?php include("../footer.php"); ?>
</body>

</html>