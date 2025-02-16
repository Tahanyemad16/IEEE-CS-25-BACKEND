--Type of Triangle
SELECT 
CASE 
WHEN (A+B<=C) OR (A+C<=B) OR (C+B<=A) THEN 'Not A Triangle'
WHEN A=B AND B=C THEN 'Equilateral'
WHEN A=B OR A=C  OR C=B  THEN 'Isosceles'
else 'Scalene' 
END
FROM TRIANGLES; 


-- The PADS
SELECT CONCAT(name, '(', Substr(occupation, 1,1), ')') 
FROM occupations
ORDER BY name;

SELECT CONCAT('There are a total of ', COUNT(occupation),' ', LOWER(occupation),'s.') 
FROM occupations
GROUP BY occupation
ORDER BY COUNT(occupation), occupation;


--New Companies
SELECT C.company_code,C.founder,
  COUNT(DISTINCT LM.lead_manager_code),
  COUNT(DISTINCT SM.senior_manager_code),
  COUNT(DISTINCT M.manager_code),
  COUNT(DISTINCT E.employee_code)
FROM Company C
   LEFT JOIN lead_manager LM ON C.company_code=LM.company_code
   LEFT JOIN senior_manager SM ON C.company_code=SM.company_code
   LEFT JOIN manager M ON C.company_code=M.company_code
   LEFT JOIN employee E ON C.company_code=E.company_code
GROUP BY company_code , founder
ORDER BY company_code;



-- SQL Project Planning
SELECT 
    MIN(Start_Date), 
    MAX(End_Date) 
FROM (
    SELECT 
        Task_ID, 
        Start_Date, 
        End_Date,
        End_Date - INTERVAL (ROW_NUMBER() OVER (ORDER BY Start_Date)) DAY AS project_group
    FROM Projects
) AS ProjectGroups
GROUP BY project_group
ORDER BY DATEDIFF(MAX(End_Date), MIN(Start_Date)), MIN(Start_Date);



-- Average Population
SELECT  ROUND(AVG(population),0)
from city;



--Ollivander's Inventory
SELECT w.id, wp.age, w.coins_needed, w.power
FROM Wands w
JOIN Wands_Property wp ON w.code = wp.code
WHERE wp.is_evil = 0
AND w.coins_needed = (
    SELECT MIN(w1.coins_needed)
    FROM Wands w1
    WHERE w1.code = w.code AND w1.power = w.power
)
ORDER BY w.power DESC, wp.age DESC;


-- The Report


-- Symmetric Pairs
SELECT DISTINCT a.X, a.Y
FROM Functions a
JOIN Functions b 
ON a.X = b.Y AND a.Y = b.X
WHERE a.X < a.Y

OR (a.X = a.Y AND (SELECT COUNT(*) FROM Functions c WHERE c.X = a.X AND c.Y = a.Y) > 1)
ORDER BY a.X, a.Y;


-- Weather Observation Station 15
SELECT ROUND(LONG_W,4)
FROM STATION
WHERE LAT_N =(SELECT MAX(LAT_N) FROM STATION WHERE LAT_N < 137.2345);



-- Placements


-- Interviews




