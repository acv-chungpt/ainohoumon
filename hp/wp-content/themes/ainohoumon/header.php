<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<?php wp_head(); ?>

    <head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta http-equiv="content-style-type" content="text/css" />
        <meta http-equiv="content-script-type" content="text/javascript" />
        <meta name="author" content="" />
        <meta name="keyword" content="" />
        <meta name="description" content="<?php echo trim(wp_title('', false)); if(wp_title('', false)) { echo ' - '; } bloginfo('description'); ?>" />
        <title>
            <?php echo trim(wp_title('', false)); if(wp_title('', false)) { echo ' - '; } bloginfo('name'); ?>
        </title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,print" />
        <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    </head>

    <body<?php if(is_home()): ?> id="toppage"
        <?php endif; ?>>

            <div id="wrapper">

                <!-- ヘッダー -->
                <div id="header">
                    <h1>
                        <?php bloginfo('name'); ?>
                    </h1>
                </div>
                <!-- / ヘッダー -->

                <!-- トップナビゲーション -->
                <ul id="topnav" class="nav">
                    <li>
                        <a href="/hp" id="home">
                            <span>
                                <img src="<?php bloginfo('template_directory');?>/images/icon_4.png" />
                            </span>
                            <p>トップページ</p>
                        </a>
                    </li>
                    <li>
                        <a href="/hp/gaiyo" id="about">
                            <span>
                                <img src="<?php bloginfo('template_directory');?>/images/icon_5.png" />
                            </span>
                            <p>会社概要</p>
                        </a>
                    </li>
                    <li>

                        <a href="/hp/houmon" id="menu">
                            <span>
                                <img src="<?php bloginfo('template_directory');?>/images/icon_1.png" />
                            </span>
                            <p>事業概要</p>
                        </a>
                    </li>
                    <li>
                        <a href="/hp/contactus" id="faq">
                            <span>
                                <img src="<?php bloginfo('template_directory');?>/images/icon_2.png" />
                            </span>
                            <p>お問い合わせ</p>
                        </a>
                    </li>
                    <li>
                        <a href="/hp/boshu" id="map">
                            <span>
                                <img src="<?php bloginfo('template_directory');?>/images/icon_3.png" />
                            </span>
                            <p>求人募集</p>
                        </a>
                    </li>
                </ul>
                <!-- トップナビゲーション -->

                <!-- コンテンツ -->
                <div id="container">
