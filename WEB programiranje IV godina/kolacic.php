<?php
$cookie_name = "voce";
$cookie_value = "kajsiju";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>

<body>

    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Zdravo! Prvi put si ovde.";
    } else {
        echo "Zdravo opet<br>";
        echo "Izabrali ste " . $_COOKIE[$cookie_name];
    }
    ?>

</body>

</html>