<?php
/**
 * Template Name: Page with Right Sidebar
**/

get_header(); ?>

<?php do_action( 'advance_ecommerce_store_pageright_header' ); ?>

<div class="container">
    <main role="main" id="maincontent" class="middle-align row my-0 mx-auto py-3 px-0">        
        <div class="background-img-skin col-lg-8 col-md-8">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_post_thumbnail(); ?>
                <h1><?php the_title(); ?></h1>
                <div class="entry-content"><?php the_content();?></div>
            <?php endwhile; // end of the loop. ?>
            <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
            ?>
        </div>
        <div id="sidebar" class="col-lg-4 col-md-4 my-3 mx-0">
            <?php dynamic_sidebar('sidebar-2'); ?>
        </div>
        <div class="clear"></div> 
    </main>   
</div>

<?php do_action( 'advance_ecommerce_store_pageright_footer' ); ?>

<?php get_footer(); ?>