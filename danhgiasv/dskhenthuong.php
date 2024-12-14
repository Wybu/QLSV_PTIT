<?php
    $conn = mysqli_connect('localhost','root','','qlsv') or die ("Connect fail!");

    $hk = isset($_GET['id']) ? $_GET['id'] : '';
    if(!$hk){
        $hk = 4;
    }

    $sql = "select * from diem 
            where HocKy = '$hk' and TongTCHK >=  12 and DiemRL >= 80 and TBCHocKy >= 2.5 
            order by TBCHocKy DESC, DiemRL DESC";
    $query = mysqli_query($conn, $sql);
    $data = array();
    while ($row = mysqli_fetch_array($query)){
        $data[] = $row;
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

                <br>
                <input onclick="window.location='dskhenthuong.php?id=<?php echo '1' ?>'"
                       type="button"
                       class="btn-submit-css"
                       value="Học kỳ 1 - 2021">
                <input onclick="window.location='dskhenthuong.php?id=<?php echo '2' ?>'"
                       type="button"
                       class="btn-submit-css"
                       value="Học kỳ 2 - 2021">
                <input onclick="window.location='dskhenthuong.php?id=<?php echo '3' ?>'"
                       type="button"
                       class="btn-submit-css"
                       value="Học kỳ 1 - 2022">
                <input onclick="window.location='dskhenthuong.php?id=<?php echo '4' ?>'"
                       type="button"
                       class="btn-submit-css"
                       value="Học kỳ 2 - 2022">
                <div class="head_title">
                    <h1>Danh sách khen thưởng học kì <?php 
                    if ($hk % 2 != 0 ){
                    echo "1 năm học ".(2021 + (int)($hk / 2));
                    }
                    else echo "2 năm học ".(2021 + ($hk / 2) - 1);
                    ?></h1> <br>
                </div>
                <div class="table-wrapper">
                    <table class="fl-table tt">
                        <tr>
                            <th>STT</th>
                            <th>Mã SV</th>
                            <th>Họ tên</th>
                            <th>Lớp</th>
                            <th>TBC Học kỳ</th>
                            <th>Điểm rèn luyện</th>
                            <th>Xếp loại</th>
                        </tr>
                        <?php
            $i = 1;
            foreach ($data as $item) {
        ?>
                        <tr>
                            <td><?php echo $i; $i++; ?></td>
                            <td><?php echo $item['MaSV'] ?></td>
                            <td><?php
                    $masv = $item['MaSV'];
                    $result = mysqli_query($conn, "select * from sinhvien where MaSV = '$masv'");
                    while ($row_sv = mysqli_fetch_array($result)){
                        $infor = $row_sv;
                    }
                    echo $infor['TenSV'];
                ?></td>
                            <td><?php 
                    $malop = $infor['MaLop'];
                    $result_lop = mysqli_query($conn, "select * from lop where MaLop = '$malop'");
                    while ($row_lop = mysqli_fetch_array($result_lop)){
                        $info = $row_lop;
                    }
                    echo $info['TenLop']; 
                ?></td>
                            <td><?php echo $item['TBCHocKy'] ?></td>
                            <td><?php echo $item['DiemRL'] ?></td>
                            <td><?php
                    if ($item['TBCHocKy'] >= 3.6){
                        if($item['DiemRL'] >= 90){
                            echo "Xuất sắc";
                        }
                        else if ($item['DiemRL'] >= 80 && $item['DiemRL'] <= 89){
                            echo "Giỏi";
                        }
                    }
                    else if ($item['TBCHocKy'] >= 3.2 && $item['TBCHocKy'] <= 3.59 && $item['DiemRL'] >= 80){
                        echo "Giỏi";
                    }
                    else echo "Khá";
                ?></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php include("../footer.php"); ?>
</body>

</html>