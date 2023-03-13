<?php
function checkmail($data = [])
{
    $conn = connection();
    $sql = "SELECT * FROM `khach_hang` WHERE ma_kh=? AND email = ? ";
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
