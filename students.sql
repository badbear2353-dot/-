
CREATE DATABASE IF NOT EXISTS student_db;
USE student_db;

CREATE TABLE students (
id INT AUTO_INCREMENT PRIMARY KEY,
student_id VARCHAR(20),
first_name VARCHAR(50),
last_name VARCHAR(50),
gender VARCHAR(10),
faculty VARCHAR(100),
major VARCHAR(100),
year_level INT,
email VARCHAR(100),
phone VARCHAR(20),
midterm_score INT,
final_score INT,
attendance INT,
assignment_score INT,
total_score INT,
grade VARCHAR(5)
);
