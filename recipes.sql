create database Recipe;
use Recipe;

create table User(
	Username char(20),
	Password char(20),
	Email char(20),
	primary key(Username,Email)
);

insert into User values('test','test','test@test.com');

create table Favorite(
	Username char(20),
	Favorite char(255)
);
