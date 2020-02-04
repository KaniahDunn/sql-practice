<?php
//SQL, Structured Query Language, is a programming language designed to manage data stored in relational databases. SQL operates through simple, declarative statements. This keeps data accurate and secure, and helps maintain the integrity of databases, regardless of size.

//The SQL language is widely used today across web frameworks and database applications. Knowing SQL gives you the freedom to explore your data, and the power to make better decisions. By learning SQL, you will also learn concepts that apply to nearly every data storage system.

//SQL statment that uses SELEC and FROM as clauses to gather some information from the celebs table.
SELECT * FROM celebs;


// SQL statement that is creating a table in the database that is creating the columns id, name and age with the datatype values of integer, text, and integer respectively.
CREATE TABLE celebs (
id INTEGER,
name TEXT,
age INTEGER
);

// inserting new data in a table
INSERT INTO celebs (id, name, age) VALUES (1, 'Justin Bieber', 22 );

INSERT INTO celebs (id, name, age) VALUES (2, ' Beyonce Knowles', 33);

INSERT INTO celebs (id, name, age) VALUES (3, 'Jeremy Lin', 26);

INSERT INTO celebs (id, name, age) VALUES (4, '  Taylor Swift', 26);

//alerting a table and adding in new data content
ALTER TABLE celebs ADD COLUMN twitter_handle TEXT;

SELECT * FROM celebs;

//updating data content with new information

UPDATE celebs
SET twitter_handle = '@taylorswift13'
WHERE id = 4;

SELECT * FROM celebs;


//deleting rows and data from table where content matches descriped clause - below we are deleting rows where the content in the column 'twitter_handle' is null/empty

DELETE FROM celebs WHERE twitter_handle IS NULL;

SELECT * FROM celebs;


//Constraints that add information about how a column can be used are invoked after specifying the data type for a column. They can be used to tell the database to reject inserted data that does not adhere to a certain restriction. The statement below sets constraints on the celebs table.

CREATE TABLE awards (
  id INTEGER PRIMARY KEY,
  recipient TEXT NOT NULL,
  award_name TEXT DEFAULT 'Grammy'
);


// Select all vs Select Columns

SELECT * FROM movies;
SELECT name, genre, year FROM movies;


// AS keyword - allows user to query the database and query the columns to rename them as something that is more userfriendly

SELECT name AS 'Movie Title', imdb_rating AS 'IMDb' FROM movies;
