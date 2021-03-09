<?php

session_start();

?>

<html>
    <body>
        <?php
            $_SESSION["favcolor"]="green";
            $_SESSION["favanimal"]="Elephant";

            echo '<pre>';
            var_dump($_SESSION);
            echo '</pre>';

            echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
            echo "Favorite animal is " . $_SESSION["favanimal"] . ".";  

            // remove all session variables
            session_unset();
            echo '<pre>';
            var_dump($_SESSION);
            echo '</pre>';

            // destroys all the session variables
            session_destroy();
            echo '<pre>';
            var_dump($_SESSION);
            echo '</pre>';


        ?>
    </body>
</html>