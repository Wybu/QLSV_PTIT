<?php
    $conn = mysqli_connect("localhost", "root", "", "qlsv") or die("Connection failed !");
    mysqli_set_charset($conn, 'utf8');
    
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    if($id){
        $xoathe = mysqli_query($conn, "DELETE FROM thesv where MaSV = '$id'");
        $xoadiem = mysqli_query($conn, "DELETE FROM diem where MaSV = '$id'");
        $xoacanhcao = mysqli_query($conn, "DELETE FROM canhcao where MaSV = '$id'");
        $sql = "DELETE FROM sinhvien WHERE MaSV = '$id'";
        $query = mysqli_query($conn, $sql);
    }
    mysqli_close($conn);
    header('location: showsinhvien.php');
?>