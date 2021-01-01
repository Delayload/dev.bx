CREATE TABLE IF NOT EXISTS team
(
	ID int not null auto_increment,
	NAME varchar(500) not null,
	PRIMARY KEY (ID)
);

CREATE TABLE IF NOT EXISTS stage
(
	ID int not null auto_increment,
	NAME varchar(500) not null,
	PRIMARY KEY (ID)
);

CREATE TABLE match
(
	ID int not null auto_increment,
	FIRST_TEAM_ID int,
	SECOND_TEAM_ID int,
	FIRST_TEAM_SCORE int,
	SECOND_TEAM_SCORE int,
	STAGE int,
	PRIMARY KEY (ID),
	FOREIGN KEY FK_MATCH_FIRST_TEAM (FIRST_TEAM_ID) references team(ID)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	FOREIGN KEY FK_MATCH_SECOND_TEAM (SECOND_TEAM_ID) references team(ID)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT,
	FOREIGN KEY FK_MATCH_STAGE (STAGE) references stage(ID)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
);