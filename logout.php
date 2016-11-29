<?php session_start(); ?>
<?php include("include/header.php"); ?>

<?php
    session_start();
    session_destroy();
    header('Location: login.php');
    exit;
?>
