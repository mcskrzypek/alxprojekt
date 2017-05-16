
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
    akcja char(1)
);

INSERT INTO pr_uprawnienia_uzytkownika (rola) VALUES ('pracownik'), ('kierownik'), ('edytor');

CREATE TABLE pr_prenumeratorzy (
    id_prenumerator serial primary key,
    imie varchar(100) NOT NULL,
    nazwisko varchar(100) NOT NULL,
    pesel CHAR(11) NOT NULL,
    id_adres_wysylki integer NOT NULL references pr_adresy,
    data_r_prenumeraty timestamp without time zone DEFAULT now() NOT NULL,
    czas_prenumeraty integer NOT NULL,
    notatki text,
    aktywny boolean DEFAULT true NOT NULL
);

CREATE TABLE pr_adresy (
    id_adres serial primary key,
    miasto varchar(250) NOT NULL,
    ulica varchar(250) NOT NULL,
    nr_lokalu varchar(10) NOT NULL,
    nr_mieszkania integer NULL,
    kod_pocztowy char(6) NOT NULL,
    poczta varchar(250) NOT NULL
);

CREATE TABLE pr_historia_prenumeratorow (
    id_historia serial primary key,
    data timestamp without time zone DEFAULT now() NOT NULL,
    id_zmieniacz integer NOT NULL references pr_prenumeratorzy,
    adr_ip varchar(15),
    id_zmieniany integer NOT NULL references pr_prenumeratorzy,
    akcja char(1)
);
