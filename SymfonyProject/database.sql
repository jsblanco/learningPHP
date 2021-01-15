CREATE DATABASE IF NOT EXISTS symfony_project;
use symfony_project;

CREATE TABLE IF NOT EXISTS users(
id int(255) auto_increment not null,
role varchar(50),
name varchar(100),
surname varchar(255),
email varchar(255),
password varchar(255),
created_at datetime,
CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=InnoDb;

INSERT INTO users VALUES(NULL, 'ROLE_USER', 'Jorge', 'Sánchez', 'jorge@email.com', 'password', CURTIME());
INSERT INTO users VALUES(NULL, 'ROLE_USER', 'Francisco', 'Solozábal', 'maqui@email.com', 'password', CURTIME());
INSERT INTO users VALUES(NULL, 'ROLE_USER', 'Zacarías', 'Satrústegui', 'zaca@email.com', 'password', CURTIME());

CREATE TABLE IF NOT EXISTS tasks(
id int(255) auto_increment not null,
user_id int(255) not null,
title varchar(255),
content text,
priority varchar(20),
hours int(100),
created_at datetime,
CONSTRAINT pk_tasks PRIMARY KEY(id),
CONSTRAINT fk_task_users FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDbK;

INSERT INTO tasks VALUES(NULL, 1, 'Dummy task', 'This is the content of a dummy task', 'high', 25, CURTIME());
INSERT INTO tasks VALUES(NULL, 1, 'Fake task', 'This is the content of a dummy task', 'mid', 20, CURTIME());
INSERT INTO tasks VALUES(NULL, 1, 'Task mockup', 'This is the content of a dummy task', 'low', 35, CURTIME());