<?php

declare(strict_types=1);

function sortByDate(array $a, array $b): int {
 return strcmp($a['date'], $b['date']);
}

function selectByAuthor(array $article, string $id): array{
	return array_filter($article, function($b1) use ($id) {
		return $b1['id'] == $id;
	});


}
