CREATE DATABASE IF NOT EXISTS L2C_KE_PHP_CMS;
USE L2C_KE_PHP_CMS;

CREATE TABLE Users (
    ID INT AUTO_INCREMENT,
    email VARCHAR(256),
    password VARCHAR(64),
    nickname VARCHAR(128),
    PRIMARY KEY (ID)
);

CREATE TABLE Pages (
ID INT AUTO_INCREMENT,
title VARCHAR(128),
content TEXT,
user_id int,
menu_label VARCHAR(128),
menu_order int,
PRIMARY KEY (ID),
FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

INSERT INTO Users (ID, email, password, nickname) VALUES (1, 'jozko@mrkvicka.sk', 12345, jozkomrkvicka)

INSERT INTO Pages (title, content, user_id, menu_label, menu_order) VALUES ("Welcome", "lorem ipsum", 1, "welcome", 0);