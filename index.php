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
	<!-- Header -->
	<div class="jumbotron">
		<h1 class="display-1">Fake News</h1>
	</div>
	<!-- Buttons -->
	<div class="row">
		<div class="col-5"></div>
		<div class="col-3">
	<a type="button" class="btn btn-dark" href="index.php">
		<span>Home</span>
	</a>
	<a type="button" class="btn btn-dark" href="authorpage.php">
		<span>Authors</span>
	</a>
	</div>
</div>
<!-- Article Container -->
	<div class="container">
		<div class="row">
			<!-- function that sorts articles by date -->
			<?php usort($articles, 'sortByDate');?>
			<?php if (isset($_GET['sortbyauthor'])){
				 $articles = selectByAuthor($articles, $_GET['sortbyauthor']);
			}
			?>
			<!-- loops trough the articles array also reverses the order so the latest articles show at the top -->
			<?php foreach (array_reverse($articles) as $article):?>
				<!-- Counts through the authors array and prints articles for each author in the array if the author id matches the article id -->
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
							<div>
								<div class="row">
									<div class="col">
										<p><?= "Published: " . $article['date'];?></p>
									</div>
									<div class="col d-flex justify-content-end">
										<!-- Button with thumbs up icon that is display the likecounter from the array -->
										<button id ="likeButton" type="button" onclick="buttonFunction()" class="btn btn-dark">
											<!-- thumbs up logo -->
											<span class="fas fa-thumbs-up"></span>
											<span class"likes"><?=$article['likeCounter']?></span>
										</button>
									</div>
								</div>
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
