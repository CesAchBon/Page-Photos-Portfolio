<!DOCTYPE HTML>
<!--
	Spatial by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Portfolio de César</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href=<?php echo get_template_directory_uri()."/style.css"?> />
	</head>
	<body class="landing">
<?php get_header(); ?>
		<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		<!-- Banner -->
			<section id="banner">
				<h2><?php the_title(); ?></h2>
				<p><?=get_post_custom_values('oeuvre-description')[0]; ?></p>
			</section>


			<!-- Three -->
				<section id="three" class="wrapper style1">
					<div class="container">
<?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();            
?>
						<header class="major special">
							<p><?php the_content(); ?></p>
						</header>
<?php
            endwhile;
        endif;
?>
					</div>
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style3 special">
					<div class="container">
						<header class="major">
							<h2>Vous avez déja tout lu ?</h2>
						</header>
						<ul class="actions">
							<li><a <?=@$active['/']?> href="<?=get_home_url()?>/" class="button special big">Retourner à l'accueil</a></li>
						</ul>
					</div>
				</section>

<?php get_footer(); ?>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>