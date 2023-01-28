<?php
require_once "helpers.php";

// przypisanie do zmienne adresu url z którego zostaną pobrane dane
$dataUrl = "https://fantasy.premierleague.com/api/bootstrap-static/";
// pobranie danych ze strony i zapisanie ich do zmiennej (na tym etapie jest to w formacie json)
$jsonData = file_get_contents($dataUrl);
// zmian formatu json na tablicę (odkodowanie)
$data = json_decode($jsonData, true);

if (isset($_POST['submit'])) {
    $teamName = $_POST['team'];
    $playerName = $_POST['name'];
    $number = $_POST['number'];

    $teams = $data['teams'];
    foreach ($teams as $team) {
        if ($team['name'] === 'Arsenal') {
//            v($team);
        }
    }
    $counter = 0;
    foreach ($players as $player) {  // zliczanie ilosci graczy z druzyny
        if ($player['team'] === 1) {
            $counter++;
        }
    }

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liga angielska</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="filters">Filtry</div>
    <form method="post">
        <div class="float-left ">Podaj zespół</div>
        <div class="float-left ml-130">Podaj nazwisko gracza</div>
        <div class="float-left ml-60">Podaj numer na koszulce</div> <br>
        <div class="clearfix"></div>
        <div class="rectangle">
            <input type="text" name="team" placeholder="Arsenal" style="border: none; width: 196px; height: 50px;
         text-align: center; background: gainsboro" autocomplete="off">
        </div>
        <div class="rectangle">
            <input type="text" name="name" placeholder="Jesus" style="border: none; width: 196px; height: 50px;
         text-align: center; background: gainsboro" autocomplete="off">
        </div>
        <div class="rectangle">
            <input type="number" name="number" placeholder="9" style="border: none; width: 196px; height: 50px;
         text-align: center; background: gainsboro; -moz-appearance: textfield;" autocomplete="off">
        </div>
        <div class="clearfix"></div>
        <button type="submit" name="submit" class="rectangle2">Pokaż</button>
        <button type="submit" name="submit" class="rectangle2">Pokaż</button>
        <button type="submit" name="submit" class="rectangle2">Pokaż</button>
    </form>
    <div class="clearfix"></div> <br> <br>
    <div class="filters">Wyniki</div>
    <div class="stripe"></div> <br> <br>
    <div class="filters">
        <?php
        if (isset($_POST['submit'])) {
            echo $teamName . ' - skład';
        }
        ?>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        echo '<div class="filters">' . 'Wszystkich graczy:' . ' ' . $counter . '</div>';
    }
    ?>
    <div class="filters">Bramkarze:</div>
    <?php
    if (isset($_POST['submit'])) {
        vvv($players, 1, 1);
    }
    ?>
    <div class="filters">Obrońcy:</div>
    <?php
    if (isset($_POST['submit'])) {
        vvv($players, 1, 2);
    }
    ?>
    <div class="filters">Pomocnicy:</div>
    <?php
    if (isset($_POST['submit'])) {
        vvv($players, 1, 3);
    }
    ?>
    <div class="filters">Napastnicy:</div>
    <?php
    if (isset($_POST['submit'])) {
        vvv($players, 1, 4);
    }
    ?>




</div>
</body>
</html>
