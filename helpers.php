<?php
$dataUrl = "https://fantasy.premierleague.com/api/bootstrap-static/";
$jsonData = file_get_contents($dataUrl);
$data = json_decode($jsonData, true);
$players = $data['elements'];

function v($text)
{
    echo '<pre>' . print_r($text, true) . '</pre>';
}

function rrr ($db,$suma,$id) {
    if ($suma != 0) {
        if (is_numeric($suma) && $suma > 1000) {
            $name = 'ok. ' . $suma / 1000 . ' l.';
        } else {
            $query = "SELECT * FROM gramatura WHERE id = $id";
            $result = $db->query($query)->fetch_assoc();
            $name = 'ok. ' . $suma . ' ' . $result['name'];
        }
    } else {
        $name = 'Nie było pite';
    }
    return $name;
}
function vvv ($players, $team, $number) {
    foreach ($players as $player) {
        if ($player['team'] === $team and $player['element_type'] === $number) {
            v($player['first_name'] . ' ' . $player['second_name']);
        }
    }
}