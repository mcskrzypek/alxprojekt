Tabela:
uzytkownicy
    id_uzytkownik primary key
    id_uprawnienia klucz obcy (uprawnienia_uzytkownika)
    login
    imie
    nazwisko
    haslo
    notatki text
    aktywny (bool)
    
    
Tabela:
historia_uzytkownikow
    id_historia primary key
    id_zmieniacz
    id_zmieniany
    akcja
    data timestamp default now()
    adr_ip
    
    
Tabela:
uprawnienia_uzytkownika
    id_uprawnienia primary key
    rola    (np pracownik, kierownik, )