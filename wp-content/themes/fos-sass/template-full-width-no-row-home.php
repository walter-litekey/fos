<?php
/*
Template Name: Home - Full Width (No sidebar / No row)
*/
?>

    <div class="home-custom">
        <?php get_header(); ?>

            <div id="content">

                <div id="inner-content" class="">

                    <main id="main" class="large-12 medium-12" role="main">

<?php include('parts/slider-fos.php');?>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <?php get_template_part( 'parts/loop', 'page' ); ?>

                                <?php endwhile; endif; ?>

                    </main>
                    <!-- end #main -->

                </div>
                <!-- end #inner-content -->

            </div>
            <!-- end #content -->

            <?php get_footer(); ?>
    </div>
