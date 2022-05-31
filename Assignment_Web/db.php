<?php

$conn=mysqli_connect($SERVERNAME,$USERNAME,$PASSWORD, $DATABASE);
if(!$conn){
    die('Could not Connect MySql Server:');
}
//
//mysqli_query($conn, "create database if not exists $dbname");
//mysqli_query($conn, "use $dbname");
//mysqli_query($conn, "create table if not exists users( username varchar(40) not null, password varchar(40) not null, role enum('admin','mod','user') null, primary key (username), index (username) )");
//mysqli_query($conn, "insert ignore into users (username,password,role) values ('long','1111','admin'), ('duc','2222','mod'), ('tung','3333','mod'), ('toan','4444','user')");
//mysqli_query($conn, "create table if not exists tests ( id int(10) not null, name varchar(100) not null, category varchar(30) not null, difficulty enum('beginner','intermediate','expert') not null, description text null, users_username varchar(40) not null, primary key (id), index (id), constraint FK_Username foreign key (users_username) references users(username) )");
//mysqli_query($conn, "insert ignore into tests (id,name,category,difficulty,description,users_username) values (1,'a','animal','beginner','too easy','tung'), (2,'b','flower','expert','so hard','long'), (3,'c','magic','beginner','normal','duc'), (4,'d','war','intermediate','inter','long');")
//
