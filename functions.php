<?php

declare(strict_types=1);

function sortByDate(array $a, array $b): int {
 return strcmp($a['date'], $b['date']);
}

function sortByAuthor(array $articles, string $id): array{
	return array_filter($articles, function($article) use ($id) {
		return $article['author_id'] == $id;
	});
}
