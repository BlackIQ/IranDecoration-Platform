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

INSERT INTO users (id, name, mail, phone, passcode, `join`)
VALUES ('0481244859', 'Amirhossein Mohamamdi', 'amir@gmail.com', '+989014784362', 'main2022', 'Jan 9 2022');

SELECT *
FROM users;