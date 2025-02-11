--FIRST
SELECT name from city where countrycode='JPN';


--SECOND
SELECT ROUND(SUM(LAT_N),2),ROUND(SUM(LONG_W),2)
FROM station;


--THIRD
SELECT DISTINCT city from station
where city not like 'A%'
AND city not like 'E%'
AND city not like 'I%'
AND city not like 'O%'
AND city not like 'U%';


--FOURTH
SELECT DISTINCT city from station
where city not like '%A'
AND city not like '%E'
AND city not like '%I'
AND city not like '%O'
AND city not like '%U';


--FIFTH
SELECT DISTINCT city from station
where city not like '%A'
AND city not like 'A%'
AND city not like '%E'
AND city not like 'E%'
AND city not like '%I'
AND city not like 'I%'
AND city not like '%O'
AND city not like 'O%'
AND city not like '%U'
AND city not like 'U%';


--SIXTH
SELECT ROUND(AVG(population),0) from city;



--SEVENTH
SELECT sender_id, COUNT(*) AS message_count
FROM messages
WHERE sent_date BETWEEN '2022-08-01' AND '2022-08-31'
GROUP BY sender_id
ORDER BY message_count DESC
limit 2;


--EIGHTH
SELECT
  app_id,
  ROUND(100.0 *
    COUNT(CASE WHEN event_type = 'click' THEN 1 ELSE NULL END) /
    COUNT(CASE WHEN event_type = 'impression' THEN 1 ELSE NULL END), 2)  AS ctr
FROM events
WHERE timestamp >= '2022-01-01' 
  AND timestamp < '2023-01-01'
GROUP BY app_id;