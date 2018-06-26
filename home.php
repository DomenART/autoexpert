<?php /* Template Name: Главная */ ?>
<!DOCTYPE html>
<html>
<?php get_header(); ?>
<body class="page">
	<?php get_template_part('_header_homepage'); ?>	
	<main class="home">
		<div class="home-title">
			<div class="home-title__decor"></div>
			<img class="home-title__logo" src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.png" alt="">
			<h1 class="home-title__sitetitle">
				<?php the_field('home_title'); ?>
			</h1>
			<div class="home-title__desc">
				<?php the_field('home_subtitle'); ?>
			</div>  
		</div>
		<?php if (get_field('home_slider')): ?>
		<ul class="home-slider-nav" data-uk-switcher>
			<?php foreach(get_field('home_slider') as $key => $slide): ?>
			<li <?php if ($key == 0) echo 'class="uk-active"'; ?>><a href="#"></a></li>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>
		<ul class="home-slider uk-switcher">
			<?php if (get_field('home_slider')): ?>
				<?php foreach(get_field('home_slider') as $key => $slide): ?>
					<?php 
					if (
						(wp_check_filetype($slide['home_slider-item'])['ext'] == 'jpg') || 
						(wp_check_filetype($slide['home_slider-item'])['ext'] == 'png')):
					?>
						<li class="uk-cover-container">
							<img src="<?php echo $slide['home_slider-item']; ?>" data-uk-cover alt="">
						</li>
					<?php 
					elseif (
						(wp_check_filetype($slide['home_slider-item'])['ext'] == 'mp4') || 
						(wp_check_filetype($slide['home_slider-item'])['ext'] == 'ogg') ||
						(wp_check_filetype($slide['home_slider-item'])['ext'] == 'webm')):
					?>
						<li class="uk-cover-container js-video-container">
							<video autoplay loop muted data-uk-cover src="<?php echo $slide['home_slider-item']; ?>">
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
	<?php get_template_part('_footer'); ?>
</body>
</html>
