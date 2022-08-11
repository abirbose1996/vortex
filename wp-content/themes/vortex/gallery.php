<?php
/**
/* Template Name: Gallery
 *
 * Displays Only Gallery template
 *
 * @package WordPress
 * @subpackage buildline
 * @since buildline 1.0
 */
 get_header(); ?>

    <section class="inner-banner">
      <img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/inner-banner-img1.jpg" alt="">
      <div class="inner-banner-cont">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1> Gallery </h1>
                </div>
            </div>
        </div>
      </div>
    </section>

    <section id="gallery" class="gallery-page-wrapper">
        <div class="container">
            
            <div id="image-gallery">
                <div class="row">
                    
                <?php
                   
                   $args = array( 'post_type' => 'gallery', 'order' => 'ASC', 'posts_per_page' => -1 );
                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post );
                    $informationimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'true');
                
                ?>
                
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-4 image">
                      <div class="img-wrapper">
                        <a href="<?php echo $informationimage[0]; ?>"><img src="<?php echo $informationimage[0]; ?>" class="img-responsive"></a>
                        <div class="img-overlay">
                          <div class="icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery-zoom-icon.png"></div>
                        </div>
                      </div>
                    </div>

                    <?php
                      endforeach; 
                      wp_reset_postdata();
                    ?> 
                    
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>