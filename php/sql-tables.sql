
CREATE TABLE clientsignup (
	ID int(10) Not Null AUTO_INCREMENT,
 UserName varchar(255),
 Email varchar(255) UNIQUE,
 Password varchar(255),
 Phone varchar(255),
 Date timestamp(3),
  PRIMARY KEY (ID)


);