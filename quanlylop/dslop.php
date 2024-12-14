<?php

    $conn = mysqli_connect("localhost", "root", "", "qlsv") or die("Connection failed !");
    mysqli_set_charset($conn, 'utf8');

    $result = mysqli_query($conn, 'select count(MaLop) as total from lop ');
    $row = mysqli_fetch_assoc($result);
    $total_records = $row['total'];

    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 5;
    $total_page = ceil($total_records / $limit);

    if ($current_page > $total_page){
        $current_page = $total_page;
    }
    else if ($current_page < 1){
        $current_page = 1;
    }

    $start = ($current_page - 1) * $limit;
    $result = mysqli_query($conn, "SELECT * FROM lop join nganh on nganh.MaNganh = lop.MaNganh 
                                   join gvcn on gvcn.MaGV = lop.MaGV ORDER BY MaLop LIMIT $start, $limit");

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
                    <h1>DANH SÁCH LỚP</h1>
                </div>
                <br>
                <div class="table-wrapper">
                    <table class="fl-table tt">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã Lớp</th>
                                <th>Tên Lớp</th>
                                <th>Tên CVHT</th>
                                <th>Tên Ngành</th>
                                <th>Số sinh viên</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <?php 
            $i = ($current_page - 1) * $limit;
            foreach ($result as $item){ ?>
                        <tbody>
                            <tr>
                                <td><?php $i++; echo $i; ?></td>
                                <td><?php echo $item['MaLop']; ?></td>
                                <td><?php echo $item['TenLop']; ?></td>
                                <td><?php echo $item['TenGV']; ?></td>
                                <td><?php echo $item['TenNganh']; ?></td>
                                <td>
                                    <?php
                                    $maLop = $item['MaLop']; 
                                    $ssv = " select * from sinhvien where MaLop = '$maLop'" ;
                                    $qrssv = mysqli_query($conn,$ssv);
                                    $dem = 0;
                                    while ($svlop = mysqli_fetch_array($qrssv)){
                                        $dem ++;
                                    }
                                    echo $dem;
                                    ?>
                                </td>
                                <td>
                                    <form method="post"
                                          action="">
                                        <input onclick="window.location = '../quanlylop/thongtinlop.php?id=<?php echo $item['MaLop'] ?>'"
                                               type="button"
                                               value="Xem thông tin"
                                               class="btn-submit-css">
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
                <br>
                <form action=""
                      method="get"
                      style="text-align: right;">
                    <div class="pagination">
                        <?php 
            if ($current_page > 1 && $total_page > 1){
                echo '<a href="dslop.php?page='.($current_page-1).'" class="page-css">Prev</a>  ';
            }
            for ($a = 1; $a <= $total_page; $a++){
                if ($i == $current_page){
                    echo '<span>'.$a.'</span> | ';
                }
                else{
                    echo '<a href="dslop.php?page='.$a.'" class="page-css">'.$a.'</a>  ';
                }
            }
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="dslop.php?page='.($current_page+1).'" class="page-css">Next</a> ';
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