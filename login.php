<?php //Khai báo sử dụng session
session_start();
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
require 'connect.php';
//Xử lý đăng nhập
if (isset($_POST['dangnhap']) ) 
{
$username = $_POST['username']; 
$password = $_POST['password']; 
$sql = "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'";

$rs = mysqli_query($conn, $sql); 
if(mysqli_num_rows($rs)>0 ){ 
    $_SESSION['username'] = $username;
    header ("location: index.php"); 

}else { 
    echo "that bai {sql}".$conn->error; 
}


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="login-style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Đăng Nhập</title>
</head>
<body style="border: none; background-color: lightgray; margin-left: 40%; padding: 30px;">
<div class="">     
    <div class="col-md-6" > 
        <b class="text-center text-uppercase h3"  > Đăng Nhập </b> <br>  
        <form method="POST" class="col-md-6" action=""  > 
            <label for="username"  > Tài Khoản: </label> 
            <input type="text" placeholder="username" name="username"  class="form-control" require> <br> 
            <label for="password">  Mật Khẩu: </label> 
            <input type="password" name="password" placeholder="password"  class="form-control" require> <br> 
            <input type="submit" value="Đăng Nhập" name="dangnhap" class="btn-primary btn-block" > <br>
           <a href="register.php" >  <input type="button" value="Đăng Ký" name="btn-reg" class="btn-primary btn-block" > </a>
        </form>
       

         


    </div> 
</div>
</body>
</html>