<?php
	$path = 'articles/'.$_GET['title'].'/';
	
	function change_img_paths($article){
		return preg_replace('/src="imgs\/(.+)"/', 'src="/articles/'.$_GET['title'].'/imgs/${1}"', $article);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0">
	<link rel="stylesheet" href="../src/styles/article_base.css" />
	<?php require $path.'head.inc'; ?>
</head>
<body>

	<header></header>
	
	<article class="article_body">
		<div class="logo_header content_width">
			<a href="/"><img src="/imgs/logo_1.svg"></a>
		</div>
		<?php 
			require $path.'article.inc';
			//echo change_img_paths( file_get_contents( $path.'article.inc' ));
		?>
	</article>
	
	<footer></footer>

</body>
</html>