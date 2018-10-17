<?php


$authors = [
		['id' => 1, 'name' => 'Harry Potter'],
		['id' => 2, 'name' => 'Ron Weasley'],
		['id' => 3, 'name' => 'Albus Dumbledore'],
		['id' => 4, 'name' => 'Severus Snape'],
		['id' => 5, 'name' => 'Hermione Granger'],
];

$articles = [
		['title' => 'Lorem', 'content' => file_get_contents(__DIR__.'/content/article1.txt'), 'publishedDate' => 2018-08-01, 'likeCounter' => 1, 'author' => 1],
		['title' => 'Lorem', 'content' => file_get_contents(__DIR__.'/content/article2.txt'), 'publishedDate' => 2018-08-02, 'likeCounter' => 2, 'author' => 1],
		['title' => 'Lorem', 'content' => file_get_contents(__DIR__.'/content/article3.txt'), 'publishedDate' => 2018-08-03, 'likeCounter' => 3, 'author' => 2],
		['title' => 'Lorem', 'content' => file_get_contents(__DIR__.'/content/article4.txt'), 'publishedDate' => 2018-08-04, 'likeCounter' => 4, 'author' => 2],
		['title' => 'Lorem', 'content' => file_get_contents(__DIR__.'/content/article5.txt'), 'publishedDate' => 2018-08-05, 'likeCounter' => 5, 'author' => 3],
		['title' => 'Lorem', 'content' => file_get_contents(__DIR__.'/content/article6.txt'), 'publishedDate' => 2018-08-06, 'likeCounter' => 6, 'author' => 3],
		['title' => 'Lorem', 'content' => file_get_contents(__DIR__.'/content/article7.txt'), 'publishedDate' => 2018-08-07, 'likeCounter' => 7, 'author' => 4],
		['title' => 'Lorem', 'content' => file_get_contents(__DIR__.'/content/article8.txt'), 'publishedDate' => 2018-08-08, 'likeCounter' => 8, 'author' => 4],
		['title' => 'Lorem', 'content' => file_get_contents(__DIR__.'/content/article9.txt'), 'publishedDate' => 2018-08-09, 'likeCounter' => 9, 'author' => 5],
		['title' => 'Lorem', 'content' => file_get_contents(__DIR__.'/content/article10.txt'), 'publishedDate' => 2018-08-10, 'likeCounter' => 10, 'author' => 5],
];

/*
gör en separat array för news
 */
/**
 * Ska lagras:
 *
 * # News articles
 * id
 * title
 * content
 * date
 * likes
 * author
 *
 * # Authors
 * id
 * name
 */
