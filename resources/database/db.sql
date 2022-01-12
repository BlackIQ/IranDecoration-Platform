CREATE TABLE IF NOT EXISTS `users`
(
    `row`      INT(11) AUTO_INCREMENT,
    `id`       text,
    `name`     text,
    `mail`     text,
    `phone`    text,
    `passcode` text,
    `join`     text,
    PRIMARY KEY (`row`)
);

CREATE TABLE IF NOT EXISTS `messages`
(
    `row`     INT(11) AUTO_INCREMENT,
    `id`      text,
    `date`    text,
    `name`    text,
    `mobile`  text,
    `email`   text,
    `subject` text,
    `message` text,
    PRIMARY KEY (`row`)
);

SELECT *
FROM users;

SELECT *
FROM messages;