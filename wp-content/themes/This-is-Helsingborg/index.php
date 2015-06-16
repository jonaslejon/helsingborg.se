<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=EDGE">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Helsingborg stad</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="pubdate" content="<?php echo the_time('d M Y'); ?>">
    <meta name="moddate" content="<?php echo the_modified_time('d M Y'); ?>">

    <meta name="google-translate-customization" content="10edc883cb199c91-cbfc59690263b16d-gf15574b8983c6459-12">

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" type="image/x-icon">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-precomposed.png">

    <?php wp_head(); ?>
</head>
<body>
    <div class="site-wrapper">

        <header class="site-header">
            <div class="container">
                <div class="row">
                    <div class="columns large-12">
                        <a href="/" class="logotype"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/helsingborg.svg" alt="Helsingborg Stad"></a>
                        <nav class="navbar">
                            <ul class="nav">
                                <li><a href="#">Arbeta</a></li>
                                <li><a href="#">Bo, bygga &amp; miljö</a></li>
                                <li><a href="#">Förskola &amp; utbildning</a></li>
                                <li><a href="#">Kommun &amp; politik</a></li>
                                <li><a href="#">Omsorg &amp; stöd</a></li>
                                <li><a href="#">Trafik &amp; stadsplanering</a></li>
                                <li><a href="#">Uppleva &amp; göra</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <div class="hero" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/hero-example.jpg);">
            <div class="stripe"></div>
            <form class="hero-search center-vertical" method="post" action="#">
                <h2><strong>Hej,</strong> vad letar du efter?</h2>
                <div class="input-group">
                    <input type="search" name="q" placeholder="Här kan du skriva vad du letar efter…">
                    <button type="submit" class="btn btn-submit">Sök</button>
                </div>
            </form>
        </div>

        <section class="section-featured">
            <div class="container">
                <div class="row">

                    <div class="columns large-6">
                        <div class="box widget">
                            <h3><i class="fa fa-dot-circle-o"></i> Genvägar</h3>
                            <div class="box-content">
                                <ul class="list list-links">
                                    <li><a class="link-item" href="#">Sommarlovsaktiviteter 2015</a></li>
                                    <li><a class="link-item" href="#">Ansökan om bygglov</a></li>
                                    <li><a class="link-item" href="#">Ansökan till förskola</a></li>
                                    <li><a class="link-item" href="#">Felanmäl fel på gator, torg och parker</a></li>
                                    <li><a class="link-item" href="#">Tider för studentutspringet 2015</a></li>
                                    <li><a class="link-item" href="#">Barnets tider/schema på fritids</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="columns large-6">
                        <div class="box">
                            <h3><i class="fa fa-phone"></i> Helsingborgs Kontaktcenter</h3>
                            <div class="box-content">
                                <ul class="list">
                                    <li>
                                        <label>Telefonnummer</label>
                                        <span class="text-lg">042-10 50 00</span>
                                    </li>
                                    <li>
                                        <label>E-postadress</label>
                                        kontaktcenter@helsingborg.se
                                    </li>
                                    <li>
                                        <label>Öppettider</label>
                                        Mån–tor 07:00–19:00, Fre 07:00–17:00, Lör 10:00–15:00
                                    </li>
                                    <li>
                                        <label>Besöksadress</label>
                                        Stortorget 17, Helsingborg
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section-news">
            <div class="container">
                <div class="row">
                    <div class="columns large-12">
                        <h2 class="text-magenta"><i class="fa fa-newspaper-o"></i> Aktuellt i Helsingborg</h2>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <?php wp_footer(); ?>
</body>
</html>