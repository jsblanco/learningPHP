CREATE DATABASE notes_mvc;
USE notes_mvc;

CREATE TABLE users
(
    id       int(255) auto_increment not null,
    name     varchar(100)            not null,
    surname  varchar(255)            not null,
    email    varchar(255)            not null,
    password varchar(255)            not null,
    date     date                    not null,
    CONSTRAINT pk_users PRIMARY KEY (id),
    CONSTRAINT uq_email UNIQUE (email)
)ENGINE=InnoDb;

CREATE TABLE notes
(
    id          int(255) auto_increment not null,
    user_id     int(255)                not null,
    title       varchar(255)            not null,
    description MEDIUMTEXT              not null default 'En construcción',
    date        date                    not null,
    CONSTRAINT pk_posts PRIMARY KEY (id),
    CONSTRAINT fk_post_users FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE NO ACTION
)ENGINE=InnoDb;