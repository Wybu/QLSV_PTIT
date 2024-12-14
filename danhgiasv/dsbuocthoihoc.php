<?php
    $conn = mysqli_connect('localhost','root','','qlsv') or die ("Connect fail!");
    $query = mysqli_query($conn, "select * from canhcao");
    $dssv = array();
    while ($row = mysqli_fetch_array($query)){
        $dssv[] = $row;
    }
    $data = array();
    for ($i = 0; $i < count($dssv);$i++){
        $ans = 0;
        for ($j = $i+1; $j < count($dssv);$j++){
            if($dssv[$j]['MaSV'] == $dssv[$i]['MaSV'])  $ans++;
        }
        if ($ans != 0){
            $data[] = $dssv[$i];
        }
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

                <div class="head_title">
                    <h1>Danh sách sinh viên bị thôi học</h1>
                </div>
                <br>
                <div class="table-wrapper">
                    <table class="fl-table tt">
                        <tr>
                            <th>STT</th>
                            <th>Mã SV</th>
                            <th>Họ tên</th>
                            <th>Lớp</th>
                            <th>Lý do</th>
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
                            <td><?php
                    $svcc = mysqli_query($conn, "select * from canhcao where MaSV = '$masv'");
                    while ($j = mysqli_fetch_array($svcc)){
                        if ($j['HocKy'] % 2 != 0 ){
                            $string = "1 năm học ".(2021 + (int)($j['HocKy'] / 2));
                        }
                        else $string = "2 năm học ".(2021 + ($j['HocKy'] / 2) - 1);
                        echo "+ Học kỳ ".$string.": ".$j['LyDo'];
                    ?> <br> <?php
                    }
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