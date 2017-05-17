<?php
/* $lead - treść z bazy $cut - liczba znaków po których
 * uciąć tekst.
 */
function make_lead($lead, $cut = 100) {    
    $lead = substr($lead, 0, $cut); // zmienna przechowuje liczbę zadanych znaków począwszy od zerowego w stringu lead
    $lead = ltrim($lead); // ucinam spacje po lewej stronie stringa
    
    // np.:"   Ala ma kota. " zwróci "Ala ma kota."
    if (strrpos(rtrim($lead) , ".") == (strlen($lead)-1) ) { // jeżeli ostatni znak po odcięciu spacji po prawej stronie jest kropką to nic nie robię zwracam cały string
        return $lead;
    }
    
    // np.: "Ala ma ko" zwróci "Ala ma"
    // np.: "Ala ma kota. t" zwróci "Ala ma kota."
    if (strrpos($lead , " ") > 0 ) { // szukam ostatniej spacji w stringu - jeżeli pozycja większa od zera to
        return rtrim( substr( $lead , 0, strrpos ($lead , " ")) ); // zwracam substringa bez prawej spacji ze stringa począwszy od pozycji 0 do pozycji którą zwraca wyszukanie "ostatniej spacji po prawej"
    }
    
    return $lead; // jeżeli powyższe nie zachodzą to zwracam stringa np.: w przypadku "ALamakota" zwracam "AlaMaKota" brak spacji i kropki
       
}

function pobierz($sql) {
	
	$r = pg_query($sql);
	$wynik = pg_fetch_all($r);
	
	return $wynik;
	
}

function pobierz_jeden($sql) {
	
	$wynik = pobierz($sql);
	
	if ( count($wynik)>0 ) {
		return $wynik[0];
	} else {
		return false;
	}
	
}
