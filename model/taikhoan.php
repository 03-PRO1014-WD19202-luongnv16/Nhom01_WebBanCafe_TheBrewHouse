<?php
// function insert_taikhoan($email,$user,$pass,$tel,$address){
//     $sql="insert into taikhoan(email,user,pass,tel,address) values('$email','$user','$pass','$tel','$address')";
//     pdo_execute($sql);
// }

function checkuser($user,$pass){
    if(($user=='' && $pass=='') || ($user=='' || $pass=='')) {
        echo '<script>alert("Vui lòng điền đầy đủ thông tin")</script>';
    }else if($user!='' && $pass!=''){
        $sql="select * from taikhoan where user='".$user."' AND pass='".$pass."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }else{
        echo '<script>alert("Sai tài khoản hoặc mật khẩu")</script>';
    }
}
function checkdangki($user,$pass,$email,$address,$tel){

    $emailError=filter_var($email,FILTER_SANITIZE_EMAIL);
    $passError = '/^.{6,}$/';
    $telError = '/^09\d{8}$/';
    if($user=='' || $pass=='' || $email=='' || $address=='' || $tel==''){
        echo '<script>alert("Vui lòng điền đầy đủ thông tin")</script>';
    }else if( !preg_match($passError, $pass)){
        echo '<script>alert("Mật khẩu phải từ 6 kí tự trở lên")</script>';
    }else if(!filter_var($emailError,FILTER_VALIDATE_EMAIL)){
        echo '<script>alert("Email không đúng định dạng")</script>';
    }else if(!preg_match($telError, $tel)){
        echo '<script>alert("Số điện thoại không đúng định dạng")</script>';    
    }else{
        $sql="insert into taikhoan(email,user,pass,tel,address) values('$email','$user','$pass','$tel','$address')";
        pdo_execute($sql);
    }
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