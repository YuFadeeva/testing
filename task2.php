STRUCTURE

books
 - book_id
 - book_title
 
authors
 - author_id
 - author_name
 
items
 - item_id
 - book_id
 - author_id

SELECT
  authors.author_name
FROM
  authors
  INNER JOIN books USING(book_id)
  INNER JOIN items USING(author_id)
HAVING
  COUNT(items.book_id) <= 6

