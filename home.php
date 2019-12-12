<?php /* Template Name: Главная */ ?>
<!DOCTYPE html>
<html>
<?php get_header(); ?>
<body class="page">
	<?php get_template_part('_header_homepage'); ?>
	<main class="home">
		<!--<div class="home-title">
			<div class="home-title__decor"></div>
			<img class="home-title__logo" src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.png" alt=""> 			<h1 class="home-title__sitetitle">
				<?php the_field('home_title'); ?>
			</h1>
			<div class="home-title__desc">
				<?php the_field('home_subtitle'); ?>
			</div>
		</div>-->
		<?php if (get_field('home_slider')): ?>
		<ul class="home-slider-nav" data-uk-switcher>
			<?php foreach(get_field('home_slider') as $key => $slide): ?>
			<li <?php if ($key == 0) echo 'class="uk-active"'; ?>><a href="#"></a></li>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>
		<ul class="home-slider uk-switcher">
			<?php if (get_field('home_slider')): ?>
				<?php foreach(get_field('home_slider') as $slide): ?>
					<?php if (!empty($slide['image'])): ?>
						<li class="uk-cover-container">
							<img src="<?php echo $slide['image']['url']; ?>" data-uk-cover alt="">
						</li>
					<?php else: ?>
						<li class="uk-cover-container js-video-container">
							<video autoplay loop muted data-uk-cover uk-video="autoplay: inview">
								<?php foreach($slide['videos'] as $video): ?>
								<source src="<?php echo $video['file']['url'] ?>" type="<?php echo $video['file']['mime_type'] ?>">
								<?php endforeach; ?>
							</video>
						</li>
					<?php endif; ?>
				<?php endforeach; ?>
			<?php else: ?>
			<li class="uk-cover-container">
				<img src="" data-uk-cover alt="">
			</li>
			<?php endif; ?>
		</ul>
	</main>
	<!-- <div class="home-warning">
		<div class="uk-container uk-container-large">
			В текущий момент происходит обновление баз данных в связи с чем некоторый функционал будет ограничен.
		</div>
	</div> -->
	<?php get_template_part('_footer'); ?>
</body>
</html>
