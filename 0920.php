<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>0920</title>
</head>
<body>
 <form action="myPHP.php" id="form1" name="form1">
        <input type="submit" name="submit" id="submit" value="送出">
</body>
</html>

<?php
    session_start();
    if(!isset($_SESSION['xyz']))
        $_SESSION['xyz']=array();


        $num=array();
        while(count($num)<3){
            $num=random(0,9);
            if(!array($num, $num)){
                $num['value'] = $num;
            } 
        }

    $_SESSION['xyz'][] = $_SESSION['count'];

    foreach($_SESSION['xyz'] as $value){
        echo $value;
    }
       

    $abs=abs($num[b]-$num[a]);
    $absA=abs($num[c]-$num[b]);
    if($abs==$absA,$_SESSION['count']>=9){
        echo"試了十次或以找到數字了";
    }

    