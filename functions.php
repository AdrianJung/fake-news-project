<?php

declare(strict_types=1);

function sortByDate($a, $b) {
 return strcmp($a['date'], $b['date']);
}
