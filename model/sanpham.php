<?php
function insert_sanpham($name,$mota,$img,$import_price,$sale_price,$listed_price,$stock,$iddm){
  $sql = "INSERT INTO sanpham(name,mota,img,import_price,sale_price,listed_price,stock,iddm) values('$name','$mota','$img','$import_price','$sale_price','$listed_price',$stock,'$iddm')";
  pdo_execute($sql);
}
  function loadAll_sanpham(){
    $sql = "SELECT * from sanpham order by id desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
  }
  function loadAll_sanpham_yeuthich(){
    $sql = "SELECT * FROM sanpham where 1 order by stock desc limit 4"; 
    $listsanpham = pdo_query($sql);
    return $listsanpham;
  }
  function loadAll_sanpham_new(){
    $sql = "SELECT * FROM sanpham order by id desc limit 0,8"; 
    $listsanpham = pdo_query($sql);
    return $listsanpham;
  }
  function loadall_sanpham_dm($iddm) {
    $sql = "SELECT * FROM sanpham WHERE iddm = $iddm ORDER BY id DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
  }
  function delete_sanpham($id){
    $sql = "DELETE FROM sanpham WHERE id=".$id;
    pdo_execute($sql);
  }
  function loadOne_sanpham($id){
    $sql = "SELECT * FROM sanpham WHERE id=".$id;
    $sp = pdo_query_one($sql);
    return $sp;
  }
  function update_sanpham($id,$name,$mota,$img,$import_price,$sale_price,$listed_price,$stock,$iddm){
    if($img!=""){
      $sql = "UPDATE sanpham SET name='$name',mota='$mota',img='$img',import_price='$import_price',sale_price='$sale_price',listed_price='$listed_price',stock='$stock',iddm='$iddm' WHERE id=".$id;
    }else{
      $sql = "UPDATE sanpham SET name='$name',mota='$mota',import_price='$import_price',sale_price='$sale_price',listed_price='$listed_price',stock='$stock',iddm='$iddm' WHERE id=".$id;
    }
    pdo_execute($sql);
  }
?> 