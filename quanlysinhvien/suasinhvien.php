<?php
    $conn = mysqli_connect("localhost", "root", "", "qlsv") or die("Connection failed !");
    mysqli_set_charset($conn, 'utf8');
    $id = $_GET["id"];
    if ($id){
        
        $result = mysqli_query($conn, "select *from lop join sinhvien on sinhvien.MaLop=lop.MaLop 
                                        join nganh on lop.MaNganh = nganh.MaNganh where MaSV='$id'");
         $item = mysqli_fetch_array($result);
        $resultnull = mysqli_query($conn, "select *from sinhvien
        join nganh on nganh.MaNganh = sinhvien.MaNganh where MaSV='$id'");
        $itemnull = mysqli_fetch_array($resultnull);
    }

    if (isset($_POST['edit_student']))
    {
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
        if (empty($data['DanToc'])){
            $errors['DanToc'] = 'Chưa nhập dân tộc sinh viên';
        }
        if (empty($data['TonGiao'])){
            $errors['TonGiao'] = 'Chưa nhập tôn giáo sinh viên';
        }
        if (empty($data['SoCMT'])){
            $errors['SoCMT'] = 'Chưa nhập số CMT';
        }
        if (empty($data['NoiCapCMT'])){
            $errors['NoiCapCMT'] = 'Chưa nhập nơi cấp CMT';
        }
        if (empty($data['SDT'])){
            $errors['SDT'] = 'Chưa nhập số điện thoại';
        }
        if (!filter_var($data['Email'], FILTER_VALIDATE_EMAIL)) {
            $errors['Email'] = '<br><br>Email chưa đúng định dạng';
        }       
        if (!$errors){
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
            $add = "UPDATE sinhvien SET 
            NgaySinh='$ns',
            QueQuan='$qq',
            GioiTinh='$gt',
            DanToc='$dt',
            TonGiao='$tg',
            SoCMT='$cmt',
            NoiCapCMT='$nccmt',
            SDT='$sdt',
            Email='$em',
            DoiTuongMG='$dtmg'
            where MaSV='$id'"; 
            $qr = mysqli_query($conn,$add);
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
                        <?php if($item['MaLop'] == NULL){ ?>
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
                                 style="display:flex;">
                                <div>
                                    <table class="fl-table tt">
                                        <tr>
                                            <th>Ngày sinh</th>
                                            <td>
                                                <input type="date"
                                                       name="NgaySinh"
                                                       class="edit_diem"
                                                       value="<?php echo $itemnull['NgaySinh']; ?>"
                                                       required />
                                                <?php if (!empty($errors['NgaySinh'])) echo $errors['NgaySinh']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Quê quán</th>
                                            <td>
                                                <input type="text"
                                                       name="QueQuan"
                                                       class="edit_diem"
                                                       value="<?php echo $itemnull['QueQuan']; ?>"
                                                       required />
                                                <?php if (!empty($errors['QueQuan'])) echo $errors['QueQuan']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Giới tính</th>
                                            <td>
                                                <select name="GioiTinh"
                                                        class="edit_diem">
                                                    <option value="<?php echo $itemnull['GioiTinh']; ?>">
                                                        <?php echo $itemnull['GioiTinh']; ?></option>
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
                                                       value="<?php echo $itemnull['DanToc']; ?>"
                                                       required />
                                                <?php if (!empty($errors['DanToc'])) echo $errors['DanToc']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tôn giáo</th>
                                            <td>
                                                <input type="text"
                                                       name="TonGiao"
                                                       class="edit_diem"
                                                       value="<?php echo $itemnull['TonGiao']; ?>"
                                                       required />
                                                <?php if (!empty($errors['TonGiao'])) echo $errors['TonGiao']; ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div>
                                    <table class="fl-table tt">
                                        <tr>
                                            <th>Số CMND/CCCD</th>
                                            <td>
                                                <input type="text"
                                                       name="SoCMT"
                                                       class="edit_diem"
                                                       value="<?php echo $itemnull['SoCMT']; ?>"
                                                       required />
                                                <?php if (!empty($errors['SoCMT'])) echo $errors['SoCMT']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Nơi cấp</th>
                                            <td>
                                                <input type="text"
                                                       name="NoiCapCMT"
                                                       class="edit_diem"
                                                       value="<?php echo $itemnull['NoiCapCMT']; ?>"
                                                       required />
                                                <?php if (!empty($errors['NoiCapCMT'])) echo $errors['NoiCapCMT']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>SĐT</th>
                                            <td>
                                                <input type="text"
                                                       name="SDT"
                                                       class="edit_diem"
                                                       value="<?php echo $itemnull['SDT']; ?>"
                                                       required />
                                                <?php if (!empty($errors['SDT'])) echo $errors['SDT']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>
                                                <input type="text"
                                                       name="Email"
                                                       class="edit_diem"
                                                       value="<?php echo $itemnull['Email']; ?>"
                                                       required />
                                                <?php if (!empty($errors['Email'])) echo $errors['Email']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Đối tượng miễn giảm</th>
                                            <td>
                                                <select name="DoiTuongMG"
                                                        class="edit_diem">
                                                    <option value="<?php echo $itemnull['DoiTuongMG']; ?>">
                                                        <?php echo $itemnull['DoiTuongMG']; ?></option>
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
                                    onclick="return confirm('Bạn có chắc muốn sửa không?');"
                                    class="btnSave">Xác nhận</button><br><br>
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
                                 style="display:flex;">
                                <div>
                                    <table class="fl-table tt">
                                        <tr>
                                            <th>Ngày sinh</th>
                                            <td>
                                                <input type="date"
                                                       name="NgaySinh"
                                                       class="edit_diem"
                                                       value="<?php echo $item['NgaySinh']; ?>"
                                                       required />
                                                <?php if (!empty($errors['NgaySinh'])) echo $errors['NgaySinh']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Quê quán</th>
                                            <td>
                                                <input type="text"
                                                       name="QueQuan"
                                                       class="edit_diem"
                                                       value="<?php echo $item['QueQuan']; ?>"
                                                       required />
                                                <?php if (!empty($errors['QueQuan'])) echo $errors['QueQuan']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Giới tính</th>
                                            <td>
                                                <select name="GioiTinh"
                                                        class="edit_diem">
                                                    <option value="<?php echo $item['GioiTinh']; ?>">
                                                        <?php echo $item['GioiTinh']; ?></option>
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
                                                       value="<?php echo $item['DanToc']; ?>"
                                                       required />
                                                <?php if (!empty($errors['DanToc'])) echo $errors['DanToc']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tôn giáo</th>
                                            <td>
                                                <input type="text"
                                                       name="TonGiao"
                                                       class="edit_diem"
                                                       value="<?php echo $item['TonGiao']; ?>"
                                                       required />
                                                <?php if (!empty($errors['TonGiao'])) echo $errors['TonGiao']; ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div>
                                    <table class="fl-table tt">
                                        <tr>
                                            <th>Số CMND/CCCD</th>
                                            <td>
                                                <input type="text"
                                                       name="SoCMT"
                                                       class="edit_diem"
                                                       value="<?php echo $item['SoCMT']; ?>"
                                                       required />
                                                <?php if (!empty($errors['SoCMT'])) echo $errors['SoCMT']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Nơi cấp</th>
                                            <td>
                                                <input type="text"
                                                       name="NoiCapCMT"
                                                       class="edit_diem"
                                                       value="<?php echo $item['NoiCapCMT']; ?>"
                                                       required />
                                                <?php if (!empty($errors['NoiCapCMT'])) echo $errors['NoiCapCMT']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>SĐT</th>
                                            <td>
                                                <input type="text"
                                                       name="SDT"
                                                       class="edit_diem"
                                                       value="<?php echo $item['SDT']; ?>"
                                                       required />
                                                <?php if (!empty($errors['SDT'])) echo $errors['SDT']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>
                                                <input type="text"
                                                       name="Email"
                                                       class="edit_diem"
                                                       value="<?php echo $item['Email']; ?>"
                                                       required />
                                                <?php if (!empty($errors['Email'])) echo $errors['Email']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Đối tượng miễn giảm</th>
                                            <td>
                                                <select name="DoiTuongMG"
                                                        class="edit_diem">
                                                    <option value="<?php echo $itemnull['DoiTuongMG']; ?>">
                                                        <?php echo $itemnull['DoiTuongMG']; ?></option>
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
                                    onclick="return confirm('Bạn có chắc muốn sửa không?');"
                                    class="btnSave">Xác nhận</button><br><br>
                        </div>
                        <?php }?>

                    </div>

                </form>
            </div>
        </div>
    </section>
    <?php include("../footer.php"); ?>
</body>

</html>