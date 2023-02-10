<html>
<head>
    <title>Official 753 Scouting Interface</title>
    <link rel="stylesheet" href="scoutstyle.css">
</head>
<?php
session_start();
?>
<body>
    <?php
    if($_POST["email"]=="mvhsteam753@gmail.com" and $_POST["password"]=="vernandray"){?>
    Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; 
$_SESSION["name"] = $_POST["name"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["password"] = $_POST["password"];
?>
<br>
<a href="toc.php">This is me.</a>
   <?php }
    else{
        echo "🛑Stop!!!";
        ?>
        <br>
        <?php
        echo "You don't have access to this service!";
        ?>
        <br>
        <?php
        echo "Email High Desert Droids at mvhsteam753@gmail.com if you believe this is a mistake.";
        
    }
    ?>
    <?php 
    $_SERVER= $_POST["name"];
    ?>
</body>

</html>