<?php
function loadall_binhluan_admin() {
    $sql = "SELECT * FROM binhluan WHERE 1";
    $list_bl = pdo_query($sql); 
    return $list_bl;
  }
?>