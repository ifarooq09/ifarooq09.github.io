<?php
session_start();

if(!isset($_SESSION['user_id']) && !isset($_SESSION['user_name']))
{ ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" initial-scale="1.0">
        <title> Login Form for MAIL Cisco Directory</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body style="background: url('img/background_img.jpg') no-repeat; background-size: 100%;">
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh">
    <form class="p-5 rounded shadow text-white" action="auth.php" method="post" style="width: 30rem; background-color: #86a34b;">
        <div class="text-center">
        <img src="img/ministry_logo.png" class="img-fluid center" alt="...">
        </div>
        <?php if (isset($_GET['error'])) {?>
        <div class="alert alert-danger" role="alert">
        <?=$_GET['error']; ?>
        </div>
        <?php } ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input class="form-control" type="text" name="username" placeholder="" aria-label="default input example">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary bg-light text-dark">LOGIN</button>
    </form>
    </div>
</body>
</html>
<?php
} else {
    header("Location: admin_profile.php");
}
?>