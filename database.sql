CREATE DATABASE instagram_db;
USE instagram_db;

CREATE TABLE posts (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(100),
profile_image VARCHAR(255),
caption TEXT,
image VARCHAR(255),
location VARCHAR(100),
hashtags VARCHAR(255),
likes INT,
comments_count INT,
post_date DATE,
post_time TIME,
device VARCHAR(100),
privacy VARCHAR(50),
status VARCHAR(50),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);