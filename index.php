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
    foreach ($teams as $key => $team) {
//        if ($team['name'] === 'Arsenal') {
//            echo $key;
//        }
    }
    $teams = array("Arsenal" => 1, "Aston Villa" => 2, "Bournemouth" => 3, "Brentford" => 4, "Brighton" => 5,
    "Chelsea" => 6, "Crystal Palace" => 7, "Everton" => 8, "Fulham" => 9, "Leicester" => 10, "Leeds" => 11,
    "Liverpool" => 12, "Manchester City" => 13, "Manchester United" => 14, "Newcastle" => 15,
        "Nottingham Forest " => 16, "Southampton" => 17, "Spurs" => 18, "West Ham" => 19, "Wolves" => 20);
    if (array_key_exists($teamName, $teams)) {
        $teamId = $teams[$teamName];
        v($teamId);
    } else {
        $teamId = "Drużyna nie została znaleziona";
    }
    $counter = 0;
    $players = $data['elements'];
    foreach ($players as $player) {  // zliczanie ilosci graczy z druzyny
        if ($player['team'] === $teamId) {
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
    <?php
    echo '<div class="filters">' . 'Bramkarze:' . '</div>';
    if (isset($_POST['team'])) {
        vvv($players, $teamId, 1);
    }
    ?>
    <div class="filters">Obrońcy:</div>
    <?php
    if (isset($_POST['submit'])) {
        vvv($players, $teamId, 2);
    }
    ?>
    <div class="filters">Pomocnicy:</div>
    <?php
    if (isset($_POST['submit'])) {
        vvv($players, $teamId, 3);
    }
    ?>
    <div class="filters">Napastnicy:</div>
    <?php
    if (isset($_POST['submit'])) {
        vvv($players, $teamId, 4);
    }
    ?>




</div>
</body>
</html>
