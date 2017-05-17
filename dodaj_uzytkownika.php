<?php
include('db_connect.php');
include('autoryzacja.php');

//muszę zapytać bazę o listę ról, żeby móc ją użyć w dropdown
$kwerenda = "SELECT * FROM pr_uprawnienia_uzytkownika";
$role = pobierz($kwerenda);


include('templates/dodaj_uzytkownika_view.php');
