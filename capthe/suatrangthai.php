<?php
    $conn = mysqli_connect("localhost", "root", "", "qlsv") or die("Connection failed !");
    mysqli_set_charset($conn, 'utf8');

    $id = $_GET["id"];
    if ($id){
        $result = mysqli_query($conn, "select * from thesv join sinhvien where sinhvien.MaSV=thesv.MaSV and MaSo= $id");
        $item = mysqli_fetch_array($result); 
    }

    if (isset($_POST['edit_the']))
    {
        $tt = $_POST['TrangThai'];
        $gc = $_POST['GhiChu'];
        $nc = $_POST['NgayCap'];
        $add = "UPDATE thesv SET
        TrangThai = '$tt',
        GhiChu = '$gc',
        NgayCap = '$nc'
        WHERE MaSo = '$id'";
        $qr = mysqli_query($conn,$add);
        header("location: quanlythe.php");
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
                <form action=""
                      method="POST">
                    <div class="table-wrapper">
                        <table class="fl-table tt">
                            <thead>
                                <tr>
                                    <th>Mã sinh viên</th>
                                    <th>Họ tên</th>
                                    <th>Lớp</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $item['MaSV']; ?></td>
                                    <td><?php echo $item['TenSV']; ?></td>
                                    <td><?php echo $item['MaLop']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="head_title">
                            <h1>Trạng thái thẻ</h1>
                            <div class="ttsv"
                                 style="display:flex;">
                                <div>
                                    <table class="fl-table tt">
                                        <tr>
                                            <th>Trạng thái</th>
                                            <td>
                                                <select name="TrangThai"
                                                        class="edit_diem">
                                                    <option value="<?php echo $item['TrangThai']; ?>">
                                                        <?php echo $item['TrangThai']; ?>
                                                    </option>
                                                    <option value="Đã Cấp">Đã Cấp</option>
                                                    <option value="Chưa Cấp">Chưa Cấp</option>
                                                    <option value="Đã thu hồi">Đã thu hồi</option>
                                                    <option value="Chờ cấp lại">Chờ cấp lại</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Ngày cấp</th>
                                            <td> <input type="date"
                                                       name="NgayCap"
                                                       class="edit_diem"
                                                       value="<?php echo $item['NgayCap']; ?>"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div>
                                    <table class="fl-table tt">
                                        <tr>
                                            <th>Ghi Chú</th>
                                            <td>
                                                <input type="text"
                                                       name="GhiChu"
                                                       class="edit_diem"
                                                       value="<?php echo $item['GhiChu']; ?>">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <input name="edit_the"
                                   type="submit"
                                   value="Sửa"
                                   class="btnSave"></input><br><br>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php include("../footer.php"); ?>
</body>

</html>