<?php session_start();

@include 'config.php';

if(!isset($_SESSION['admin_name'])){
    header('location:login_form.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../paw-solid.svg">
    <title>admin page</title>
    <link rel="stylesheet" href="../css/sPage.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h3>hi, <span>admin</span></h3>
            <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
            <p>this is an admin page</p>
            <!--<a href="loginForm.php" class="btn">login</a>-->
            <a href="dogAdminPage.php" class="btn">Dog Admin</a>
            <a href="catAdminPage.php" class="btn">Cat Admin</a>
            <a href="fishAdminPage.php" class="btn">Fish Admin</a>
            <a href="birdAdminPage.php" class="btn">Bird Admin</a>
            <a href="smallPetAdminPage.php" class="btn">Small Admin</a>
            <a href="reptileAdminPage.php" class="btn">Reptile Admin</a>
            <a href="horseAdminPage.php" class="btn">Horse Admin</a>
            <a href="parentShopAdminPage.php" class="btn">Parent Admin</a>
            <a href="logout.php" class="btn">logout</a>
        </div>
    </div>
</body>
</html>