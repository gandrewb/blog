<?php
	$path = 'articles/'.$_GET['title'].'/';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="user-scalable=0, initial-scale=1.0">
	<link rel="stylesheet" href="../src/styles/article_base.css" />
	<?php require $path.'head.inc'; ?>
</head>
<body>

	<header></header>
	
	<article class="article_body">
		<div class="logo_header content_width"><img src="/imgs/logo_1.svg"></div>
		<?php require $path.'article.inc'; ?>
	</article>
	
	<footer></footer>

</body>
</html>