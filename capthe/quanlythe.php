<?php
    $conn = mysqli_connect("localhost", "root", "", "qlsv") or die("Connection failed !");
    mysqli_set_charset($conn, 'utf8');
    $result = mysqli_query($conn, 'select count(MaSo) as total from thesv');
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
    $result = mysqli_query($conn, "SELECT * FROM thesv ORDER BY MaSV LIMIT $start, $limit");
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
                    <h1>Quản lý thẻ sinh viên</h1>
                </div>
                <br>
                <form action="timkiemthe.php"
                      method="POST">
                    <input type="text"
                           name="masv"
                           placeholder="Nhập mã sinh viên "
                           class="input-css"
                           required>
                    <button type="submit"
                            name="submit"
                            class="btn-submit-css">Tìm kiếm</button>
                </form>

                <div class="table-wrapper">
                    <table class="fl-table tt">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã sinh viên</th>
                                <th>Trạng thái</th>
                                <th>Ngày cấp</th>
                                <th>Ghi chú</th>
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
                                <td><?php echo $item['TrangThai']; ?></td>
                                <td><?php echo $item['NgayCap']; ?></td>
                                <td width="300"><?php echo $item['GhiChu']; ?></td>
                                <td>
                                    <form method="post"
                                          action="">
                                        <input onclick="window.location = '../capthe/suatrangthai.php?id=<?php echo $item['MaSo'] ?>'"
                                               type="button"
                                               value="Sửa"
                                               class="btn-submit-css">
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
                echo '<a href="quanlythe.php?page='.($current_page-1).'" class="page-css">Prev</a>  ';
            }
            for ($a = 1; $a <= $total_page; $a++){
                if ($i == $current_page){
                    echo '<span>'.$a.'</span> | ';
                }
                else{
                    echo '<a href="quanlythe.php?page='.$a.'" class="page-css">'.$a.'</a>  ';
                }
            }
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="quanlythe.php?page='.($current_page+1).'" class="page-css">Next</a> ';
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