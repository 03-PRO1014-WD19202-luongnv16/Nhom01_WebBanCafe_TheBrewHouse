<?php
function loadall_taikhoan() {
    $sql = "SELECT * FROM taikhoan WHERE 1";
    $listkhachhang = pdo_query($sql); 
    return $listkhachhang;
  }
?>