<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $brend=test_input($_POST['cars']);
        $_SESSION['brend']=$brend;
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>
<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="cars">Izaberi proizvod:</label>
    <select multiple name="cars"id="cars">
        <option value="volvo">Volvo</option>
        <option value="saab">saab</option>
        <option value="opel">opel</option>
        <option value="audi">audi</option>
    </select>
    <button type="submit">Potvrdi</button>
</form>
<a href="siu.php">Izabrali ste</a>
</body>
</html>