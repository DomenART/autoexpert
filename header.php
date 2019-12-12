<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/dist/main.css">
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
</head>