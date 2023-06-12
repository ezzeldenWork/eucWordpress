<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package euc
 */

?>
<!doctype html>


<html <?php language_attributes(); if(is_rtl()): echo 'dir="rtl"'; else: echo 'dir="ltr"';  endif ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' );  ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">

        <!--       start header-->
        <div class="header-container">
            <header class="wrapper">
                <div class="header-section">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-1 col-3">
                                <div class="logo-box">
                                    <?php  the_custom_logo(); ?>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-1">
                                <div class="nav-box">
                                    <div class="close-icon">
                                        <i class="fas fa-times"></i>
                                    </div>
                                    <?php
										wp_nav_menu(
											array(
												'theme_location' => 'menu-1',
												'menu_id'        => 'primary-menu',
											)
										);
										?>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-8">
                                <div class="right-box">
                                    <div class="open-icon">
                                        <i class="fas fa-bars"></i>
                                    </div>
                                    <div class="button-box">
                                        <a
                                            href="<?php 
                                        if(is_rtl()): the_field("header_button_link_ar","option"); else: the_field("header_button_link","option");  endif  ?>"><?php if(is_rtl()): the_field("header_button_text_ar","option"); else: the_field("header_button_text","option");  endif ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!--       end header-->