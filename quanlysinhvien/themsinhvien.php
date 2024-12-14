<?php
    $conn = mysqli_connect("localhost", "root", "", "qlsv") or die("Connection failed !");
    mysqli_set_charset($conn, 'utf8');

        $result = mysqli_query($conn,
         "select *from sinhvien join nganh on sinhvien.MaNganh=nganh.MaNganh");
        $row = mysqli_fetch_assoc($result);
        $sqlNganh ="select * from Nganh";
        $qrNganh=mysqli_query($conn,$sqlNganh);
        $num = mysqli_affected_rows($conn);
        $infor= mysqli_fetch_all($qrNganh, MYSQLI_ASSOC);

    if (isset($_POST['edit_student']))
    {
        $data['MaSV'] = isset($_POST['MaSV']) ? $_POST['MaSV'] : '';
        $data['TenSV'] = isset($_POST['TenSV']) ? $_POST['TenSV'] : '';
        $data['MaNganh'] = isset($_POST['MaNganh']) ? $_POST['MaNganh'] : '';
        $data['MaLop'] = isset($_POST['MaLop']) ? $_POST['MaLop'] : '';
        $data['NgaySinh'] = isset($_POST['NgaySinh']) ? $_POST['NgaySinh'] : '';
        $data['QueQuan'] = isset($_POST['QueQuan']) ? $_POST['QueQuan'] : '';
        $data['GioiTinh'] = isset($_POST['GioiTinh']) ? $_POST['GioiTinh'] : '';
        $data['DanToc'] = isset($_POST['DanToc']) ? $_POST['DanToc'] : '';
        $data['TonGiao'] = isset($_POST['TonGiao']) ? $_POST['TonGiao'] : '';
        $data['SoCMT'] = isset($_POST['SoCMT']) ? $_POST['SoCMT'] : '';
        $data['NoiCapCMT'] = isset($_POST['NoiCapCMT']) ? $_POST['NoiCapCMT'] : '';
        $data['SDT'] = isset($_POST['SDT']) ? $_POST['SDT'] : '';
        $data['Email'] = isset($_POST['Email']) ? $_POST['Email'] : '';
        $data['DoiTuongMG'] = isset($_POST['DoiTuongMG']) ? $_POST['DoiTuongMG'] : '';
        
        // Validate thong tin
        $errors = array();
        if (empty($data['NgaySinh'])){
            $errors['NgaySinh'] = 'Chưa nhập ngày sinh sinh viên';
        }
        if (empty($data['QueQuan'])){
            $errors['QueQuan'] = 'Chưa nhập địa chỉ sinh viên';
        }
        if (empty($data['GioiTinh'])){
            $errors['GioiTinh'] = 'Chưa nhập giới tính sinh viên';
        }
        if (empty($data['DanToc'])){
            $errors['DanToc'] = 'Chưa nhập dân tộc sinh viên';
        }
        if (empty($data['TonGiao'])){
            $errors['TonGiao'] = 'Chưa nhập ton giao sinh viên';
        }
        if (empty($data['SoCMT'])){
            $errors['SoCMT'] = 'Chưa nhập số CMT';
        }
        if (empty($data['NoiCapCMT'])){
            $errors['NoiCapCMT'] = 'Chưa nhập nơi cấp CMT';
        }
        if (empty($data['SDT'])){
            $errors['SDT'] = 'Chưa nhập điện thoại';
        }
        if (empty($data['Email'])){
            $errors['Email'] = 'Chưa nhập email';
        }       
        if (!$errors){
            $msv = addslashes($data['MaSV']);
            $ht = addslashes($data['TenSV']);
            $k = addslashes($data['MaNganh']);
            $ml = addslashes($data['MaLop']);
            $gt = addslashes($data['GioiTinh']);
            $qq = addslashes($data['QueQuan']);
            $ns = addslashes($data['NgaySinh']);
            $dt = addslashes($data['DanToc']);
            $tg = addslashes($data['TonGiao']);
            $cmt = addslashes($data['SoCMT']);
            $nccmt = addslashes($data['NoiCapCMT']);
            $sdt = addslashes($data['SDT']);
            $em = addslashes($data['Email']);
            $dtmg = addslashes($data['DoiTuongMG']);
            
             $sql = "INSERT INTO sinhvien(MaSV,TenSV, GioiTinh,NgaySinh,QueQuan, DanToc, TonGiao, SoCMT, NoiCapCMT, SDT, Email, DoiTuongMG,MaLop,MaNganh)
             Values ('$msv','$ht','$gt','$ns','$qq','$dt','$tg','$cmt','$nccmt','$sdt','$em','$dtmg',null,'$k')";
             $qr = mysqli_query($conn,$sql);
             header("location: showsinhvien.php");
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
                <form action=""
                      method="POST">
                    <div class="table-wrapper">
                        <div class="head_title">
                            <h1>Thêm sinh viên</h1>
                            <div class="ttsv"
                                 style="display:flex;">
                                <div>
                                    <table class="fl-table tt">
                                        <tr>
                                            <th>Mã sinh viên</th>
                                            <td>
                                                <input type="text"
                                                       name="MaSV"
                                                       class="edit_diem"
                                                       required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Họ và tên</th>
                                            <td>
                                                <input type="text"
                                                       name="TenSV"
                                                       class="edit_diem"
                                                       required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Ngày sinh</th>
                                            <td>
                                                <input type="date"
                                                       name="NgaySinh"
                                                       class="edit_diem"
                                                       required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Quê quán</th>
                                            <td>
                                                <input type="text"
                                                       name="QueQuan"
                                                       class="edit_diem"
                                                       required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Giới tính</th>
                                            <td>
                                                <select name="GioiTinh"
                                                        class="edit_diem">
                                                    <option value="0">
                                                        ----------------------------Chọn-------------------------
                                                    </option>
                                                    <option value="Nam">Nam</option>
                                                    <option value="Nữ">Nữ</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Dân tộc</th>
                                            <td>
                                                <input type="text"
                                                       name="DanToc"
                                                       class="edit_diem"
                                                       required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tôn giáo</th>
                                            <td>
                                                <input type="text"
                                                       name="TonGiao"
                                                       class="edit_diem"
                                                       required>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div>
                                    <table class="fl-table tt">
                                        <tr>
                                            <th>Ngành</th>
                                            <td>
                                                <select class="edit_diem"
                                                        name="MaNganh">
                                                    <option value="0">----------------------Chọn
                                                        Ngành----------------------</option>
                                                    <?php
                                    for($i=0;$i<$num;$i++){
                                    ?>
                                                    <option value="<?php echo "{$infor[$i]['MaNganh']}" ?>">
                                                        <?php echo "{$infor[$i]['TenNganh']}" ?></option>
                                                    <?php
                                    }
                                    ?>

                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Số CMND/CCCD</th>
                                            <td>
                                                <input type="text"
                                                       name="SoCMT"
                                                       class="edit_diem"
                                                       required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Nơi cấp</th>
                                            <td>
                                                <input type="text"
                                                       name="NoiCapCMT"
                                                       class="edit_diem"
                                                       required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>SĐT</th>
                                            <td>
                                                <input type="text"
                                                       name="SDT"
                                                       class="edit_diem"
                                                       required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>
                                                <input type="text"
                                                       name="Email"
                                                       class="edit_diem"
                                                       required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Đối tượng miễn giảm</th>
                                            <td>
                                                <select name="DoiTuongMG"
                                                        class="edit_diem">
                                                <option value="0">
                                                        ----------------------------Chọn-------------------------
                                                    </option>
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                </select>       
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <button name="edit_student"
                                    class="btnSave">Xác nhận</button><br><br>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
    <?php include("../footer.php"); ?>
</body>

</html>