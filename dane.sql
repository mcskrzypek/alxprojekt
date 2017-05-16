Tabela:
Uzytkownicy
    id_uzytkownik primary key
    id_uprawnienia klucz obcy (uprawnienia_uzytkownika)
    nazwa_uzytkownika
    haslo
    
    

Tabela:
uprawnienia_uzytkownika
    id_uprawnienia primary key
    rola    (np pracownik, kierownik, )