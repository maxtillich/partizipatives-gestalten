<!DOCTYPE html>
<html <?php language_attributes(); ?> ng-app="Wohnzimmer">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title>Wohnzimmerkegelparty <?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php /* echo get_template_directory_uri(); */ ?>
    <link rel="stylesheet"  href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all">
    <script type="text/javascript" src="//use.typekit.net/zjr8kqo.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
    <div class="overlay">
        <a href="http://www.fh-potsdam.de/studieren/design/" title="FH Potsdam" class="fhp">FH Potsdam</a>
        <h1><a href="/">Wohnzimmerkegelparty</a></h1>
        <aside>
            Freitag, 18. Juli 2014<br>
            Potsdam
        </aside>

        <nav class="units-row units-split">
            <div class="current unit-50">
                <a href="/wohnzimmer" title="Zum Wohnzimmer"><span>Wohnzimmer</span></a>
            </div>
            <div class="unit-50">
                <a href="/kegeln" title="Zum Kegeln"><span>Kegeln</span></a>
            </div>
        </nav>
    </div>
</header>