<?php
CREATE TABLE friends (
id INTEGER,
name TEXT,
birthday DATE
);

INSERT INTO friends (id, name, birthday) VALUES (1, 'Jane Doe', '1990-05-30');


SELECT * FROM friends;

INSERT INTO friends (id, name, birthday) VALUES (2, 'Alina', '1989-09-10');

INSERT INTO friends (id, name, birthday) VALUES (3, 'Vanessa', '1982-07-03');

INSERT INTO friends (id, name, birthday) VALUES (4, 'Brandi', '1988-07-31');

SELECT * FROM friends;


UPDATE friends
SET name = 'Jane Smith'
WHERE id = 1;


ALTER TABLE friends
ADD COLUMN email TEXT;

update friends
set email = 'jane@codecademy.com'
WHERE id = 1;

SELECT * FROM friends;

update friends
set email = 'alina@codecademy.com'
WHERE id = 2;

update friends
set email = 'vanessa@codecademy.com'
WHERE id = 3;

update friends
set email = 'brandi@codecademy.com'
WHERE id = 4;

SELECT * FROM friends;

DELETE FROM friends
WHERE id = 1;

SELECT *
FROM friends;

?>
