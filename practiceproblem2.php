<?php

// CODING CHALLENGE #1
//Find the number of girls who were named Lillian for the full span of time of the database.
//Select only the year and number columns.
SELECT year, number FROM Babies WHERE name = 'Lillian';


//CODING CHALLENGE #2
//Find 20 distinct names that start with ‘S’.
//Select only the name column.
SELECT DISTINCT name
FROM babies
WHERE name LIKE 'S%'
LIMIT 20;


//CODING CHALLENGE #3
//What are the top 10 names in 1880?
//Select the name, gender, and number columns.
SELECT name, gender, number
FROM babies
WHERE year = 1880
ORDER BY number DESC
LIMIT 10;


//CODING CHALLENGE #4
//Suppose your friend Jaime wants to go out to Japanese, but you’re on a budget.
//Return all the restaurants that are Japanese and $$.
//Select all the columns.
SELECT * FROM nomnom
WHERE cuisine = 'Japanese'
AND price = '$$';


//CODING CHALLENGE #5
// Your roommate Bevers can’t remember the exact name of a restaurant he went to but he knows it contains the word ‘noodle’ in it.
// Can you find it for him using a query?
// Select all the columns.
SELECT *
FROM nomnom
WHERE name LIKE '%noodle%';


//Some of the restaurants have not been inspected yet or are currently appealing their health grade score.
//Find the restaurants that have empty health values.
//Select all the columns.
SELECT *
FROM nomnom
WHERE health IS NULL;
 ?>
