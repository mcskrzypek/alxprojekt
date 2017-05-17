<?php

include "db_connect.php";
include "autoryzacja.php";

$czas_prenumeraty = array(
    '1' => 'miesiąc',
    '2' => 'kwartał',
    '3' => 'pół roku'
);

include "templates/dodaj_prenumeratora_view.php";