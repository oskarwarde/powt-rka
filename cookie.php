<?php
if (isset($_COOKIE['nazwa'])) {
    $licznik = $_COOKIE['nazwa'] + 1;
}else {
    $licznik = 1;
}
 setcookie('nazwa', $licznik, time() + 60 * 60 * 60);
 echo $licznik; 

 $file = fopen("licznik.txt", "w");
 fwrite($file, $licznik);
 fclose($file);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- za pomoca mechanizmu ciasteczek stworzyc licznik odwiedzin 
     $licznik, licznik++
    jaka tworzyla ciasteczka? jak cos zapisac to do ciasteczek ? isset do $_cookie i trzeba to uwzglednic-->
     <!-- <form method="post">
        <label>Wypisz imie:</label>
        <input type="text"name="imie"> -->
    </form>
    <?php
    // if (isset($_POST['imie'])) {
    //     $imie = $_POST['imie'];

    //     setcookie('name', $imie, time() + 60 * 60 * 24);

    //     header('Location: ' . $_SERVER['PHP_SELF']);
    //     exit;
    // }
    ?>
</body>
</html>
