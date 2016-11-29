<?php session_start(); ?>
<?php include("include/header.php"); ?>
<div class="container visible-lg jumbotron" style="text-align:center">
    <h2 class="visible-lg">Math Game</h2>
</div>

<link href="style/bootstrap.min.css" rel="stylesheet" media="screen">
    
<?php
    $_SESSION["output"] = "Please input an answer.";
    if (isset($_POST['submit'])) {
        
        if ($_POST['userInput'] ==  $_SESSION["answer"]) {
            $_SESSION["output"] = "That is correct!";
            $_SESSION["tally1"]++;
            header("Location: index.php");
            die();
        }
        else {
            $_SESSION["output"] = "That is wrong! The correct answer is ".$_SESSION["answer"];
            $_SESSION["tally2"]++;
            header("Location: index.php");
            die();
        }
    }
    else {
        $_SESSION["output"] = "Please input an answer.";
    }
?>


<?php include("include/footer.php"); ?>