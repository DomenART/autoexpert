<?php
/* Template Name: О компании */

$services = new WP_Query(array(
    'post_type' => 'page',
    'post_parent' => 108
));
?>
<!DOCTYPE html>
<html>
<?php get_header(); ?>
<body class="page">
    <?php get_template_part('_header_innerpage'); ?>
    <main class="about innerpage">
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
        <section class="about__section">
            <div class="uk-container">
                <?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>
                    <h1 class="about__page-title page-title">
                       <?php the_title(); ?>
                    </h1>
                    <div class="content">
                      <?php the_content(); ?>
                    </div>
                <?php endwhile; else: ?>
                    <p>Извините, ничего не найдено.</p>
                <?php endif; ?>
            </div>
        </section>
        
        <?php if ($services->have_posts()): ?>
        <section class="about__section">
            <div class="uk-container">
                <h2 class="about__section-title section-title">
                    Наши услуги
                </h2>
                <div class="services-grid uk-grid uk-child-width-1-2@s uk-child-width-1-4@m" uk-grid>
                    <?php while($services->have_posts()): $services->the_post(); ?>
                      <div>
                          <div class="services-item">
                              <img class="services-item__img" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') ?>" alt="">
                              <h3 class="services-item__title">
                                  <?php the_title() ?>  
                              </h3>
                              <div class="services-item__desc">
                                  <?php the_excerpt() ?>
                              </div>
                              <a class="services-item__readmore" href="<?php the_permalink() ?>">
                                  Читать полностью
                              </a>
                          </div>
                      </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
        <?php endif; wp_reset_query(); ?>
        
        <?php if ($documents = get_field('documents')): ?>
        <section class="about__section">
            <div class="uk-container">
                <h2 class="about__section-title section-title">
                    Документы
                </h2>
                <div class="documents-grid uk-grid uk-child-width-1-2@s uk-child-width-1-4@m" uk-grid uk-lightbox>
                    <?php foreach ($documents as $document): ?>
                    <div>
                        <div class="documents-item">
                            <div class="documents-item__img-container">
                                <img class="documents-item__img" src="<?php echo $document['image']['sizes']['thumbnail'] ?>" alt="">
                                <a href="<?php echo $document['image']['url'] ?>" class="documents-item__zoom">
                                    <svg class="documents-item__zoom-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 485.213 485.213">
                                        <g>
                                            <path d="M363.909,181.955C363.909,81.473,282.44,0,181.956,0C81.474,0,0.001,81.473,0.001,181.955s81.473,181.951,181.955,181.951    C282.44,363.906,363.909,282.437,363.909,181.955z M181.956,318.416c-75.252,0-136.465-61.208-136.465-136.46    c0-75.252,61.213-136.465,136.465-136.465c75.25,0,136.468,61.213,136.468,136.465    C318.424,257.208,257.206,318.416,181.956,318.416z" fill="#FFFFFF"/>
                                            <path d="M471.882,407.567L360.567,296.243c-16.586,25.795-38.536,47.734-64.331,64.321l111.324,111.324    c17.772,17.768,46.587,17.768,64.321,0C489.654,454.149,489.654,425.334,471.882,407.567z" fill="#FFFFFF"/>
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            <h3 class="documents-item__title">
                                <?php echo $document['name'] ?>  
                            </h3>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>
    </main>
    <?php get_template_part('_footer'); ?>
</body>
</html>