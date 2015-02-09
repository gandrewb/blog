<?php
	$path = 'articles/'.$_GET['title'].'/';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../src/styles/article_base.css" />
	<?php require $path.'head.inc'; ?>
</head>
<body>

	<header></header>
	
	<article class="article_body">
		<?php require $path.'article.inc'; ?>
	</article>
	
	<footer></footer>

</body>
</html>