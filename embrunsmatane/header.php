<?php
$url=$_SERVER['REQUEST_URL'];
$base="/cesar.achard-bonnet/wordpress";
$page=str_replace($base,"", $url);
$active[$page]= 'class="active"';
?>
<html>
<!-- Header -->
<head>
		<title><?php the_title(); ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href=<?php echo get_template_directory_uri()."/style.css"?> />
</head>
			<header id="header" class="alt">
				<h1><strong><a <?=@$active['/']?> href="<?=get_home_url()?>/">Portfolio</a></strong> de César</h1>
				<nav id="nav">
					<ul>
						<li><a <?=@$active['/']?> href="<?=get_home_url()?>/">Home</a></li>
						<li><a <?=@$active['/bio/']?> href="<?=get_home_url()?>/bio/">A propos de moi</a></li>
						<li><a <?=@$active['/cv/']?> href="<?=get_home_url()?>/cv/">Curriculum Vitae</a></li>
						<li><a <?=@$active['/contacts/']?> href="<?=get_home_url()?>/contacts/">Contacts</a></li>
						<li><a <?=@$active['/projet/']?> href="<?=get_home_url()?>/projet/">Projet</a></li>
					</ul>
				</nav>
			</header>

</html>	
