<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package euc
 */

?>


<!--           start footer-->
<div class="footer-container">
    <footer class="wrapper">

        <div class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="logo-box pb-4">
                            <?php  the_custom_logo(); ?>
                        </div>
                        <p class="prag footer-prag pb-4">
                            <?php  the_field("footer_paragraph", "option"); ?>
                        </p>
                        <ul class="social_media_list">
                            <?php if ( have_rows('social_media_list' , "option") ) : ?>
                            <?php while( have_rows('social_media_list' , "option") ) : the_row(); ?>
                            <li>
                                <a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('icon'); ?></a>
                            </li>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6 col-6">
                        <div class="footer-list">
                            <h3 class="title"><?php the_field("foorer_list_1", "option") ?></h3>
                            <?php
										wp_nav_menu(
											array(
												'theme_location' => 'footer-list-1',
												'menu_id'        => 'primary-menu',
											)
										);
										?>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-6">
                        <div class="footer-list">
                            <h3 class="title"><?php the_field("foorer_list_2", "option") ?></h3>
                            <?php
										wp_nav_menu(
											array(
												'theme_location' => 'footer-list-2',
												'menu_id'        => 'primary-menu',
											)
										);
										?>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-6">
                        <div class="footer-list">
                            <h3 class="title"><?php the_field("foorer_list_3", "option") ?></h3>
                            <?php
										wp_nav_menu(
											array(
												'theme_location' => 'footer-list-3',
												'menu_id'        => 'primary-menu',
											)
										);
										?>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-6">
                        <div class="footer-list">
                            <h3 class="title"><?php the_field("foorer_list_4", "option") ?></h3>
                            <?php
										wp_nav_menu(
											array(
												'theme_location' => 'footer-list-4',
												'menu_id'        => 'primary-menu',
											)
										);
										?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copy-right">
                            <p class="prag"><?php the_field("copy_right", "option") ?><a
                                    href="<?php the_field("copy_right_link", "option") ?>"><?php the_field("copy_right_link_text", "option") ?></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
</div>
<!--           end footer-->
<div class="overlay"></div>



</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>