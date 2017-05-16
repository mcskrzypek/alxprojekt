
CREATE TABLE pr_uzytkownicy (
    id_uzytkownik serial primary key,
    id_uprawnienia integer NOT NULL references pr_uprawnienia_uzytkownika,
    login varchar(100) NOT NULL,
    imie varchar(100) NOT NULL,
    nazwisko varchar(100) NOT NULL,
    haslo varchar(250) NOT NULL,
    notatki text,
    aktywny boolean DEFAULT true NOT NULL
);

        
CREATE TABLE pr_uprawnienia_uzytkownika (
    id_uprawnienia serial primary key,
    rola varchar(15) NOT NULL
);
    

CREATE TABLE pr_historia_uzytkownikow (
    id_historia serial primary key,
    data timestamp without time zone DEFAULT now() NOT NULL,
    id_zmieniacz integer NOT NULL references pr_uzytkownicy,
    adr_ip varchar(15),
    id_zmieniany integer NOT NULL references pr_uzytkownicy,
    akcja int(1),
    tresc text NOT NULL,
    wpis_id integer NOT NULL references wpisy
);

