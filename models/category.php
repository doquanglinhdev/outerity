<?php

function loai_all()
{
    $conn = connection();
    $sql = "Select * From loai";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function loai_insert($data = [])
{
    $conn = connection();
    $sql = "INSERT INTO loai(ten_loai) Values(?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}

function delete_category()
{
    $id = $_GET['id'];
    $sql = "DELETE FROM `loai` WHERE `loai`.`ma_loai` = $id";
    $conn = connection();
    $conn->exec($sql);
    header("location: index.php?ctr=list-category");
}

function update_category($data = [])
{
    $conn = connection();
    $sql = "UPDATE loai SET ten_loai = ?,hien_thi = ? WHERE ma_loai = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
    setcookie("edit", "Sửa dữ liệu thành công", time() + 5);
}

function category_one($id)
{
    $conn = connection();
    $sql = "SELECT * FROM loai WHERE ma_loai=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function count_category()
{
    $conn = connection();
    $sql = "SELECT COUNT(*) FROM loai";
    $stmt = $conn->query($sql);
    $count = $stmt->fetchColumn();
    return $count;
}
function thongke_all()
{
    $conn = connection();
    $sql = "SELECT *,COUNT(hang_hoa.ten_hh) AS sluong FROM hang_hoa INNER JOIN loai ON hang_hoa.ma_loai = loai.ma_loai GROUP BY loai.ten_loai;
    ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function thongke_minmax()
{
    $conn = connection();
    $sql = "SELECT loai.ten_loai,COUNT(hang_hoa.ten_hh) AS sluong, MAX(hang_hoa.don_gia) AS maxgia, MIN(hang_hoa.don_gia) AS mingia, AVG(don_gia) AS giatb FROM `hang_hoa` INNER JOIN loai ON hang_hoa.ma_loai = loai.ma_loai GROUP BY loai.ten_loai;";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}