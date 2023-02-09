<?php
 readfile('test.txt')
?>

<?php
$file = fopen('test.txt', "a+");
fwrite($file,' I am Rahim Uddin');
?>
