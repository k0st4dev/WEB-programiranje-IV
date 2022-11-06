<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<body>
    <form method="POST" action="sesija.php">
        Koliko je 25/5:<br>
        <input type="radio" name="v1" value="2">
        <label>2</label><br>
        <input type="radio" name="v1" value="5">
        <label>5</label><br>
        <input type="radio" name="v1" value="4">
        <label>4</label><br>
        <input type="submit" value="Submit">
    </form>

    <?php


    // Set session variables
    $_SESSION["odg"] = 5;

    ?>

</body>