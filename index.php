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
	  <h1 class="display-1">f4k3 n3ws</h1>
	  <p class="lead">The following news articles are not real</p>
	</div>
	<div class="container">
		<div class="row">
			<?php foreach ($articles as $article):?>
				<?php for ($i=0; $i < count($authors); $i++):?>
					<?php if ($authors[$i]['author_id'] === $article['id']):?>
						<div class="col-12 p-4">
							<div class="card text-white bg-dark">
								<div class="card-header p-4"><h4><?=$authors[$i]['name']?></h4></div>
							<?php endif; ?>
						<?php endfor; ?>
						<div class="card-body">
							<h5 class="card-title"><?= $article['title']?></h5>
							<p class="card-text"><?= $article['content']?></p>
							<div class="d-flex justify-content-end">
							<button type="button" class="btn btn-dark">
								<span class="fas fa-thumbs-up"></span>
								<span class"likes"><?=$article['likeCounter']?></span>
								</button>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</div>
</body>
</html>
