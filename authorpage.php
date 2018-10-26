<?php

declare(strict_types=1);

require __DIR__.'/data.php';

require __DIR__.'/functions.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<div class="jumbotron">
		<h1 class="display-1">Fake News</h1>
		<h4 class="display-4">Authors</h4>
	</div>
	<div class="container">
		<div class="row">
			<?php foreach ($authors as $author):?>
				<div class="col-4 p-4">
						<form method="get" action="index.php">
							<div class="card text-white bg-dark">
							<button type="submit" name="sortbyauthor" value="<?=$author['author_id']?>">
							<div class="card-header p-4"><h4><?=$author['name']?></h4></div>
					</form>
				</button>
					</div>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</div>
</body>
</html>
