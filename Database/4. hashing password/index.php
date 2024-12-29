<?php 
    // hashing = transforming sensitive data (password, etc)
    //           into letters, numbers, and/or symbols
    //            via a mathematical process. (similar to encryption)
    //            hides the original data from 3rd parties.

    $password = "pizza123";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    if(password_verify("pizza123", $hash)){
        echo "You are logged in!";
    }
    else{
        echo "Inccorect password!";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
