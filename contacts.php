<?php /* Template Name: Контакты */ ?>
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
        <div class="uk-container">
            <div class="contacts__box">
                <div>
                    <div class="contacts-info">
                        <h1 class="contacts__page-title page-title">
                            <?php the_title(); ?>
                        </h1>
                        <div class="contacts-info__row">
                            <div class="contacts-info__icon">
                                <svg width="19px" height="19px" viewBox="0 0 16.877 16.877">
                                    <g>
                                        <path d="M5.301,5.587L1.404,1.688c0.503-0.503,1.005-1.007,1.509-1.511C3.146-0.056,3.522-0.06,3.756,0.17l3.036,3.039   c0.232,0.232,0.232,0.614-0.003,0.848L6.124,4.721L5.505,5.34C5.429,5.417,5.36,5.499,5.301,5.587z M8.507,11.938   c-0.638-0.549-1.25-1.132-1.844-1.725C6.07,9.616,5.489,9.006,4.939,8.365c-0.45-0.52-0.538-1.273-0.303-1.907L0.636,2.457   c-0.931,0.957-0.812,3.33,0.208,5.415c0.438,0.902,1.006,1.716,1.593,2.49c0.586,0.768,1.229,1.494,1.906,2.176   c0.679,0.681,1.401,1.327,2.171,1.913c0.774,0.589,1.59,1.153,2.486,1.59c2.088,1.019,4.462,1.131,5.418,0.199l-4.001-4.001   C9.783,12.474,9.029,12.387,8.507,11.938z M16.702,13.119l-3.036-3.037c-0.233-0.23-0.615-0.23-0.848,0.003h-0.002l-0.667,0.666   l-0.615,0.618c-0.076,0.076-0.159,0.143-0.247,0.205l3.896,3.898c0.504-0.505,1.007-1.007,1.512-1.51   C16.93,13.729,16.935,13.352,16.702,13.119z" fill="#11235a"/>
                                    </g>
                                    </svg>
                            </div>
                            <div class="contacts-info__text contacts-info__text_tel">
                                <a href="tel: <?php echo strip_tags(get_field('contacts_tel')); ?>">
                                <?php the_field('contacts_tel'); ?>
                                </a>
                            </div>
                        </div>
                        <div class="contacts-info__row">
                            <div class="contacts-info__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 373.574 373.574" style="enable-background:new 0 0 373.574 373.574;" xml:space="preserve" width="19px" height="15px">
                                    <g>
                                        <path d="M314.327,64.559H58.807c-14.497-0.721-28.746,3.953-40,13.12l14.48,9.36l109.92,71.2c1.074,0.375,2.056,0.975,2.88,1.76    l40,26l153.68-98.88l14.56-9.44C342.903,68.829,328.774,64.194,314.327,64.559z" fill="#11235a"/>
                                    </g>
                                    <g>
                                        <path d="M22.247,98.799l-13.52-8.8c-5.771,10.076-8.753,21.508-8.64,33.12l-0.08,127.12c-0.203,13.555,3.947,26.818,11.84,37.84    l11.36-11.76l104.72-108.8L22.247,98.799z" fill="#11235a"/>
                                    </g>
                                    <g>
                                        <path d="M338.807,287.119l-106.8-110.72l-40.8,26.4l-1.36,0.64h-0.64c-0.664,0.084-1.336,0.084-2,0c-0.664,0.084-1.336,0.084-2,0    h-0.64l-1.92-0.64l-40.48-26.24l-107.36,110.88l-11.52,11.92c10.566,6.796,22.967,10.175,35.52,9.68h256    c12.504,0.08,24.762-3.478,35.28-10.24L338.807,287.119z" fill="#11235a"/>
                                    </g>
                                    <g>
                                        <path d="M373.527,250.239v-126.88c0.357-11.66-2.552-23.187-8.4-33.28l-13.6,8.72l-105.6,68.4l104.64,108.88l11.44,11.92    C370.002,277.075,374.063,263.766,373.527,250.239z" fill="#11235a"/>
                                    </g>
                                </svg>
                            </div>
                            <div class="contacts-info__text">
                                <a href="mailto: <?php the_field('contacts_email'); ?>">
                                <?php the_field('contacts_email'); ?>
                                </a>
                            </div>
                        </div>
                        <div class="contacts-info__row">
                            <div class="contacts-info__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="14px" height="19px">
                                    <path d="M256,0C153.755,0,70.573,83.182,70.573,185.426c0,126.888,165.939,313.167,173.004,321.035    c6.636,7.391,18.222,7.378,24.846,0c7.065-7.868,173.004-194.147,173.004-321.035C441.425,83.182,358.244,0,256,0z M256,278.719    c-51.442,0-93.292-41.851-93.292-93.293S204.559,92.134,256,92.134s93.291,41.851,93.291,93.293S307.441,278.719,256,278.719z" fill="#11235a"/>
                                 </svg>   
                            </div>
                            <div class="contacts-info__text">
                            <?php the_field('contacts_address'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="contacts-map">
                        <div class="contacts-map__preloader js-map-preloader">
                            <div class="contacts-map__preloader-text">Подождите, карта загружается...</div>
                            <div>
                                <svg class="contacts-map__preloader-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="30px" height="30px" viewBox="0 0 29.124 29.123" style="enable-background:new 0 0 29.124 29.123;" xml:space="preserve">
                                    <g>
                                        <path d="M7.922,7.938c3.215-3.215,8.132-3.674,11.847-1.402c-1.26,1.246-2.711,2.702-2.711,2.702    c-1.017,1.219,0.125,1.922,0.705,1.904l6.788-0.002c0.358,0,0.651,0.002,0.651,0.002s0.296,0,0.655,0h1.316    c0.359,0,0.651-0.293,0.652-0.653V1.154c0.042-0.854-0.896-1.682-1.864-0.729c0,0-1.602,1.561-2.708,2.657    C17.597-1.05,9.623-0.583,4.512,4.528C1.53,7.51,0.139,11.466,0.306,15.373h4.83C4.965,12.704,5.881,9.979,7.922,7.938z" fill="#11235a"/>
                                        <path d="M23.987,13.75c0.171,2.669-0.745,5.394-2.786,7.435c-3.216,3.215-8.131,3.674-11.846,1.402    c1.258-1.246,2.71-2.703,2.71-2.703c1.016-1.219-0.125-1.922-0.705-1.902l-6.789,0.002c-0.358,0-0.651-0.002-0.651-0.002    s-0.296,0-0.655,0H1.946c-0.359,0-0.651,0.293-0.652,0.652v9.334c-0.041,0.854,0.896,1.682,1.865,0.729    c0,0,1.601-1.561,2.708-2.656c5.66,4.135,13.632,3.666,18.743-1.444c2.98-2.981,4.373-6.938,4.207-10.845L23.987,13.75    L23.987,13.75z" fill="#11235a"/>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
                        <div class="contacts-map__body" id="map"></div>
                    </div>
                </div>
                <div>
                    <form class="contacts-form" name="feedback" novalidate>
                        <div class="contacts-form__title">Обратная связь</div>
                        <div class="contacts-form__row">
                            <input class="uk-input" type="text" name="username" title="Пожалуйста, напишите своё имя" placeholder="Имя:">
                        </div>
                        <div class="contacts-form__row">
                            <input class="uk-input" type="email" name="email" placeholder="E-mail*:" title="Пожалуйста, заполните это поле в формате mail@domain.ru" pattern="^[a-zA-Z0-9-_]+@[a-zA-Z]+\.[a-zA-Z]{2,6}$" required>
                        </div>
                        <div class="contacts-form__row">
                            <input class="uk-input js-tel-input" type="tel" name="tel" pattern="^\+7\s\([0-9]{3}\)\s[0-9]{3}-[0-9]{2}-[0-9]{2}$" title="Пожалуйста, заполните это поле в формате +7 (XXX) XXX-XX-XX" placeholder="Телефон:">
                        </div>
                        <div class="contacts-form__row">
                            <textarea class="uk-textarea" name="message" title="Пожалуйста, напишите своё сообщение" placeholder="Сообщение*:" required></textarea>
                        </div>
                        <button class="contacts-form__submit" type="submit">Отправить</button>
                        <div class="contacts-form__tip">
                            Поля, отмеченные* обязательные для заполнения
                        </div>
                        <div class="contacts-form__result">
                            <svg class="contacts-form__result-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="50px" height="50px" viewBox="0 0 29.124 29.123" style="enable-background:new 0 0 29.124 29.123;" xml:space="preserve">
                                <g>
                                    <path d="M7.922,7.938c3.215-3.215,8.132-3.674,11.847-1.402c-1.26,1.246-2.711,2.702-2.711,2.702    c-1.017,1.219,0.125,1.922,0.705,1.904l6.788-0.002c0.358,0,0.651,0.002,0.651,0.002s0.296,0,0.655,0h1.316    c0.359,0,0.651-0.293,0.652-0.653V1.154c0.042-0.854-0.896-1.682-1.864-0.729c0,0-1.602,1.561-2.708,2.657    C17.597-1.05,9.623-0.583,4.512,4.528C1.53,7.51,0.139,11.466,0.306,15.373h4.83C4.965,12.704,5.881,9.979,7.922,7.938z" fill="#11235a"/>
                                    <path d="M23.987,13.75c0.171,2.669-0.745,5.394-2.786,7.435c-3.216,3.215-8.131,3.674-11.846,1.402    c1.258-1.246,2.71-2.703,2.71-2.703c1.016-1.219-0.125-1.922-0.705-1.902l-6.789,0.002c-0.358,0-0.651-0.002-0.651-0.002    s-0.296,0-0.655,0H1.946c-0.359,0-0.651,0.293-0.652,0.652v9.334c-0.041,0.854,0.896,1.682,1.865,0.729    c0,0,1.601-1.561,2.708-2.656c5.66,4.135,13.632,3.666,18.743-1.444c2.98-2.981,4.373-6.938,4.207-10.845L23.987,13.75    L23.987,13.75z" fill="#11235a"/>
                                </g>
                            </svg>
                            <div class="contacts-form__result-text"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>  
    </main> 
    <?php get_template_part('_footer'); ?>
</body>
</html>