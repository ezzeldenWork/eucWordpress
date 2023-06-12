<?php
/* Template Name: Home Page */
?>

<?php get_header(); ?>

<!-- start intro-section -->
<div class="intro-section">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6">
                <div class="intro-content">
                    <h1 class="intro-title">
                        <?php the_field("intro_title"); ?>
                    </h1>
                    <p class="prag pt-4 pb-4">
                        <?php the_field("intro_paragraph", false, false); ?>
                    </p>
                    <div class="button-box">
                        <a href="<?php the_field("intro_button_link"); ?>"><?php the_field("intro_button_text"); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-first-custom">
                <div class="intro-img">
                    <img src="<?php the_field("intro_image"); ?>" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end intro-section -->

<div class="courses-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-box">
                    <h4 class="sub-title pb-2">
                        <?php the_field("course_sub_section"); ?>
                    </h4>
                    <h3 class="section-title">
                        <?php the_field("course_section_title"); ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $args = [
                'post_type' => 'courses',
                'posts_per_page' => 6,
            ];
            $courses_query = new WP_Query($args);
            while ($courses_query->have_posts()):
                $courses_query->the_post(); ?>


            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <div class="courses-box">




                    <?php if (in_category('english') or in_category('english-ar')) {
                        $backImg = "usa.jpg";
                    } elseif (in_category('Spain') or in_category('Spain-ar')) {
                        $backImg = "Spain.jpg";
                    } else {
                        $backImg = "usa.jpg";
                    } ?>
                    <div class="icon-box"
                        style="background-image : url('<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $backImg; ?>')">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/courses-box.svg"
                            alt="courses-box.svg" class="img-fluid">
                    </div>
                    <div class="content-box">
                        <h4 class="course-title">
                            <?php the_title(); ?>
                        </h4>
                        <h4 class="instructor-name">
                            <i class="fa-solid fa-user"></i> <?php the_title(); ?>
                        </h4>
                        <div class="level-container">
                            <div class="level-box">
                                <span>
                                    <i class="fas fa-signal"></i>
                                    (<?php the_field("level_name"); ?>)
                                    <?php the_field("level_numebr"); ?>
                                </span>
                            </div>
                            <div class="level-box">
                                <span>
                                    <i class="fas fa-book-open"></i>
                                    <?php the_field("sessions_number"); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <span class="states"
                        style="  background-color:<?php the_field("states_color"); ?>"><?php the_field("states"); ?></span>
                    <a href="<?php the_permalink(); ?>" class="stretched-link"></a>
                </div>

            </div>


            <?php
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>
</div>






<div class="service-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-box">
                    <h4 class="sub-title pb-2">
                        <?php the_field("service_sub_section"); ?>
                    </h4>
                    <h3 class="section-title">
                        <?php the_field("service_section_title"); ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $args = [
                'post_type' => 'services',
                'posts_per_page' => 4,
            ];
            $counter = 0;
            $service_query = new WP_Query($args);
            while ($service_query->have_posts()):

                $service_query->the_post();
                $counter++;
                ?>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-box <?php if ($counter % 2 == 0) {
                    echo 'red-box';
                } ?>">
                    <div class="icon-box">
                        <?php the_field("service_icon"); ?>
                    </div>
                    <div class="service-content">
                        <h3 class="title">
                            <?php the_title(); ?>
                        </h3>
                        <p class="prag">
                            <?php the_excerpt(); ?>
                        </p>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="stretched-link"></a>
                </div>
            </div>

            <?php
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>
</div>



<div class="about-section section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="about-img">
                    <img src="<?php the_field('about_image'); ?>" alt="<?php the_field('about_image'); ?>"
                        class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-section">

                    <div class="section-title-box text-end">
                        <h4 class="sub-title pb-2">
                            <?php the_field("about_sub_section"); ?>
                        </h4>
                        <h3 class="section-title black-item">
                            <?php the_field("about_section_title"); ?>
                        </h3>
                        <p class="prag sm-prag mt-4">
                            <?php the_field("about_section_paragraph"); ?>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



<div class="instructors-section  section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-box">
                    <h4 class="sub-title pb-2">
                        <?php the_field("instructors_sub_section"); ?>
                    </h4>
                    <h3 class="section-title">
                        <?php the_field("instructors_section_title"); ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $args = [
                'post_type' => 'instructors',
                'posts_per_page' => 4,
            ];
            $instructors_query = new WP_Query($args);
            while ($instructors_query->have_posts()):
                $instructors_query->the_post(); ?>

            <div class="col-lg-3 col-md-6 col-6 mb-4">
                <div class="instructors-box">
                    <div class="img-box">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_url(); ?>"
                            class="img-fluid">
                    </div>
                    <div class="content-box">
                        <h4 class="instructors-name"><?php the_title(); ?></h4>
                        <h5 class="job-name"><?php the_field("instructors_job_name"); ?></h5>
                    </div>
                </div>
            </div>


            <?php
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>
</div>



<!-- <div class="feedback-section back-section section-padding section-margin">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-box">
                    <h4 class="sub-title pb-2">
                        <?php the_field("feedback_sub_section"); ?>
                    </h4>
                    <h3 class="section-title">
                        <?php the_field("feedback_section_title"); ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="feedback-slider">

                    <?php if (have_rows('feedback_section_slider', "option")): ?>

                    <?php while (have_rows('feedback_section_slider', "option")):
                        the_row(); ?>
                    <div class="feedback-slider-item">
                        <div class="feedback-slider-item-img-name-box">
                            <img src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('image'); ?>"
                                class="img-fluid">
                            <div class="name-box">
                                <h2 class="name">
                                    <?php the_sub_field('name'); ?>
                                </h2>
                                <h2 class="job">
                                    <?php the_sub_field('job_name'); ?>
                                </h2>
                            </div>
                        </div>
                        <div class="content">
                            <p class="prag">
                                <?php the_sub_field('paragraph'); ?>
                            </p>
                        </div>
                    </div>
                    <?php
                    endwhile; ?>

                    <?php endif; ?>


                </div>
            </div>
        </div>
    </div>
</div> -->


<div class="blog-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-box">
                    <h4 class="sub-title pb-2">
                        <?php the_field("blog_sub_section"); ?>
                    </h4>
                    <h3 class="section-title">
                        <?php the_field("blog_section_title"); ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
            $the_query = new WP_Query( 'posts_per_page=3' );
            
            if ( $the_query ->
            have_posts()): while ( $the_query -> have_posts()): $the_query -> the_post(); ?>
            <?php  ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="blog-box">
                    <div class="blog-img" style="background-image: url('<?php the_post_thumbnail_url() ?>')"></div>
                    <div class="content-box">
                        <div class="date-box">
                            <span class="item"><i class="fas fa-clock"></i> <?php echo get_the_date(); ?> </span>
                            <span class="item"><i class="fas fa-user"></i> <?php echo get_the_author(); ?> </span>
                        </div>
                        <h4 class="blog-title"> <a href="<?php the_permalink(  ) ?>"><?php the_title() ?> </a></h4>
                        <p class="prag"><?php the_excerpt() ?></p>
                        <div class="read-button">
                            <a href="<?php the_permalink() ?>">
                                <?php if(is_rtl()) {echo 'اقرأ المزيد';} else {echo 'Read More';} ?> </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                endif;
                ?>

        </div>
    </div>
</div>



<div class="faq-section section-padding">
    <div class="container">
        <div class="row align-items-center  justify-content-between">
            <div class="col-lg-7 col-md-12">
                <div class="section-title-box text-end">
                    <h4 class="sub-title pb-2">
                        <?php the_field("faq_sub_title", "option"); ?>
                    </h4>
                    <h3 class="section-title">
                        <?php the_field("faq_section_title" , "option"); ?>
                    </h3>
                </div>
                <div class="faq-list-box">
                    <div class="accordion" id="accordionExample">



                        <?php if ( have_rows('faq_list', "option") ) : ?>

                        <?php while( have_rows('faq_list', "option") ) : the_row(); ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-<?php echo get_row_index(); ?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-<?php echo get_row_index(); ?>" aria-expanded="true"
                                    aria-controls="collapse-<?php echo get_row_index(); ?>">
                                    <?php the_sub_field('faq_title'); ?>
                                </button>
                            </h2>
                            <div id="collapse-<?php echo get_row_index(); ?>" class="accordion-collapse collapse "
                                aria-labelledby="faq-<?php echo get_row_index(); ?>" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php the_sub_field('faq_description'); ?>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="faq-image">
                    <img src="<?php the_field('faq_home_photo', 'option'); ?>" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();
?>