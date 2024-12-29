<?php 
    include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <h2>Welcome to FakeBook!</h2>
        username:<br>
        <input type="text" name="username"><br>
        password:<br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Register">  
    </form>
</body>
</html>
<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        
        if(empty($username) && empty($password)){
            echo "username and password are required";
        }
        elseif(empty($username)){
            echo "username is required";
        }
        elseif(empty($password)){
            echo "password is required";
        }
        else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";
            
           // mysqli_query($conn, $sql);
            echo "User registered successfully!";
        }



    }

    //mysqli_close($conn); // Uncomment this line if $conn is defined in config.php
?>