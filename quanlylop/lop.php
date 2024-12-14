<?php

    $conn = mysqli_connect("localhost", "root", "", "qlsv") or die("Connection failed !");
    mysqli_set_charset($conn, 'utf8'); 
    $id = $_GET["id"];
    $sql = "select * from lop join nganh on nganh.MaNganh = lop.MaNganh 
            join gvcn on gvcn.MaGV = lop.MaGV where lop.MaNganh = '$id' ";
    $qr = mysqli_query($conn, $sql);   

    if(isset($_POST['submit1'])){
        $malop =$_POST['submit1'];
        $sql1 = "UPDATE sinhvien SET MaLop = '$malop' where MaNganh = '$id'";
        $qr1 = mysqli_query($conn, $sql1);
        header("location: xetlop.php");
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
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <?php 
            $i = 0;
            while($item  = mysqli_fetch_array($qr)){ ?>
                        <tbody>
                            <tr>
                                <td><?php $i++; echo $i; ?></td>
                                <td><?php echo $item['MaLop']; ?></td>
                                <td><?php echo $item['TenLop']; ?></td>
                                <td><?php echo $item['TenGV']; ?></td>
                                <td><?php echo $item['TenNganh']; ?></td>
                                <td>
                                    <form method="POST"
                                          action="">
                                        <button value="<?php echo $item['MaLop']; ?>"
                                                type="submit"
                                                name="submit1"
                                                class="btn-submit-css">Chọn</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
                <br>
            </div>
        </div>
    </section>
    <?php include("../footer.php"); ?>
</body>

</html>