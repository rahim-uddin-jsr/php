<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    $roll=127219;
    $color="red";  
echo "My roll is $roll " . $roll . "<br>";  

    $num=0;
while ($num <= 1) {
    echo $num .'</br>';
    $num++;
}

$numbers=[1,5,6,20,5,65];
 for ($i=0; $i < count($numbers); $i++) {
     echo $numbers[$i] .'<br>';
 }
    date_default_timezone_set('asia/barnaul');
 $t= date('d/m/y h:i:s A');
echo 'date = ',$t;

//create function 

function add($a=0,$b=0){
    return ($a+$b);
}
    echo '<br>';

    ?>
    <h2><?php   echo add(1250, 50);?></h2>
</body>
</html>