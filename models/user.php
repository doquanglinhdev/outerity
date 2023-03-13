<?php

function user_all()
{
    $conn = connection();
    $sql = "SELECT * FROM `khach_hang`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function count_user()
{
    $conn = connection();
    $sql = "SELECT COUNT(*) FROM khach_hang";
    $stmt = $conn->query($sql);
    $count = $stmt->fetchColumn();
    return $count;
}

function user_one($id)
{
    $conn = connection();
    $sql = "SELECT * FROM khach_hang WHERE ma_kh=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function up_date_user($data = [])
{
    $conn = connection();
    $sql = "UPDATE khach_hang SET ho_ten =?,email =?,mat_khau =?,so_dien_thoai =?,kich_hoat=?, vai_tro=? WHERE ma_kh =?";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}

function up_date_pass($data = [])
{
    $conn = connection();
    $sql = "UPDATE khach_hang SET mat_khau =? WHERE ma_kh =?";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}

function delete_user()
{
    $id = $_GET['iduser'];
    $sql = "DELETE FROM `khach_hang` WHERE `ma_kh` = '$id'";
    $conn = connection();
    $conn->exec($sql);
    header("location: index.php?ctr=list-user");
    setcookie("create", "Xóa dữ liệu thành công !!!", time() + 2);
    header("location: index.php?ctr=list-user");
    exit;
}
