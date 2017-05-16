CREATE TABLE uzytkownicy (
    id_uzytkownik serial primary key,
    id_uprawnienia integer NOT NULL references uprawnienia_uzytkownika,
    login varchar(100) NOT NULL,
    imie varchar(100) NOT NULL,
    nazwisko varchar(100) NOT NULL,
    haslo varchar(250) NOT NULL,
    notatki text,
    aktywny boolean DEFAULT true NOT NULL
);
        
CREATE TABLE uprawnienia_uzytkownika (
    id_uprawnienia serial primary key,
    rola varchar(15) NOT NULL
);
    