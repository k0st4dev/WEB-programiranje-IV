<?php
$ime = $email = $greskaIme = $greskaEmail = $greskafilm = $greskatermin = $greskasediste = $greskavreme = "";
$ime = $_POST["ime"];
$mail = $_POST["mail"];
$film = $_POST["izbor"];
$termin = $_POST["izbor1"];
$brsedista = $_POST["sediste"];
$br = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["ime"])) {
        $greskaIme = "Morate uneti ime";
    } else {
        $ime = test_input($_POST["ime"]);
        if (!preg_match("/^[A-Za-z\s]*$/", $ime))
            $greskaIme = "Ime nije u dobrom formatu";
        else {
            $greskaIme = "";
            $br++;
        }
    }
}
if (empty($_POST["izbor"])) {
    $greskafilm = "Morate izabrati film";
}
if (empty($_POST["izbor1"])) {
    $greskavreme = "Morate izabrati vreme";
}
if (empty($_POST["sediste"])) {
    $greskasediste = "Morate izabrati sediste";
}
$email = test_input($_POST["mail"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    $greskaEmail = "E-mail nije u dobrom formatu";
else {
    $greskaEmail = "";
    $br++;
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$txt = "Izvrsena je rezervacija na ime " . $ime . ", za film " . $film . " u terminu " . $termin . ". Broj sedista je: " . $brsedista;




if (isset($_POST["submit"])) {
    $to = "veljko.kosta12@gmail.com";
    $from = "veljko.kosta12@gmail.com";
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $txt;

    $headers = "From: " . $from;
    $headers2 = "To: " . $to;
    mail($to, $subject, $message, $headers);
    echo "Mejl je poslat. Hvala Vam poruka ce stici uskoro.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mejl slanje</title>
</head>

<body>

    <Form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        Ime:<input type="text" name="ime" value="<?php echo $ime; ?>"><span class="error">* <?php echo $greskaIme; ?></span>
        <br><br>
        E-mail:
        <input type="text" name="mail" value="<?php echo $email; ?>"><?php echo $greskaEmail; ?>
        <br><br>
        Film:
        <select name="izbor" id="izbor" value=" <?php echo $greskafilm; ?>"><span class="error">* <?php echo $greskafilm; ?></span>>
            <option value="#"></option>
            <option value="minions">Minions</option>
            <option value="mrtavladan">Mrtav ladan</option>
            <option value="minions2">Minions 2</option>
        </select>
        <br><br>
        Termin:
        <select name="izbor1" id="izbor1" value="<?php echo $greskavreme; ?>"><span class="error">* <?php echo $greskavreme ?></span>>>
            <option value="#"></option>
            <option value="16h">16h</option>
            <option value="18h">18h</option>
            <option value="20h">20h</option>
        </select>
        <br><br>
        Broj sedista: <input type="text" name="sediste" value=""><span class="error">* <?php echo $greskasediste; ?></span>
        <br><br>

        <input type="submit" name="submit" value="Rezervisi">
    </Form>

</body>

</html>