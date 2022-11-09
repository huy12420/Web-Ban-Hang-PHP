<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="login-style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Đăng Ký</title>
</head>
<body style="border: none; background-color: lightgray; margin-left: 40%; padding: 30px;">
<div class="">     
    <div class="col-md-6" > 
        <b class="text-center text-uppercase h3" > Đăng Ký Thành Viên </b> <br>  
        <form method="POST" class="col-md-6" action="reg.php"  > 
            <label for="username"  > Tài Khoản: </label> 
            <input type="text" placeholder="username" name="username"  class="form-control" require> <br> 
            <label for="password">  Mật Khẩu: </label> 
            <input type="password" name="password" placeholder="password"  class="form-control" require> <br> 
            <label for="fullname" > Họ Và Tên: </label> 
            <input type="text" name="fullname" placeholder="Họ và tên"  class="form-control" require> <br> 
            <label for="email"> Email: </label> 
            <input type="email" name="email" placeholder="email" class="form-control" require > <br> 
            <label for="birthday" > Ngày Sinh: </label> <br>
            <input type="date" name="birthday" placeholder="Ngày sinh"  class="form-control" require> <br>
            <input type="submit" value="Đăng Ký" name="btn-reg"class="btn-primary btn-block" > 
        </form>
       

         


    </div> 
</div>
</body>
</html>