<?php session_start(); ?>
<?php include("include/header.php"); ?>
<div class="container visible-lg jumbotron" style="text-align:center">
    <h2 class="visible-lg">Math Game</h2>
</div>

<link href="style/bootstrap.min.css" rel="stylesheet" media="screen">

<?php
$_SESSION["incorrect"] = "Please input the email and password.";

if (isset($_POST['submit']) && !is_null($_POST['submit'])) {
    
    if ($_POST["email"] == "a@a.a" && $_POST["password"] == "aaa") {
        header('Location: index.php');
    } 
    else if ($_POST["email"] != "a@a.a" && $_POST["password"] != "aaa") {
        $_SESSION["incorrect"] = "Username & password incorrect.";
        header('Location: login.php');
        die();
    }
    else if ($_POST["email"] != "a@a.a") {
        $_SESSION["incorrect"] = "Username incorrect.";
        header('Location: login.php');
        die();
    }
    else if ($_POST["password"] != "aaa") {
        $_SESSION["incorrect"] = "Password incorrect.";
        header('Location: login.php');
        die();
    }
}

?>
