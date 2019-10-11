<?php 
include ('cookie.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    if($visit == 1){
        echo 'first time';
    }else{
        echo "вы были $visit <br> последнее посещение $lastdate_str";
    }
    ?>
</body>
</html>
