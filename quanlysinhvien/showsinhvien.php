<?php
    $conn = mysqli_connect("localhost", "root", "", "qlsv") or die("Connection failed !");
    mysqli_set_charset($conn, 'utf8');

    $result = mysqli_query($conn, 'select count(MaSV) as total from sinhvien');
    $row = mysqli_fetch_assoc($result);
    $total_records = $row['total'];

    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 8;
    $total_page = ceil($total_records / $limit);

    if ($current_page > $total_page){
        $current_page = $total_page;
    }
    else if ($current_page < 1){
        $current_page = 1;
    }

    $start = ($current_page - 1) * $limit;
    $result = mysqli_query($conn, "SELECT * FROM sinhvien ORDER BY MaSV LIMIT $start, $limit");

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
                    <h1>DANH SÁCH SINH VIÊN</h1>
                </div>
                <br>
                <form action="timkiemsv.php"
                      method="POST">
                    <input type="text"
                           name="masv"
                           placeholder="Nhập mã sinh viên "
                           class="input-css"
                           required>
                    <button type="submit"
                            name="submit"
                            class="btn-submit-css">Tìm kiếm</button>
                    <input onclick="window.location = 'themsinhvien.php'"
                           type="button"
                           value="Thêm sinh viên"
                           class="btn-submit-css" /> <br> 
                </form>

                <div class="table-wrapper">
                    <table class="fl-table tt">
                        <thead>
                            <tr>
                                <th>STT</th>
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
                        <?php 
            $i = ($current_page - 1) * $limit;
            foreach ($result as $item){ ?>
                        <tbody>
                            <tr>
                                <td><?php $i++; echo $i; ?></td>
                                <td><?php echo $item['MaSV']; ?></td>
                                <td><?php echo $item['TenSV']; ?></td>
                                <td><?php echo $item['GioiTinh']; ?></td>
                                <td><?php echo $item['NgaySinh']; ?></td>
                                <td><?php echo $item['QueQuan']; ?></td>
                                <td><?php echo $item['SDT']; ?></td>
                                <td><?php echo $item['Email']; ?></td>

                                <td>
                                    <form action="xoasinhvien.php"
                                          method="post">

                                        <input onclick="window.location = '../quanlysinhvien/thongtinsv.php?id=<?php echo $item['MaSV'] ?>'"
                                               type="button"
                                               value="Xem thông tin"
                                               class="btn-submit-css">
                                        <input type="hidden"
                                               name="id"
                                               value="<?php echo $item['MaSV']?>">
                                        <input onclick="return confirm('Bạn có chắc muốn xóa sinh viên này không?')"
                                               type="submit"
                                               name="xoa"
                                               class="btn-submit-css"
                                               value="Xóa">
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
                <form action=""
                      method="get"
                      style="text-align: right;">
                    <div class="pagination">
                        <?php 
            if ($current_page > 1 && $total_page > 1){
                echo '<a href="showsinhvien.php?page='.($current_page-1).'" class="page-css">Prev</a>  ';
            }
            for ($a = 1; $a <= $total_page; $a++){
                if ($i == $current_page){
                    echo '<span>'.$a.'</span> | ';
                }
                else{
                    echo '<a href="showsinhvien.php?page='.$a.'" class="page-css">'.$a.'</a>  ';
                }
            }
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="showsinhvien.php?page='.($current_page+1).'" class="page-css">Next</a> ';
            }
        ?>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php include("../footer.php"); ?>
</body>

</html>