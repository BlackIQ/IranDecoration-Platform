DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`
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

SELECT *
FROM users;