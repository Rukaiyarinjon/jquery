<?php session_start();

$db = new mysqli('localhost','root','','jquery_evidance');

if(!isset($_SESSION['s_email'])){
    header("location:login.php");
}

if(isset($_GET['logout'])){
    unset($_SESSION['s_email']);
    session_destroy($_SESSION['s_email']);
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="js/bootsrap.min.css">
    <title>Hello,world</title>

</head>
<body>

<h2 class="display-2">Login successfull</h2>

<a href="?logout=1" class="">Logout</a>
   

    
</body>
</html>