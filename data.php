<?php

$authors = [
        ['author_id' => 1, 'name' => 'Kalle'],
        ['author_id' => 2, 'name' => 'Peter'],
        ['author_id' => 3, 'name' => 'Nisse'],
        ['author_id' => 4, 'name' => 'Hasse'],
        ['author_id' => 5, 'name' => 'Bob'],
];


$articles = [
        ['id' => 1,
         'author_id' => 1,
         'title' => 'This title',
         'content' => file_get_contents(__DIR__.'/content/article1.txt'),
         'date' => '2018-08-21',
         'like_counter' => 1],

        ['id' => 2,
         'author_id' => 1,
         'title' => 'That title',
         'content' => file_get_contents(__DIR__.'/content/article2.txt'),
         'date' => '2018-08-12',
         'like_counter' => 2],

        ['id' => 3,
         'author_id' => 2,
         'title' => 'Another title',
         'content' => file_get_contents(__DIR__.'/content/article3.txt'),
         'date' => '2018-08-03',
         'like_counter' => 3],

        ['id' => 4,
         'author_id' => 2,
         'title' => 'Why do you need a title?',
         'content' => file_get_contents(__DIR__.'/content/article4.txt'),
         'date' => '2018-08-04',
         'like_counter' => 4],

        ['id' => 5,
         'author_id' => 3,
         'title' => 'TITLE',
         'content' => file_get_contents(__DIR__.'/content/article5.txt'),
         'date' => '2018-08-15',
         'like_counter' => 5],

        ['id' => 6,
         'author_id' => 3,
         'title' => 'The most interesting article',
     'content' => file_get_contents(__DIR__.'/content/article6.txt'),
         'date' => '2018-08-13',
         'like_counter' => 6],

        ['id' => 7,
         'author_id' => 4,
         'title' => 'Read this now',
         'content' => file_get_contents(__DIR__.'/content/article7.txt'),
         'date' => '2018-08-07',
         'like_counter' => 7],

        ['id' => 8,
         'author_id' => 4,
         'title' => 'Super important article',
         'content' => file_get_contents(__DIR__.'/content/article8.txt'),
         'date' => '2018-08-08',
         'like_counter' => 8],

        ['id' => 9,
         'author_id' => 5,
         'title' => 'Probably the best article here',
         'content' => file_get_contents(__DIR__.'/content/article9.txt'),
         'date' => '2018-08-09',
         'like_counter' => 9],

        ['id' => 10,
         'author_id' => 5,
         'title' => 'Such article, much wow',
         'content' => file_get_contents(__DIR__.'/content/article10.txt'),
         'date' => '2018-08-10',
         'like_counter' => 10,],
];
