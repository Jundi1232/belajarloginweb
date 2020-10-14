<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
    
    if (!empty($username) && !empty($password));{
    $sql= mysqli_query($connect,"SELECT * FROM user WHERE username= '$username' and password ='$password'");
    $result=mysqli_num_rows($sql);
    if($result){
        echo"Anda berhasil masuk";
        echo" klik <a href='home.php'>disini </a> untuk melanjutkan";
    }else{

        echo"Gagal masuk harap masukan pasword dengan benar";

    }
    }
    
    
?>
