<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mebel Kurnia</title>
    
    <!-- Bootstrap -->
    <link href="public/assets/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    

    <h1>Login</h1>
    <form action="resources/auth/process_login.php" method="POST">
        <label for="">Username</label>
        <input type="text" class="form-control" name="username">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password">
        <input type="submit" value="Login" class="btn btn-primary">
    </form>


    <!-- jQuery -->
    <script src="public/assets/js/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="public/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>