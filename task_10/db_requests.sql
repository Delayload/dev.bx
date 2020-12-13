#количество книг каждого автора (наименований)
SELECT author.NAME, COUNT(author_book.BOOK_ID) AS BOOKS_COUNT
FROM author, author_book
WHERE author_book.AUTHOR_ID = author.ID
GROUP BY author.NAME;

#суммарный остаток книг каждого автора во всех магазинах
SELECT BOOK_ID, a.NAME, s.CITY,  SUM(QUANTITY)
FROM book_store
	     JOIN store s on s.ID = STORE_ID
	     JOIN author_book ab on BOOK_ID = ab.BOOK_ID
	     JOIN author a on a.ID = ab.AUTHOR_ID
GROUP BY a.NAME,s.CITY;

#средн€€ стоимость книг издательства Ђјзбукаї
SELECT b.NAME,p.NAME, AVG(PRICE)
FROM book_store
	     JOIN book b on b.ID = BOOK_ID
	     JOIN publisher p on p.ID = b.PUBLISHER_ID
WHERE PUBLISHER_ID = 3
GROUP BY b.NAME;

#средн€€ стоимость книг издательства Ђјзбукаї в каждом магазине.
SELECT s.CITY,b.NAME,p.NAME, AVG(PRICE)
FROM book_store
	     JOIN book b on b.ID = BOOK_ID
	     JOIN store s on s.ID = STORE_ID
	     JOIN publisher p on p.ID = b.PUBLISHER_ID
WHERE PUBLISHER_ID = 3
GROUP BY s.CITY, b.NAME, p.NAME;

#разница между остатком книг в  алининграде и „ерн€ховске
SELECT b.NAME,
       SUM(IF(STORE_ID=1, QUANTITY,0)) AS KALININGRAD,
       SUM(IF(STORE_ID=2, QUANTITY,0)) AS CHERNYAHOVSK,
       SUM(IF(STORE_ID=1, QUANTITY,0)) - SUM(IF(STORE_ID=2, QUANTITY,0)) AS DIFFERENCE
FROM book_store
	     JOIN book b on b.ID = book_store.BOOK_ID
GROUP BY b.NAME;