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
		<script type="text/javascript" src=<?php echo get_template_directory_uri()."/suggestion.js" ?> ></script>
	</head>
	<body class="landing">
<?php get_header(); ?>
		<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		<!-- Banner -->
			<section id="banner">
				<h2>Bienvenue sur mon Portfolio</h2>
				<p>Il regroupe mes travaux, mes contacts, mon parcours <br /> ou encore des photos du Québec.</p>
				<ul class="actions">
					<li><a <?=@$active['/contacts/']?> href="<?=get_home_url()?>/contacts/" class="button special big">Une question ?</a></li>
				</ul>
			</section>

			<!-- One 
				<section id="one" class="wrapper style1">
					<div class="container 75%">
						<div class="row 200%">
							<div class="6u 12u$(medium)">
								<header class="major">
									<h2>Maecenas luctus lectus</h2>
									<p>Perspiciatis doloremque recusandae dolor</p>
								</header>
							</div>
							<div class="6u$ 12u$(medium)">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non ea mollitia corporis id, distinctio sunt veritatis officiis dolore reprehenderit deleniti voluptatibus harum magna, doloremque alias quisquam minus, eaque. Feugiat quod, nesciunt! Iste quos ipsam, iusto sit esse.</p>
								<p>Dolorum aspernatur maxime libero ratione quidem distinctio, placeat fugiat laborum voluptatum enim neque soluta vel sunt id ex veritatis. Labore rerum, odit sapiente, alias mollitia magnam exercitationem modi amet earum quia atque ipsum voluptas asperiores quas laboriosam.</p>
							</div>
						</div>
					</div>
				</section>  -->

			<!-- Two -->
				<section id="two" class="wrapper style2 special">
					<div class="container">
						<header class="major">
							<h2>Découvrez mes clichés</h2>
							<p>Mes photos les plus récentes :</p>
						</header>
						<div class="row 150%">
							<div class="6u 12u$(xsmall)">
								<div class="image fit captioned">
									<img src="<?php echo get_template_directory_uri(); ?>/images/chute_neigette.jpg" alt="" />
									<h3>Chute Neigette (Sud de Rimouski)</h3>
								</div>
							</div>
							<div class="6u$ 12u$(xsmall)">
								<div class="image fit captioned">
									<img src="<?php echo get_template_directory_uri(); ?>/images/chute_neigette2.jpg" alt="" />
									<h3>Le jour se couchant sur une forêt de Rimouski</h3>
								</div>
							</div>
						</div>
						<!--
						<ul class="actions">
							<li><a href="#" class="button special big">Nulla luctus</a></li>
							<li><a href="#" class="button big">Sed vulputate</a></li>
						</ul>-->
					</div>
				</section>

			<!-- Three -->
				<section id="three" class="wrapper style1">
					<div class="container">
						<header class="major special">
							<h2>Découvrez mes oeuvres informatiques</h2>
							<p>N'hésitez pas à cliquer sur chacune d'entre elles pour en découvrir les détails</p>
						</header>
						<form method="POST" action="index.php">

            <p><input type="text" size="40" id="txtHint"  onkeyup="afficherSuggestion(this.value)"></p>

        </form>

        <p>Articles Correspondants : <span id="txtName"></span></p>
						<div class="feature-grid">

<?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
				if(!is_null(get_post_custom_values('oeuvre-image')[0])){
				$img_link=get_post_custom_values('oeuvre-image')[0];}
				else{
					$img_link='cgmatane_logo.png';
				}
?>
							<div class="feature">

								<div class="image rounded"><img src="<?php echo get_template_directory_uri(); ?>/images/<?=$img_link; ?>" alt="Icon" /></div>
								<div class="content">
									<header>
										<h4><?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?></h4>
										<p><?php the_excerpt(); ?></p>
									</header>
									<p><?php the_date();?></p>
								</div>
							</div>
<?php
            endwhile;
        endif;
?>


						</div>
					</div>
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style3 special">
					<div class="container">
						<header class="major">
							<h2>Vous ne connaissez pas Wordpress ?</h2>
						</header>
						<ul class="actions">
							<li><a href="https://fr.wordpress.com/" class="button special big">Découvrir Wordpress</a></li>
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