<!DOCTYPE html>
<html>
<?php get_header(); ?>
<body class="page">
    <?php get_template_part('_header_innerpage'); ?>
    <main class="reviews innerpage"> 
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
        <div class="uk-container">
            <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
                <h1 class="page-title">
                   <?php the_title(); ?>
                </h1>
                <?php the_content(); ?>
            <?php endwhile; else: ?>
                <p>Извините, ничего не найдено.</p>
            <?php endif; ?>
        </div>
    </main> 
    <?php get_template_part('_footer'); ?>
</body>
</html>