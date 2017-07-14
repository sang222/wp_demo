<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<body>
<head>
    <base href="<?php echo bloginfo('template_url');?>/"></base>
    <title>The Minima Website Template | Home :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
    <!-- end google fonts -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--nav-->
    <script src="js/jquery.min.js"></script>
    <script>
        $(function() {
            var pull 		= $('#pull');
            menu 		= $('nav ul');
            menuHeight	= menu.height();

            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });

            $(window).resize(function(){
                var w = $(window).width();
                if(w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });
    </script>
</head>
<div class="body">
    <div class="wrap">
        <div class="wrapper">
            <!-- start header-->
            <div class="header">
                <div class="logo">
                    <a href="<?php echo get_home_url(); ?>"><img src="<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>" alt=""></a>
                </div>
                <!--START: FRAME_CATEGORY-->
                <?php
                    $nav = array (
                        'theme_location'  => 'menu_top',
                        'menu_class'      => 'cssmenu',
                        'container_class' => 'cssmenu'
                    );
                    wp_nav_menu( $nav );
                ?>
                <!--END: FRAME_CATEGORY-->
                <div class="clear"></div>
                <div class="top-nav">
                    <nav class="clearfix">
                        <!--START: FRAME_CATEGORY-->
                        <?php
                            $nav = array (
                                'theme_location'  => 'menu_top',
                            );
                            wp_nav_menu( $nav );
                        ?>
                        <!--END: FRAME_CATEGORY-->
                        <a href="#" id="pull">Menu</a>
                    </nav>
                </div>
            </div>