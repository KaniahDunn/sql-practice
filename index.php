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
