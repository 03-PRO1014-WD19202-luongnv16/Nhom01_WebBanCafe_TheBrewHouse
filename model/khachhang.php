<?php
function loadall_taikhoan() {
    $sql = "SELECT * FROM taikhoan WHERE 1";
    $listkh = pdo_query($sql); 
    return $listkh;
  }
?>