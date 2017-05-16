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

    CREATE TABLE historia_uzytkownikow (
        id_historia serial primary key,
        data timestamp without time zone DEFAULT now() NOT NULL,
        id_zmieniacz integer NOT NULL references uzytkownicy,
        adr_ip varchar(15),
        id_zmieniany integer NOT NULL references uzytkownicy,
        akcja int(1),
        tresc text NOT NULL,
        wpis_id integer NOT NULL references wpisy
    );



Tabela:
historia_uzytkownikow
    akcja
    adr_ip


Tabela:
uprawnienia_uzytkownika
    id_uprawnienia primary key
    rola    (np pracownik, kierownik, )
