<?php
$myName = 'Rahim Uddin';
$myAge = 22;
function welcome(){
    // $user=$GLOBALS['myName'];
    // $userAge = $GLOBALS['myAge'];
    global $myName;
    global $myAge;
    echo "<h2>Welcome $myName. Your age is $myAge</h2>";
}
;

welcome();
?>