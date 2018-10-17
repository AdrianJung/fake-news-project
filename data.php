<?php

declare(strict_types=1);

$data = [
	'authors' => [
		['id' => 1, 'name' => 'adrian Gotlandsson'],
		['id' => 2, 'name' => 'Batman Batmansson'],
		['id' => 3, 'name' => 'Robin Robinsson'],
		['id' => 4, 'name' => 'Blabla Blablasson'],
		['id' => 5, 'name' => 'Benjamin Fransson']
	],
	'news' => [
		['title' => 'Lorem', 'content' => 'ipsum', 'publishedDate' => date(), 'likeCounter' => 5, 'author' => 1],
		['title' => 'Lorem', 'content' => 'ipsum', 'publishedDate' => date(), 'likeCounter' => 5, 'author' => 2],
		['title' => 'Lorem', 'content' => 'ipsum', 'publishedDate' => date(), 'likeCounter' => 5, 'author' => 3],
		['title' => 'Lorem', 'content' => 'ipsum', 'publishedDate' => date(), 'likeCounter' => 5, 'author' => 4],
		['title' => 'Lorem', 'content' => 'ipsum', 'publishedDate' => date(), 'likeCounter' => 5, 'author' => 5],
	]
];

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
