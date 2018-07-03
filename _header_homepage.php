<?php /* Хэдер главной страницы*/ ?>
<header class="header header_homepage">
    <div class="header__top">
        <div class="uk-container uk-container-large">
            <div class="header__inner">
                <div class="header__leftside"></div>
                <div class="header__rightside">
                    <a class="header__phone" href="tel: <?php echo strip_tags(get_field('contacts_tel'), 54); ?>" target="_blank">
                        <?php the_field('contacts_tel', 54); ?>
                    </a>
                    <button class="menu-btn" type="button">
                        <div class="menu-btn__line menu-btn__line_first"></div>
                        <div class="menu-btn__line menu-btn__line_second"></div>
                        <div class="menu-btn__line menu-btn__line_third"></div>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="uk-container uk-container-large">
        <?php wp_nav_menu(
            array (
                'menu'=> 'header_menu',
                'container' => 'nav',
                'container_class' => 'header__menu',
                'menu_class' => '',
                'menu_id' => ''
            )
        ); ?>
        </div>
    </div>
</header>