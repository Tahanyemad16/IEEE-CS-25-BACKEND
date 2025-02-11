# Database and SQL - Research

## 1. What is the Database and why does it exist?

A **Database** is an organized collection of structured information or data, typically stored electronically in a computer system. Databases are used to manage large amounts of information by storing, retrieving, and processing data efficiently. They exist to help manage and manipulate data in an organized way, ensuring that it can be accessed, updated, and queried effectively. Databases are essential for applications ranging from websites to complex enterprise systems, providing reliability, security, and performance for data handling.

[Reference](https://www.oracle.com/database/what-is-database/)

---

## 2. What is SQL?

**SQL (Structured Query Language)** is a standard programming language used to manage and manipulate relational databases. It is used for inserting, updating, and deleting data. SQL is efficiency in working with structured data. Some of the most common SQL commands are SELECT, INSERT, UPDATE, DELETE, and CREATE.

[Reference](https://www.oracle.com/database/what-is-database/)

---

## 3. What is the history of MySQL?

**MySQL** was initially developed by Michael "Monty" Widenius and David Axmark in 1995. It was created as an open-source database management system, and the name "MySQL" comes from Monty’s daughter, My. Over the years, MySQL gained significant popularity due to its lightweight, fast, and flexible nature. It became widely used in web development, especially as part of the LAMP stack (Linux, Apache, MySQL, and PHP). In 2008, Sun Microsystems acquired MySQL AB, and later in 2010, Oracle Corporation purchased Sun Microsystems, inheriting the rights to MySQL. Despite this, MySQL remains open-source, and is used by many companies globally.

[Reference](https://dev.mysql.com/doc/refman/8.0/en/history.html)

---

## 4. What are the 5 most famous databases in the world now, and why?

Here are five of the most famous databases in the world today:

1. **Oracle Database**  
   - **Why?** Oracle is one of the most widely used enterprise-level relational databases. It is known for its scalability, security features, and robust performance. It is often used in large, mission-critical applications where high availability and data integrity are crucial.

2. **MySQL**  
   - **Why?** MySQL is one of the most widely used open-source databases, known for its fast performance, ease of use, and reliability. It is the go-to choice for many web applications, especially in the LAMP stack.

3. **Microsoft SQL Server**  
   - **Why?** SQL Server is a relational database developed by Microsoft. It is commonly used in businesses that operate in Microsoft environments. SQL Server is known for its security features, integration with other Microsoft services, and scalability for large applications.

4. **PostgreSQL**  
   - **Why?** PostgreSQL is an advanced, open-source relational database known for its robustness, flexibility, and compliance with SQL standards. It supports a wide range of features, including complex queries, ACID compliance, and support for JSON data types.

5. **MongoDB**  
   - **Why?** MongoDB is a NoSQL database that focuses on scalability and performance. It is known for handling large volumes of unstructured data and is commonly used in big data applications, real-time analytics, and content management systems.

[Reference](https://db-engines.com/en/ranking)

   ---

## 5. What is RDBMS?

According to Oracle’s **RDBMS** definition, a relational database management system is software that allows users to store, manage, query, and retrieve data that is stored in a relational database. Data in RDBMS is stored in tables with rows and columns. Modern database systems such as MySQL, SQL Server, Oracle, etc. are all based on RDBMS. Most relational database management systems use SQL or Structured Query language to access a database.

[Reference](https://trainings.internshala.com/blog/what-is-rdbms/)

---

## 6. RDBMS VS DBMS ?

|DBMS | RDBMS |
|-----|-------|
|DBMS stores data as file.         |	RDBMS stores data in tabular form.|
|Data elements need to access individually.|	Multiple data elements can be accessed at the same time.|
|No relationship between data.|	Data is stored in the form of tables which are related to each other.
|Normalization is not present.	|Normalization is present.
|DBMS does not support distributed database.|	RDBMS supports distributed database.
|It stores data in either a navigational or hierarchical form.|	It uses a tabular structure where the headers are the column names, and the rows contain corresponding values.|
|It deals with small quantity of data.	|It deals with large amount of data.|
|Data redundancy is common in this model.|	Keys and indexes do not allow Data redundancy.|
|It is used for small organization and deal with small data.	|It is used to handle large amount of data.|
|Not all Codd rules are satisfied.	|All 12 Codd rules are satisfied.|
|Security is less	|More security measures provided.|
|It supports single user.|	It supports multiple users.|
|Data fetching is slower for the large amount of data.|	Data fetching is fast because of relational approach.|
|The data in a DBMS is subject to low security levels with regards to data manipulation.	|There exists multiple levels of data security in a RDBMS.|
|Low software and hardware necessities.	|Higher software and hardware necessities.|
|Examples: XML, Window Registry, Forxpro, dbaseIIIplus etc.|	Examples: MySQL, PostgreSQL, SQL Server, Oracle, Microsoft Access etc. | 

[Reference](https://www.geeksforgeeks.org/difference-between-rdbms-and-dbms/)

---

## 7. Naming Convention.

These are sets of standards that are generally accepted by the majority of developers out there.
In naming conventions we name a lot of things. Such as variables, functions, classes, methods, interfaces and so on.
Throughout the years, developers have used different case types to name different entities in their code. And four of them have proved to be the most popular ones.They are:
 - Camel Case
 - Snake Case 
 - Kebab Case 
 - Pascal Case

 [Reference](https://www.freecodecamp.org/news/programming-naming-conventions-explained/)

 ---

 ## 8. primary keys vs unique keys.
 **primary key** is a column of a table that uniquely identifies each tuple (row) in that table. The primary key enforces integrity constraints to the table. Only one primary key is allowed to be used in a table. The primary key does not accept any duplicate and NULL values. The primary key value in a table changes very rarely so it is chosen with care where the changes can occur rarely. A primary key of one table can be referenced by the foreign key of another table. 

 **Unique Key** constraints also identify an individual tuple uniquely in a relation or table. A table can have more than one unique key,unlike a primary key. Unique key constraints can accept only one NULL value for the column. Unique constraints are also referenced by the foreign key of another table. It can be used when someone wants to enforce unique constraints on a column and a group of columns which is not a primary key. 

 [Reference](https://www.geeksforgeeks.org/difference-between-primary-key-and-unique-key/)

 ---

 ## 9.constraints in MySQL.
 SQL constraints are used to specify rules for the data in a table.

 Constraints are used to limit the type of data that can go into a table. This ensures the accuracy and reliability of the data in the table. If there is any violation between the constraint and the data action, the action is aborted.

 Constraints can be column level or table level. Column level constraints apply to a column, and table level constraints apply to the whole table.

 The following constraints are commonly used in SQL:
 - NOT NULL - Ensures that a column cannot have a NULL value
 - UNIQUE - Ensures that all values in a column are different
 - PRIMARY KEY - A combination of a NOT NULL and UNIQUE. Uniquely identifies each row in a table
 - FOREIGN KEY - Prevents actions that would destroy links between tables
 - CHECK - Ensures that the values in a column satisfies a specific condition
 - DEFAULT - Sets a default value for a column if no value is specified
 - CREATE INDEX - Used to create and retrieve data from the database very quickly

 [Reference](https://www.w3schools.com/mysql/mysql_constraints.asp)

 ---

 ## 10.indexing in MySQL.
 A **MySQL index** is a data structure that improves the speed of data retrieval operations on a database table. Similar to an index in a book that helps you quickly find specific information without having to read through the entire book, a MySQL index allows the database to locate and access rows in a table much faster than it could without an index.
 
 Types of MySQL Indexes:

 MySQL supports a variety of indexes so that they can perform different functions in the event of different use cases. Understanding these types will help you choose the right index for any of your database needs.

 - Primary Index
 - Unique Index
 - Full-Text Index
 - Composite Index
 - Spatial Index

 [Reference](https://www.geeksforgeeks.org/mysql-indexes/)

 ---

 ## 11.Difference between MySQL and Postgresql
 MySQL and PostgreSQL are both popular open-source relational database management systems (RDBMS), but they have distinct features and design structures:

 **MySQL**: It is known for its speed and reliability, MySQL is widely used in web applications and is a preferred choice for read-heavy operations. MySQL is known for being user-friendly and relatively simple to set up.

 **PostgreSQL**: It is referred to as “Postgres,” PostgreSQL is known for its advanced features, extensibility and compliance with SQL standards. It offers robust support for complex queries, transactions, and data integrity. PostgreSQL is a good choice for applications requiring complex queries and transactions.

[Reference](https://www.geeksforgeeks.org/difference-between-mysql-and-postgresql/)

---




