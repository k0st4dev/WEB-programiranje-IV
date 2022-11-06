<?php
session_start();
?>
<!DOCTYPE html>
<html>

<body>

    <?php

    $odgovor = test_input($_POST["v1"]);


    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if ($odgovor == $_SESSION["odg"])
        echo "Tacno";
    else
        echo "Netacno, odgovor je " . $_SESSION["odg"];
    ?>

</body>

</html>