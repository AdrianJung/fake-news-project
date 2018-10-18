<?php

declare(strict_types=1);

require __DIR__.'/data.php';

require __DIR__.'/functions.php';


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootswatch.min.css">
	<link rel="stylesheet" href="css/main.css">
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<?php foreach ($articles as $article):?>
				<?php for ($i=0; $i < count($authors); $i++):?>
					<?php if ($authors[$i]['author_id'] === $article['id']):?>
						<div class="col-4 p-4">
							<div class="card text-black bg-primary-mb3" style="max-width: 20rem;">
								<div class="card-header p-4"><?=$authors[$i]['name']?></div>
							<?php endif; ?>
						<?php endfor; ?>
						<div class="card-body">
							<h4 class="card-title"><?= $article['title']?></h4>
							<p class="card-text"><?= $article['content']?></p>
						</div>
					</div>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</div>
</body>
</html>
