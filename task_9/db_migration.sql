CREATE TABLE IF NOT EXISTS store
(
    ID int not null auto_increment,
    CITY varchar(500) not null,
    PRIMARY KEY (ID)
);

CREATE TABLE book_store
(
	STORE_ID int not null,
    BOOK_ID int not null,
    PRIMARY KEY (STORE_ID, BOOK_ID),
    PRICE DECIMAL(10, 2),
    QUANTITY int unsigned not null default 0,
    FOREIGN KEY FK_BOOK_STORE_STORE (STORE_ID) references store(ID)
        ON UPDATE RESTRICT
        ON DELETE RESTRICT,
	FOREIGN KEY FK_BOOK_STORE_BOOK (BOOK_ID) references book(ID)
		ON UPDATE RESTRICT
		ON DELETE RESTRICT
);

INSERT INTO store (ID, CITY)
VALUES (1, 'Калининград'),
       (2, 'Черняховск'),
       (3, 'Советск');

INSERT INTO book_store (STORE_ID, BOOK_ID, PRICE, QUANTITY)
SELECT 1, ID, PRICE, QUANTITY FROM book;

ALTER TABLE book
    DROP COLUMN PRICE,
    DROP COLUMN QUANTITY;