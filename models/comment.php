<?php 

function lis_comment()
{
    $conn = connection();
    $sql = "SELECT * FROM binh_luan INNER JOIN hang_hoa ON binh_luan.ma_hh = hang_hoa.ma_hh ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function lis_commentt($id)
{
    $conn = connection();
    $sql = "SELECT * FROM binh_luan INNER JOIN hang_hoa ON binh_luan.ma_hh = hang_hoa.ma_hh WHERE binh_luan.ma_hh = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function count_comment()
{
    $conn = connection();
    $sql = "SELECT binh_luan.ma_hh,hang_hoa.ten_hh,COUNT( binh_luan.noi_dung) AS so_luong FROM binh_luan INNER JOIN hang_hoa ON binh_luan.ma_hh = hang_hoa.ma_hh GROUP BY ma_hh;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function delete_cmt()
{
    $id = $_GET['id'];
    $iddm = $_GET['iddm'];
    $sql = "DELETE FROM `binh_luan` WHERE `ma_bl` = $id";
    $conn = connection();
    $conn->exec($sql);
    header("location: index.php?ctr=comment&id=$iddm");
}