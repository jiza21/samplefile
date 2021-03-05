<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="mycss.css">
    <style type="text/css">
        body{ font: 24px sans-serif; text-align: center; }
        img {
            width: 300px;
            border-radius: 40%;
        }
        
    </style>
</head>
<body background = "bc.jpg">
    
    <div class="page-header">
        <h1> Welcome to Animy <3</h1>
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<p>    
        <a href="logoutpage.php" class="btn btn-danger">Exit</a>
    </p>
    
   


    <div class="center">  
    <form>
	
	

            </div> 
        </form>

        </div>


</html>