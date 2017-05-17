<?php

function pobierz($sql) {
	$zapytanie = pg_query($sql);
	$wynik = pg_fetch_all($zapytanie);

	return $wynik;
}

function pobierz_jeden($sql) {
	$wynik = pobierz($sql);
	if(count($wynik) > 0) {
		return $wynik[0];
	}	else {
		return false;
	}
}
