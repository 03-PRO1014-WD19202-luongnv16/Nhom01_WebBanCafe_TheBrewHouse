<?php
function insert_taikhoan($email,$user,$pass,$tel,$address){
    $sql="insert into taikhoan(email,user,pass,tel,address) values('$email','$user','$pass','$tel','$address')";
    pdo_execute($sql);
}

function checkuser($user,$pass){
    $sql="select * from taikhoan where user='".$user."' AND pass='".$pass."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id,$user,$pass,$email,$address,$tel){
    $sql="update taikhoan set user='".$user."',pass='".$pass."',email='".$email."',address='".$address."',tel='".$tel."' where id=".$id;
    pdo_execute($sql);
}
function checkemail($email){
    $sql="select * from taikhoan where email='".$email."'";
    $sp=pdo_query_one($sql);
    return $sp;
}
?>