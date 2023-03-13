<?php

function register_add($data = [])
{
    // $success = "123";
    $conn = connection();
    $sql = "INSERT INTO khach_hang (ma_kh, email, mat_khau, ho_ten,so_dien_thoai,kich_hoat,vai_tro) VALUES (?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
    // return $success;
}
