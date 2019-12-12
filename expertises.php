<?php
/* Template Name: Экспертизы */
require('XLSXReader.php');
?>
<!DOCTYPE html>
<html>
	<?php get_header(); ?>
	<body class="page">
		<?php get_template_part('_header_innerpage'); ?>    
		<main class="contacts innerpage">
			<header class="about__innerpage-header innerpage-header">
				<div class="innerpage-header__decor"></div>
				<img class="innerpage-header__logo" src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.png" alt="">
			</header>
			<div class="breadcrumbs">
				<div class="uk-container">
					<ul class="uk-breadcrumb">
						<?php if(function_exists('bcn_display')) bcn_display();?>
					</ul>
				</div>
			</div>
			<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
			<div class="uk-container">
				<h1 class="page-title">
					<?php the_title(); ?>
				</h1>
				<?php if ($categories = get_field('categories')): ?>
				<div class="contacts__box uk-grid" uk-grid>
					<div class="uk-width-1-4@m">
						<ul class="uk-nav-primary uk-nav-parent-icon" uk-nav uk-sticky="bottom: true">
							<?php foreach($categories as $category): ?>
							<li<?php if (count($category['files']) > 0):?> class="uk-parent"<?php endif; ?>>
								<a href="#<?php echo urlencode($category['name']) ?>" uk-scroll><?php echo $category['name'] ?></a>
								<?php if (count($category['files']) > 0):?>
								<ul class="uk-nav-sub">
									<?php foreach($category['files'] as $file): ?>
									<li><a href="#<?php echo urlencode($file['file']['title'] . ' ' . $file['file']['id']) ?>" uk-scroll><?php echo $file['file']['title'] ?></a></li>
									<?php endforeach; ?>
								</ul>
								<?php endif; ?>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="uk-width-3-4@m">
						<?php foreach($categories as $category): ?>
						<h2 id="<?php echo urlencode($category['name']) ?>"><?php echo $category['name'] ?></h2>

						<?php foreach($category['files'] as $file): ?>
						<h3 id="<?php echo urlencode($file['file']['title'] . ' ' . $file['file']['id']) ?>"><?php echo $file['file']['title'] ?></h3>

						<?php $xlsx = new XLSXReader(get_attached_file($file['file']['ID'])) ?>
						<?php foreach($xlsx->getSheetNames() as $sheet): ?>
						<?php $data = $xlsx->getSheetData($sheet) ?>
						<h4><?php echo $data[0][0] ?></h4>
						<ul>
							<?php foreach($data as $row): ?>
							<?php if (!empty($row[0]) && !empty($row[1]) && !empty($row[2]) && !empty($row[3])): ?>
							<li>
								<a href="<?php echo $row[5] ?>" target="_blank">
									<?php echo $row[0] . ' ' . $row[1] . ' ' . $row[2] . ' ' . $row[3] ?>
								</a>
							</li>
							<?php endif; ?>
							<?php endforeach; ?>
						</ul>
						<?php endforeach; ?>
						<?php endforeach; ?>
						<?php endforeach; ?>
					</div>
				</div>
				<?php endif; ?>
			</div>
			<?php endwhile; else: ?>
			<p>Извините, ничего не найдено.</p>
			<?php endif; ?>
		</main> 
		<?php get_template_part('_footer'); ?>
	</body>
</html>