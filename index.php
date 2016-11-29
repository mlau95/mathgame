<?php session_start(); ?>
<?php include("include/header.php"); ?>
<div class="container visible-lg jumbotron" style="text-align:center">
    <h2 class="visible-lg">Math Game</h2>
</div>

<link href="style/bootstrap.min.css" rel="stylesheet" media="screen">

<div class='container'>
<div class="row">
    <div class = "col-sm-4 col-md-offset-4">
        <?php

            $rand1 = rand(0,20);
            $rand2 = rand(0,20);
            $coin = rand(0,1);
            $operator;


                if ($coin == "0") {
                    $operator = "+";
                }

                if ($coin == "1") {
                    $operator = "-";
                }

            $equation = $rand1.$operator.$rand2;

            if ($operator == "+") {
                $answer = $rand1 + $rand2;
            }
            else {
                $answer = $rand1 - $rand2;
            }

            echo $equation;

            $_SESSION["rand1"] = $rand1;
            $_SESSION["rand2"] = $rand2;
            $_SESSION["operator"] = $operator;
            $_SESSION["answer"] = $answer;
            if (!isset($_SESSION["output"])) {
                $_SESSION["tally1"] = 0;
                $_SESSION["tally2"] = 0;
            }
            
        ?>
    </div>
</div>
    
<br/>
    
<div class="row">
    <div class = "col-sm-4 col-md-offset-4">
        <form action="mathgame.php" method="post">
            <input type="text" name="userInput">
            <input type="submit" name="submit">
        </form>
    </div>
</div>
    
<div class="row">
    <div class = "col-sm-4 col-md-offset-4">
        <?php
            if (!isset($_SESSION["output"])) {
                    $_SESSION["output"] = NULL;
                }
            echo $_SESSION["output"];
        ?>
    </div>
</div>
    
<br/>

<div class="row">
    <div class = "col-sm-4 col-md-offset-4">
        <?php
            echo $_SESSION["tally1"]."/".$_SESSION["tally2"];
        ?>
    </div>
</div>
    
<br/>
    
<div class="row">
    <div class = "col-sm-4 col-md-offset-4">
            <a href="logout.php">Logout</a>
    </div>
</div>
    
<br/>
    
</div>