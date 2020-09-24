<?php
    session_start();
    $nom_cookie = "";
    $valeur_cookie = "";
    $expiration_temps_secondes = 3600;
    $path = "/";
    setCookie($nom_cookie, $valeur_cookie, time() + $expiration_temps_secondes, $path);
?>

<!DOCTYPE html>
<html lang="en">
<script>
    function setCookie(nom_cookie, valeur_cookie, expiration_temps_secondes){
        var date_temp = new Date;
        date_temp.setTime(date_temp.getTime() + expiration_temps_secondes);
        var date_expiration = "expires=" + date_temp.toUTCString();
        document.cookie = nom_cookie + "=" + valeur_cookie + ";" date_expiration + ";path=/";
    }
</script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>