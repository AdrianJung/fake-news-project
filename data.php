<?php

$authors = [
		['author_id' => 1,'name' => 'Harry Potter'],
		['author_id' => 2, 'name' => 'Ron Weasley'],
		['author_id' => 3, 'name' => 'Albus Dumbledore'],
		['author_id' => 4, 'name' => 'Severus Snape'],
		['author_id' => 5, 'name' => 'Hermione Granger'],
];


$articles = [
		['id' => 1,
		 'title' => 'This title',
		 'content' => file_get_contents(__DIR__.'/content/article1.txt'),
		 'date' => '2018-08-01',
		 'likeCounter' => 1],

		['id' => 2,
		 'title' => 'That title',
		 'content' => file_get_contents(__DIR__.'/content/article2.txt'),
		 'Date' => '2018-08-02',
		 'likeCounter' => 2],

		['id' => 4,
		 'title' => 'Another title',
		 'content' => file_get_contents(__DIR__.'/content/article3.txt'),
		 'date' => '2018-08-03',
		 'likeCounter' => 3],

		['id' => 3,
		 'title' => 'Why do you need a title?',
		 'content' => file_get_contents(__DIR__.'/content/article4.txt'),
		 'date' => '2018-08-04',
		 'likeCounter' => 4],

		['id' => 5,
		 'title' => 'TITLE',
		 'content' => file_get_contents(__DIR__.'/content/article5.txt'),
		 'date' => '2018-08-05',
		 'likeCounter' => 5],

		['id' => 4,
		 'title' => 'The most interesting article',
     'content' => file_get_contents(__DIR__.'/content/article6.txt'),
		 'date' => '2018-08-06',
		 'likeCounter' => 6],

		['id' => 1,
		 'title' => 'Read this now',
		 'content' => file_get_contents(__DIR__.'/content/article7.txt'),
		 'date' => '2018-08-07',
		 'likeCounter' => 7],

		['id' => 3,
		 'title' => 'Super important article',
		 'content' => file_get_contents(__DIR__.'/content/article8.txt'),
		 'date' => '2018-08-08',
		 'likeCounter' => 8],

		['id' => 5,
		 'title' => 'Probably the best article here',
		 'content' => file_get_contents(__DIR__.'/content/article9.txt'),
		 'date' => '2018-08-09',
		 'likeCounter' => 9],

		['id' => 2,
		 'title' => 'Such article, much wow',
		 'content' => file_get_contents(__DIR__.'/content/article10.txt'),
		 'date' => '2018-08-10',
		 'likeCounter' => 10,],
];
