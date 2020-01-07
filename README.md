# EndGem

##SETUP

Install xampp and Download the project repository to C:\xampp\htdocs

first create a database named 'endgem' which will have two tables namely 'users' 'entries'
```sql
>CREATE DATABASE endgem;
>CREATE TABLE users;
>CREATE TABLE entries;
```

###DATABASE TABLE DESIGNS

users table
```sql
+----------+--------------+------+-----+---------+----------------+
| Field    | Type         | Null | Key | Default | Extra          |
+----------+--------------+------+-----+---------+----------------+
| id       | int(11)      | NO   | PRI | NULL    | auto_increment |
| email    | varchar(100) | NO   |     | NULL    |                |
| username | varchar(100) | NO   |     | NULL    |                |
| password | varchar(100) | NO   |     | NULL    |                |
+----------+--------------+------+-----+---------+----------------+
```
entries table
```sql
+------------+--------------+------+-----+---------------------+----------------+
| Field      | Type         | Null | Key | Default             | Extra          |
+------------+--------------+------+-----+---------------------+----------------+
| id         | int(11)      | NO   | PRI | NULL                | auto_increment |
| coursename | varchar(100) | NO   |     | NULL                |                |
| entryname  | varchar(100) | NO   |     | NULL                |                |
| title      | varchar(100) | NO   |     | NULL                |                |
| date       | date         | NO   |     | current_timestamp() |                |
| downloads  | int(11)      | NO   |     | 0                   |                |
+------------+--------------+------+-----+---------------------+----------------+
```

