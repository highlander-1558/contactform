drop database if exists lesson16;
create database lesson16;

use lesson16;

create table contactform(
    name varchar(255) primary key,
    mail varchar(255),
    age int(11),
    comments varchar(255)
);

/*
insert into contactform values
    ("山田　太郎", "abcd@yahoo.co.jp", 25, "こんにちは"),
    ("佐藤　次郎", "a994@gmail.com", 30, "おはよう"),
    ("田中　花子", "zzz22@yahoo.co.jp", 22, "さようなら"),
    ("木村　明子", "yamada@internous.co.jp", 32, "ありがとう");
*/