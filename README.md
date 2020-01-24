# EndGem
This project is named as 'End Gem' which is made by Rahul (Enrollment no. 19116052) for the submission to IMG IIT Roorkee for the recruitment purpose. All the pages are completely RESPONSIVE.

## SETUP
Install xampp and Download the project repository to C:\xampp\htdocs

first create a database named 'endgem' which will have two tables namely 'users' and 'entries'.
```sql
>CREATE DATABASE endgem;
```

### DATABASE TABLE DESIGNS
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
Now visit [http://localhost/EndGem/welcome.php](http://localhost/EndGem/welcome.php) to view project.

