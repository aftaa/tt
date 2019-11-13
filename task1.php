<?php

/*
2 Написать SQL запрос. Есть таблицы a​uthors ​и ​books​. Нужно вывести из них данные
по авторам, количеству книг и наличию положительного рейтинга у книг. Формат
вывода: имя автора, общее количество книг данного автора, признак наличия книг с
положительным рейтингом (если r​ating​ более 4.0, то выводить 1, иначе - 0). Результаты
нужно отсортировать по количеству в обратном порядке. Дополнительно вывести
только те, у которых количество книг с положительным рейтингом более 1 Схемы:
CREATE TABLE `authors` (
    `id` int NOT AUTO_INCREMENT,
    `name` varchar(255),
    PRIMARY KEY (`id`)
);
CREATE TABLE `books` (
    `id` int NOT AUTO_INCREMENT,
    `title` varchar(255),
    `year` int,
    `author_id` int,
    `rating` decimal(3, 1),
    PRIMARY KEY (`id`),
    FOREIGN KEY (author_id)
REFERENCES authors(id)
);
*/
