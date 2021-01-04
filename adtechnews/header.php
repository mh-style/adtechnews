<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="mh-navbar-style-1 mh-bg-gold">
            <div class="mh-container">
                <div class="mh-navbar-style-1-body">
                    <a href="#" class="mh-link mh-nav-brand">
                        <?php
                            if(function_exists('the_custom_logo')){
                                the_custom_logo();
                            }else{
                                bloginfo('name');
                            }
                        ?>
                    </a>
                    <button class="mh-toggle-button">
                        <span class="mh mh-menu-alt"></span>
                    </button>
                    <div class="collapse" id="toggle-collapse">
                         <?php
                            if(has_nav_menu('primary-menu')){
                                wp_nav_menu(array(
                                    'theme_location' => 'primary-menu',
                                    'container' => '',
                                    'before' => '<li class="mh-nav-link">',
                                    'after' => '</li>',
                                    'fallback_cb'  => 'wp_page_menu',
                                    'items_wrap' => '<ul class="mh-navbar-nav mh-m-0-a">%3$s</ul>'
                                ));
                            }
                         ?>
                        <!-- <ul class="mh-navbar-nav mh-m-0-a">
                            <li class="mh-nav-link">
                                <a href="#" class="mh-link mh-color-white">Home</a>
                            </li>
                            <li class="mh-nav-link">
                                <a href="#" class="mh-link mh-color-white">People</a>
                            </li>
                            <li class="mh-nav-link">
                                <a href="#" class="mh-link mh-color-white">Design</a>
                            </li>
                            <li class="mh-nav-link">
                                <a href="#" class="mh-link mh-color-white">Travel</a>
                            </li>
                            <li class="mh-nav-link">
                                <a href="#" class="mh-link mh-color-white">About Us</a>
                            </li>
                        </ul> -->
                        <div class="mh-search">
                            <?php get_search_form();?>
                            <!-- <form class="mh-form-group">
                                <input type="search" class="mh-input-control" placeholder="Search" />
                                <button type="submit" class="mh-btn mh-btn-submit">
                                    <i class="mh mh-search2"></i>
                                </button>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>