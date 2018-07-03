<?php /* Template Name: Отзывы */ ?>
<!DOCTYPE html>
<html>
<?php get_header(); ?>
<body class="page">
    <?php get_template_part('_header_innerpage'); ?>
    <main class="reviews innerpage"> 
        <header class="reviews__innerpage-header innerpage-header">
            <div class="uk-container uk-container-large">
                <h1 class="innerpage-header__title">
                
                </h1>
            </div>
        </header>
        <div class="breadcrumbs">
            <div class="uk-container">
                <ul class="uk-breadcrumb">
                <?php if(function_exists('bcn_display')) bcn_display();?>
                </ul>
            </div>
        </div>
        <div class="uk-container">
            <h2 class="reviews__section-title section-title">
            <?php the_title(); ?>
            </h2>
            <?php foreach (get_field('review') as $row): ?>
                <div class="reviews-item">
                    <div class="reviews-item__photo uk-cover-container">
                        <img src="<?php echo $row['review_photo']; ?>" alt="" data-uk-cover>
                    </div>
                    <div>
                        <div class="reviews-item__title">
                            <?php echo $row['review_name']; ?>
                        </div>
                        <div class="reviews-item__text js-spoiler-text">
                            <?php echo $row['review_text']; ?>
                        </div>
                        <button class="reviews-item__readmore">читать полностью</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main> 
    <?php get_template_part('_footer'); ?>
</body>
</html>