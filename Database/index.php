
<?php 

    // cookie = Information aboutu a user stored i na user's web-browser
    //          targeted advertisement, browsing preferencem and 
    //          other non-sestitive data

    setcookie( "fav_food", "pizza", time() - 0, "/");
    setcookie( "fav_drinks", "coffee", time() + (86400 * 3), "/");
    setcookie( "fav_dessert", "ice cream", time() + (86400 * 4), "/");

    /*
    foreach($_COOKIE as $key => $value){
        echo "{$key} = {$value} <br>";
    }
    */

    if(isset($_COOKIE["fav_food"])){
        echo "BUY SOME {$_COOKIE["fav_food"]} !!!";
    } else {
        echo "i don't know your favorite food";

    }


?>