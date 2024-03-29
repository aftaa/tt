/* 2 Написать SQL запрос. Есть таблицы authors​и​books. Нужно вывести из них данные
по авторам, количеству книг и наличию положительного рейтинга у книг. Формат
вывода: имя автора, общее количество книг данного автора, признак наличия книг с
положительным рейтингом (если rating​ более 4.0, то выводить 1, иначе - 0). Результаты
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
    FOREIGN KEY (author_id) REFERENCES authors(id)
);
*/

-- Query #1
SELECT a.name, COUNT(a.*) AS booksCount, IF(SUM(b.rating) >= 4.0, 1, 0) AS positiveRating
FROM authors a JOIN books b ON b.author_id = a.id
GROUP BY a.id
ORDER BY booksCount DESC;

-- Query #2
SELECT a.name
FROM authors a JOIN books b ON b.author_id = a.id
WHERE b.rating > 1
GROUP BY a.id;
