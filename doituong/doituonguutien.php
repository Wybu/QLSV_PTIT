<?php
    $conn = mysqli_connect("localhost", "root", "", "qlsv") or die("Connection failed !");
    mysqli_set_charset($conn, 'utf8');
    $result = mysqli_query($conn, 'select * from sinhvien where DoiTuongMG > 0');
    $row = mysqli_fetch_array($result);
 
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
    <title>Xem đối tượng ưu tiên</title>
</head>

<body>
    <?php include("../header.php"); ?>
    <?php include("../nav.php"); ?>
    <section>
        <div class="section-contain">
            <?php include("../menu.php"); ?>
            <div id="showFunction">
                <div class="head_title">
                    <h1>DANH SÁCH SINH VIÊN ƯU TIÊN</h1>
                </div>
                <br>
                <form action="timkiem.php"
                      method="POST">
                    <input type="text"
                           name="masv"
                           placeholder="Nhập mã sinh viên"
                           class="input-css"
                           required>
                    <button type="submit"
                            name="submit"
                            class="btn-submit-css">Tìm kiếm
                    </button>
                </form>
                <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã sinh viên</th>
                                <th>Họ tên</th>
                                <th>Quê Quán</th>
                                <th>Dân tộc</th>
                                <th>Tôn giáo</th>
                                <th>Đối tượng ưu tiên</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <?php 
            $i = 0;
            foreach ($result as $item){ 
                if($item['DoiTuongMG']==1||$item['DoiTuongMG']==2){
                        ?>
                        <tbody>
                            <tr>
                                <td><?php $i++; echo $i; ?></td>
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
                        <?php }} ?>
                    </table>
                </div>
                <br>
            </div>
        </div>
    </section>
    <?php include("../footer.php"); ?>
</body>

</html>