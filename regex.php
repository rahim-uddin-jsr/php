<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expiration</title>

</head>
<body>
    <h2>PHP Regular Expiration</h2>
    <?php
    $mail_address = 'rahimuddin5659@gmail.com';

    if (preg_match("/^([a-z0-9\+_\-]+)(\. [a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[ a-z]{2,6}$/ix", strtolower($mail_address))) {
    echo "$mail_address is valid email";
}
else{
    echo "$mail_address is not a valid email";

}
    ?>
</body>
</html>