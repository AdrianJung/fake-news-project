<?php

declare(strict_types=1);

function sortByDate(array $articles, array $b): int {
 return strcmp($articles['date'], $b['date']);
}

/**
 * Sorts out articles for each author
 * @param  array  $articles [array of articles]
 * @param  string $id       [$_GET value of each author]
 * @return array            [returns respective articles for selected author]
 */

function sortByAuthor(array $articles, string $id): array{
	return array_filter($articles, function($article) use ($id) {
		return $article['author_id'] == $id;
	});
}
