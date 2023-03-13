<?php

function check_login($data = [])
{
    $conn = connection();
    $sql = "SELECT * FROM `khach_hang` WHERE ma_kh =? AND mat_khau=? ";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function check_loginadmin($data = [])
{
    $conn = connection();
    $sql = "SELECT * FROM `khach_hang` WHERE ma_kh =? AND mat_khau=? AND vai_tro=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

