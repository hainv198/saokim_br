<?php
/**
 * Template Name: Custom home
 */
get_header(); ?>

<main role="main" id="maincontent">
  <div class="slider-category my-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <div class="categry-title p-3">
            <i class="fa fa-bars me-3" aria-hidden="true"></i><span><?php echo esc_html_e('CATEGORIES','advance-ecommerce-store'); ?></span>
          </div>
          <?php if(class_exists('woocommerce')){ ?>
            <div class="product-category">
              <?php
                $args = array(
                  //'number'     => $number,
                  'orderby'    => 'title',
                  'order'      => 'ASC',
                  'hide_empty' => 0,
                  'parent'  => 0
                  //'include'    => $ids
                );
                $product_categories = get_terms( 'product_cat', $args );
                $count = count($product_categories);
                if ( $count > 0 ){
                  foreach ( $product_categories as $product_category ) {
                    $cats_id   = $product_category->term_id;
                    $cat_link = get_category_link( $cats_id );
                    $thumbnail_id = get_term_meta( $product_category->term_id, 'thumbnail_id', true ); // Get Category Thumbnail
                    $image = wp_get_attachment_url( $thumbnail_id );
                    if ($product_category->category_parent == 0) {
                      ?>
                      <li class="drp_dwn_menu p-3"><a href="<?php echo esc_url(get_term_link( $product_category ) ); ?>">
                        <?php
                        if ( $image ) {
                          echo '<img class="thulg_img me-3" src="' . esc_url( $image ) . '" alt="" />';
                        }
                      echo esc_html( $product_category->name ); ?></a></li>
                     <?php
                    }
                  }
                }
              ?>
            </div>
          <?php }?>
        </div>
        <div class="col-lg-9 col-md-9">
          <?php do_action( 'advance_ecommerce_store_before_slider' ); ?>
          <?php if( get_theme_mod( 'advance_ecommerce_store_slider_hide', false) != '' || get_theme_mod( 'advance_ecommerce_store_responsive_slider', false) != '') { ?>
          <div id="slider">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-interval="<?php echo esc_attr(get_theme_mod('advance_ecommerce_store_slider_speed_option', 3000)); ?>">
              <?php $advance_ecommerce_store_slider_pages = array();
                for ( $count = 1; $count <= 4; $count++ ) {
                  $mod = intval( get_theme_mod( 'advance_ecommerce_store_slider_page' . $count ));
                  if ( 'page-none-selected' != $mod ) {
                    $advance_ecommerce_store_slider_pages[] = $mod;
                  }
                }
                if( !empty($advance_ecommerce_store_slider_pages) ) :
                  $args = array(
                    'post_type' => 'page',
                    'post__in' => $advance_ecommerce_store_slider_pages,
                    'orderby' => 'post__in'
                  );
                  $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                  $i = 1;
              ?>     
              <div class="carousel-inner" role="listbox">
                <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
                  <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
                    <?php if(has_post_thumbnail()){
                      the_post_thumbnail();
                      } else{?>
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/theme-block-pattern/images/banner.png" alt="" />
                    <?php } ?>
                    <div class="carousel-caption">
                      <div class="inner_carousel">
                        <?php if( get_theme_mod('advance_ecommerce_store_slider_title_Show_hide',true) != ''){ ?>
                          <h1 class="text-uppercase"><?php the_title(); ?></h1>
                          <hr class="slidehr mt-0 mb-3">
                        <?php } ?>
                        <?php if( get_theme_mod('advance_ecommerce_store_slider_content_Show_hide',true) != ''){ ?>
                          <p><?php $advance_ecommerce_store_excerpt = get_the_excerpt(); echo esc_html( advance_ecommerce_store_string_limit_words( $advance_ecommerce_store_excerpt, esc_attr(get_theme_mod('advance_ecommerce_store_slider_excerpt_length','15')))); ?></p>
                        <?php } ?>
                        <?php if( get_theme_mod('advance_ecommerce_store_slider_button','READ MORE') != ''){ ?>
                          <div class="more-btn mt-md-4">              
                            <a href="<?php the_permalink(); ?>" class="py-2 px-3"><?php echo esc_html(get_theme_mod('advance_ecommerce_store_slider_button','READ MORE'));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('advance_ecommerce_store_slider_button','READ MORE'));?></span></a>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                <?php $i++; endwhile; 
                wp_reset_postdata();?>
              </div>
              <?php else : ?>
                <div class="no-postfound"></div>
              <?php endif;
              endif;?>
              <a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon py-2 px-3" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                <span class="screen-reader-text"><?php esc_html_e( 'Previous','advance-ecommerce-store' );?></span>
              </a>
              <a class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon py-2 px-3" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                <span class="screen-reader-text"><?php esc_html_e( 'Next','advance-ecommerce-store' );?></span>
              </a>
            </div>
            <div class="clearfix"></div>
          </div>
          <?php } ?>
          <div class="product-service text-center">
            <div class="row">
              <?php 
                $advance_ecommerce_store_catData = get_theme_mod('advance_ecommerce_store_product_service');
                if($advance_ecommerce_store_catData){              
                $page_query = new WP_Query(array( 'category_name' => esc_html( $advance_ecommerce_store_catData ,'advance-ecommerce-store')));?>
                <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
                  <div class="col-lg-4 col-md-4">
                    <div class="service-border p-3">
                      <a href="<?php the_permalink(); ?>"><strong><?php the_title(); ?></strong><span class="screen-reader-text"><?php the_title(); ?></span></a>
                      <p><?php $advance_ecommerce_store_excerpt = get_the_excerpt(); echo esc_html( advance_ecommerce_store_string_limit_words( $advance_ecommerce_store_excerpt,5 ) ); ?></p>
                    </div>
                  </div>
                <?php endwhile;
                wp_reset_postdata();
                }
              ?>
            </div>
          </div>
          <?php do_action( 'advance_ecommerce_store_after_slider' ); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="sidebar-products my-5">
    <div class="container">
      <div class="row">
        <div id="sidebar" class="col-lg-3 col-md-3 my-3">
          <?php dynamic_sidebar('homepage-sidebar'); ?>
        </div>
        <div class="col-lg-9 col-md-9">
          <?php do_action( 'advance_ecommerce_store_before_product_section' ); ?>
          <?php if( get_theme_mod('advance_ecommerce_store_section_title') != '' || get_theme_mod('advance_ecommerce_store_product_page') != ''){ ?>
            <div class="product-page">
              <?php if( get_theme_mod('advance_ecommerce_store_section_title') != ''){ ?>
                <strong><?php echo esc_html(get_theme_mod('advance_ecommerce_store_section_title')); ?></strong>
              <?php }?>
              <?php $advance_ecommerce_store_slider_pages = array();
                $mod = absint( get_theme_mod( 'advance_ecommerce_store_product_page','advance-ecommerce-store'));
                if ( 'page-none-selected' != $mod ) {
                  $advance_ecommerce_store_slider_pages[] = $mod;
                }
                if( !empty($advance_ecommerce_store_slider_pages) ) :
                  $args = array(
                    'post_type' => 'page',
                    'post__in' => $advance_ecommerce_store_slider_pages,
                    'orderby' => 'post__in'
                  );
                  $query = new WP_Query( $args );
                  if ( $query->have_posts() ) :
                    $count = 0;
                    while ( $query->have_posts() ) : $query->the_post(); ?>
                      <?php the_content(); ?>
                    <?php $count++; endwhile; ?>
                  <?php else : ?>
                    <div class="no-postfound"></div>
                  <?php endif;
                endif;
                wp_reset_postdata()
              ?>
            </div>
          <?php }?>
          <?php do_action( 'advance_ecommerce_store_after_product_section' ); ?>
          <div id="content-ts">
            <?php while ( have_posts() ) : the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>