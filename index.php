<?php
require_once "helpers.php";

// przypisanie do zmienne adresu url z którego zostaną pobrane dane
//$dataUrl = "https://fantasy.premierleague.com/api/bootstrap-static/";
// pobranie danych ze strony i zapisanie ich do zmiennej (na tym etapie jest to w formacie json)
//$jsonData = file_get_contents($dataUrl);
// zmian formatu json na tablicę (odkodowanie)
//$data = json_decode($jsonData, true);
//v($data);

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
    <div class="float-left ">Podaj zespół</div>
    <div class="float-left ml-130">Podaj nazwisko gracza</div>
    <div class="float-left ml-60">Podaj nazwisko gracza</div> <br>
    <div class="clearfix"></div>
    <div class="rectangle">
        <div class="writing">Liverpool</div>
        <div class="clearfix"></div>
    </div>
    <div class="rectangle">
        <div class="writing"></div>
    </div>
    <div class="rectangle">
        <div class="writing"></div>
    </div>
    <div class="clearfix"></div>
    <div class="rectangle2">pokaż</div>
    <div class="rectangle2">pokaż</div>
    <div class="rectangle2">pokaż</div>
    <div class="clearfix"></div> <br> <br>
    <div class="filters">Wyniki</div>
    <div class="stripe"></div> <br> <br>
    <div class="filters">Liverpool - skład</div> <br>
    <div class="filters">Bramkarze:</div> <br>
    - Alison Beckere<br>
    - Alison Beckere<br>
    - Alison Beckere<br> <br> <br>
    <div class="filters">Obrońcy:</div> <br>
    - Alison Beckere<br>
    - Alison Beckere<br>
    - Alison Beckere<br>

</div>
</body>
</html>
