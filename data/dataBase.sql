create TABLE users(
	id int PRIMARY key AUTO_INCREMENT,
    Firstname varchar(50) NOT NULL,
    Lastename varchar(50) NOT NULL,
    role int not null,
    email varchar(100) not null,
    pasword varchar(100) not null,
    FOREIGN key (role) REFERENCES Role(id)
);

create TABLE Role(
	id int PRIMARY key AUTO_INCREMENT,
    type varchar(50) NOT NULL
);

create TABLE Apprenant(
	booksReserve int not null,
    librery int not null
);

create TABLE Gerant(
    librery int not null
);

create TABLE Reservation (
    id int PRIMARY KEY AUTO_INCREMENT
);