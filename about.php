<?php /* Template Name: О компании */ ?>
<!DOCTYPE html>
<html>
<?php get_header(); ?>
<body class="page">
    <?php get_template_part('_header_innerpage'); ?>
    <?php the_post(); ?>
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
                <h1 class="about__page-title page-title">
                   <?php the_title(); ?>
                </h1>
                <div class="content">
                
                <?php the_content(); ?>
                   
                </div>
            </div>
        </section>
        <section class="about__section">
            <div class="uk-container">
                <h2 class="about__section-title section-title">
                    Наши услуги
                </h2>
                <div class="services-grid">
                    <div>
                        <div class="services-item">
                            <img class="services-item__img" src="img/service-pic.jpg" alt="">
                            <h3 class="services-item__title">
                                Название  
                            </h3>
                            <div class="services-item__desc">
                                Краткая информация. <br>Далеко-далеко за словесными горами в стране гласных и
                            </div>
                            <a class="services-item__readmore" href="#">
                                Читать полностью
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="services-item">
                            <img class="services-item__img" src="img/service-pic.jpg" alt="">
                            <h3 class="services-item__title">
                                Название  
                            </h3>
                            <div class="services-item__desc">
                                Краткая информация. <br>Далеко-далеко за словесными горами в стране гласных и
                            </div>
                            <a class="services-item__readmore" href="#">
                                Читать полностью
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="services-item">
                            <img class="services-item__img" src="img/service-pic.jpg" alt="">
                            <h3 class="services-item__title">
                                Название  
                            </h3>
                            <div class="services-item__desc">
                                Краткая информация. <br>Далеко-далеко за словесными горами в стране гласных и
                            </div>
                            <a class="services-item__readmore" href="#">
                                Читать полностью
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="services-item">
                            <img class="services-item__img" src="img/service-pic.jpg" alt="">
                            <h3 class="services-item__title">
                                Название  
                            </h3>
                            <div class="services-item__desc">
                                Краткая информация. <br>Далеко-далеко за словесными горами в стране гласных и
                            </div>
                            <a class="services-item__readmore" href="#">
                                Читать полностью
                            </a>
                        </div>
                    </div>
                </div>
            <div class="uk-container">
        </section>
        <section class="about__section">
            <div class="uk-container">
                <h2 class="about__section-title section-title">
                    Наши услуги
                </h2>
                <div class="documents-grid">
                    <div>
                        <div class="documents-item">
                            <div class="documents-item__img-container">
                                <img class="documents-item__img" src="img/document.jpg" alt="">
                                <div class="documents-item__zoom" uk-lightbox>
                                    <a href="img/document.jpg">
                                        <svg class="documents-item__zoom-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 485.213 485.213">
                                            <g>
                                                <path d="M363.909,181.955C363.909,81.473,282.44,0,181.956,0C81.474,0,0.001,81.473,0.001,181.955s81.473,181.951,181.955,181.951    C282.44,363.906,363.909,282.437,363.909,181.955z M181.956,318.416c-75.252,0-136.465-61.208-136.465-136.46    c0-75.252,61.213-136.465,136.465-136.465c75.25,0,136.468,61.213,136.468,136.465    C318.424,257.208,257.206,318.416,181.956,318.416z" fill="#FFFFFF"/>
                                                <path d="M471.882,407.567L360.567,296.243c-16.586,25.795-38.536,47.734-64.331,64.321l111.324,111.324    c17.772,17.768,46.587,17.768,64.321,0C489.654,454.149,489.654,425.334,471.882,407.567z" fill="#FFFFFF"/>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <h3 class="documents-item__title">
                                Название документа  
                            </h3>
                        </div>
                    </div>
                    <div>
                        <div class="documents-item">
                            <div class="documents-item__img-container">
                                <img class="documents-item__img" src="img/document.jpg" alt="">
                                <div class="documents-item__zoom" uk-lightbox>
                                    <a href="img/document.jpg">
                                        <svg class="documents-item__zoom-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 485.213 485.213">
                                            <g>
                                                <path d="M363.909,181.955C363.909,81.473,282.44,0,181.956,0C81.474,0,0.001,81.473,0.001,181.955s81.473,181.951,181.955,181.951    C282.44,363.906,363.909,282.437,363.909,181.955z M181.956,318.416c-75.252,0-136.465-61.208-136.465-136.46    c0-75.252,61.213-136.465,136.465-136.465c75.25,0,136.468,61.213,136.468,136.465    C318.424,257.208,257.206,318.416,181.956,318.416z" fill="#FFFFFF"/>
                                                <path d="M471.882,407.567L360.567,296.243c-16.586,25.795-38.536,47.734-64.331,64.321l111.324,111.324    c17.772,17.768,46.587,17.768,64.321,0C489.654,454.149,489.654,425.334,471.882,407.567z" fill="#FFFFFF"/>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <h3 class="documents-item__title">
                                Название документа  
                            </h3>
                        </div>
                    </div>
                    <div>
                        <div class="documents-item">
                            <div class="documents-item__img-container">
                                <img class="documents-item__img" src="img/document.jpg" alt="">
                                <div class="documents-item__zoom" uk-lightbox>
                                    <a href="img/document.jpg">
                                        <svg class="documents-item__zoom-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 485.213 485.213">
                                            <g>
                                                <path d="M363.909,181.955C363.909,81.473,282.44,0,181.956,0C81.474,0,0.001,81.473,0.001,181.955s81.473,181.951,181.955,181.951    C282.44,363.906,363.909,282.437,363.909,181.955z M181.956,318.416c-75.252,0-136.465-61.208-136.465-136.46    c0-75.252,61.213-136.465,136.465-136.465c75.25,0,136.468,61.213,136.468,136.465    C318.424,257.208,257.206,318.416,181.956,318.416z" fill="#FFFFFF"/>
                                                <path d="M471.882,407.567L360.567,296.243c-16.586,25.795-38.536,47.734-64.331,64.321l111.324,111.324    c17.772,17.768,46.587,17.768,64.321,0C489.654,454.149,489.654,425.334,471.882,407.567z" fill="#FFFFFF"/>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <h3 class="documents-item__title">
                                Название документа  
                            </h3>
                        </div>
                    </div>
                    <div>
                        <div class="documents-item">
                            <div class="documents-item__img-container">
                                <img class="documents-item__img" src="img/document.jpg" alt="">
                                <div class="documents-item__zoom" role="zoom" uk-lightbox>
                                    <a href="img/document.jpg">
                                        <svg class="documents-item__zoom-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 485.213 485.213">
                                            <g>
                                                <path d="M363.909,181.955C363.909,81.473,282.44,0,181.956,0C81.474,0,0.001,81.473,0.001,181.955s81.473,181.951,181.955,181.951    C282.44,363.906,363.909,282.437,363.909,181.955z M181.956,318.416c-75.252,0-136.465-61.208-136.465-136.46    c0-75.252,61.213-136.465,136.465-136.465c75.25,0,136.468,61.213,136.468,136.465    C318.424,257.208,257.206,318.416,181.956,318.416z" fill="#FFFFFF"/>
                                                <path d="M471.882,407.567L360.567,296.243c-16.586,25.795-38.536,47.734-64.331,64.321l111.324,111.324    c17.772,17.768,46.587,17.768,64.321,0C489.654,454.149,489.654,425.334,471.882,407.567z" fill="#FFFFFF"/>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <h3 class="documents-item__title">
                                Название документа  
                            </h3>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php get_template_part('_footer'); ?>
</body>
</html>