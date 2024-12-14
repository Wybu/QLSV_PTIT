<?php
     $conn = mysqli_connect("localhost", "root", "", "qlsv") or die("Connection failed !");
     mysqli_set_charset($conn, 'utf8');
 
     $id = $_GET["id"];
 
     $result = mysqli_query($conn, "select *from lop join sinhvien on sinhvien.MaLop=lop.MaLop 
                                    join nganh on lop.MaNganh = nganh.MaNganh where MaSV='$id'");
     $item = mysqli_fetch_array($result);
     $resultnull = mysqli_query($conn, "select *from sinhvien
                                        join nganh on nganh.MaNganh = sinhvien.MaNganh where MaSV='$id'");
     $itemnull = mysqli_fetch_array($resultnull);
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
                    <?php if( $item['MaLop'] == NULL){?>
                    <table class="fl-table tt">
                        <thead>
                            <tr>
                                <th>Mã sinh viên</th>
                                <th>Họ tên</th>
                                <th>Ngành</th>
                                <th>Lớp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $itemnull['MaSV']; ?></td>
                                <td><?php echo $itemnull['TenSV']; ?></td>
                                <td><?php echo $itemnull['TenNganh']; ?></td>
                                <td><?php echo "Chưa xét lớp" ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="head_title">
                        <h1>Thông tin sinh viên</h1>
                        <div class="ttsv"
                             style="display:flex; justify-content: space-between;">
                            <div>
                                <table class="fl-table tt">
                                    <tr>
                                        <th>Ngày sinh</th>
                                        <td><?php echo $itemnull['NgaySinh']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Quê quán</th>
                                        <td><?php echo $itemnull['QueQuan']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Giới tính</th>
                                        <td><?php echo $itemnull['GioiTinh']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Dân tộc</th>
                                        <td><?php echo $itemnull['DanToc']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tôn giáo</th>
                                        <td><?php echo $itemnull['TonGiao']; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table class="fl-table tt">
                                    <tr>
                                        <th>Số CMND/CCCD</th>
                                        <td><?php echo $itemnull['SoCMT']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nơi cấp</th>
                                        <td><?php echo $itemnull['NoiCapCMT']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>SĐT</th>
                                        <td><?php echo $itemnull['SDT']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?php echo $itemnull['Email']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Đối tượng miễn giảm</th>
                                        <td><?php echo $itemnull['DoiTuongMG']; ?></td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                        <br>
                        <button class="btnSave"
                                onclick="window.location='../quanlysinhvien/suasinhvien.php?id=<?php echo $itemnull['MaSV'] ?>'">Sửa</button><br><br>
                    </div>
                    <?php }else{?>
                    <table class="fl-table tt">
                        <thead>
                            <tr>
                                <th>Mã sinh viên</th>
                                <th>Họ tên</th>
                                <th>Ngành</th>
                                <th>Lớp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $item['MaSV']; ?></td>
                                <td><?php echo $item['TenSV']; ?></td>
                                <td><?php echo $item['TenNganh']; ?></td>
                                <td><?php echo $item['TenLop']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="head_title">
                        <h1>Thông tin sinh viên</h1>
                        <div class="ttsv"
                             style="display:flex; justify-content: space-between;">
                            <div>
                                <table class="fl-table tt">
                                    <tr>
                                        <th>Ngày sinh</th>
                                        <td><?php echo $item['NgaySinh']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Quê quán</th>
                                        <td><?php echo $item['QueQuan']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Giới tính</th>
                                        <td><?php echo $item['GioiTinh']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Dân tộc</th>
                                        <td><?php echo $item['DanToc']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tôn giáo</th>
                                        <td><?php echo $item['TonGiao']; ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div>
                                <table class="fl-table tt">
                                    <tr>
                                        <th>Số CMND/CCCD</th>
                                        <td><?php echo $item['SoCMT']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nơi cấp</th>
                                        <td><?php echo $item['NoiCapCMT']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>SĐT</th>
                                        <td><?php echo $item['SDT']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td><?php echo $item['Email']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Đối tượng miễn giảm</th>
                                        <td><?php echo $item['DoiTuongMG']; ?></td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                        <br>
                        <button class="btnSave"
                                onclick="window.location='../quanlysinhvien/suasinhvien.php?id=<?php echo $item['MaSV'] ?>'">Sửa</button><br><br>
                    </div>
                    <?php }?>
                    <br>
                    <button class="btn-submit-css"
                            onclick="window.location = '../quanlysinhvien/showsinhvien.php'">Trở về</button><br><br>
                </div>
            </div>
    </section>
    <?php include("../footer.php"); ?>
</body>

</html>