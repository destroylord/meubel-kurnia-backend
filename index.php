<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/core/config.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mebel Kurnia</title>
    
    <!-- Bootstrap -->
    <link href="public/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- toastrjs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <style>
        .btn-nyaman {
            background-color: #464F9E;
            border-color: #464F9E;
            color: #fff;
        }
        .btn-nyaman:hover {
            color: #fff;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg 12">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mx-auto" style="margin-top: 200px;">
                        <h2 class="text-center mb-4">Login</h2>
                    <form action="<?=url()?>models/auth/login.php" method="POST" autcomplete="off">
                                <div class="form-group">
                                    <label>Nama Pengguna</label>
                                    <input type="text" name="username" id="" class="form-control">
                                    <!-- <span class="text-danger"><?= $errors['username']; ?></span> -->
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" id="" class="form-control">
                                    <!-- <span class="text-danger"><?= $errors['password']; ?></span> -->
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-nyaman w-100 mt-4">Login</button>
                                </div>
                            </div>
                     </form>
                    <img src="public/assets/img/bg-login.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="public/assets/js/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="public/assets/js/bootstrap.bundle.min.js"></script>

    <!-- tostr javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        <?php if(isset($_SESSION['msg'])): ?>
            toastr.info("<?=flash_message('msg')?>");
        <?php endif ?>
    </script>
</body>
</html>