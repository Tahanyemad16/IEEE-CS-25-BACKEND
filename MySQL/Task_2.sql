--Revising the Select Query I
select *
from city
where countrycode = "USA" and population > 100000;

--Revising the Select Query II
select name
from city
where countrycode = 'USA' and population > 120000;

--Japanese Cities' Attributes
select * from city where countrycode = 'JPN';

--Employee Names
select name from employee order by name;

--Employee Salaries
select name
from employee
where salary > 2000 and months < 10
order by employee_id asc;

--Higher Than 75 Marks
select name
from students
where marks > 75
order by substring(name, LENGTH(name) -2, 3), id;

--Unfinished Parts
select part, assembly_step
from parts_assembly
where finish_date is null;