<?php session_start(); ?>
<?php include("include/header.php"); ?>
<div class="container visible-lg jumbotron" style="text-align:center">
    <h2 class="visible-lg">Please Login to Enjoy our Math Game</h2>
</div>

<link href="style/bootstrap.min.css" rel="stylesheet" media="screen">

<div class="row">
    <div class = "col-sm-4 col-md-offset-4">
        <?php
            if (!isset($_SESSION["incorrect"])) {
                $_SESSION["incorrect"] = NULL;
            }
            echo $_SESSION["incorrect"];
        ?>
    </div>
</div>

<form action="validation.php" method="post">
    <div class="row">
        <div class = "col-sm-4 col-md-offset-4">
            <label for="inputdefault">Email:</label>
            <input class="form-control" type="text" name="email">
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-sm-4 col-md-offset-4">
            <label for="inputdefault">Password:</label>
            <input class="form-control" type="text" name="password">
        </div>
    </div>
    <br/>
    <div class="row">
        <div class = "col-sm-4 col-md-offset-4">
            <input class="btn btn-primary" type="submit" name="submit">
        </div>
    </div>
</form>

