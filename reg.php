<?php 
require 'connect.php';
if(isset($_POST['btn-reg'])){ 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    if(!empty($username) && !empty($password) && !empty($fullname) && !empty($email) ) { 
        $sql = "INSERT INTO tbl_user (`username` , `password` , `fullname`, `email`) VALUES ('$username', '$password', '$fullname', '$email' )";
          
         
        if($conn->query($sql)===TRUE){ 
            header ("location: login.php");
        }else{
            echo "Lỗi {$sql}".$conn->error;
        }
        
    }else { 
        echo "Bạn cần nhập đầy đủ thông tin!";
    }

}
mysqli_close($conn);

?>