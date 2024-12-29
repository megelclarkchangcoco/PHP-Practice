<?php 

    include("config.php");

    $username = "Sydney";
    $password = "123";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

    // try {
    //     mysqli_query($conn, $sql);
    //     echo "Data inserted successfully!";
    // } catch (mysqli_sql_exception $e) {
    //     echo "Failed to insert data: " . $e->getMessage();
    // }

    // mysqli_close($conn);
?>