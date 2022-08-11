<?php
/**
/* Template Name: Services
 *
 * Displays Only Services template
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
                    <h1> Services </h1>
                </div>
            </div>
        </div>
      </div>
    </section>

    <section class="services-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="comon-title">
                        <h4>Fetaured Service</h4>
                        <h3> <strong>We provide the best services</strong> <br> for your help!</h3>
                    </div>
                </div>
               
               
                <?php
                        $args = array( 'post_type' => 'services', 'order' => 'ASC', 'posts_per_page' => -1 );
                        $myposts = get_posts( $args );
                        foreach ( $myposts as $post ) : setup_postdata( $post );
                        $informationimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'true');
                        
                    ?>
               
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="services-wrap">
                        <div class="srv-img">
                            <img class="img-fluid" src="<?php echo $informationimage[0]; ?>" alt="">
                        </div>
                        <div class="services-content">
                            <h4> <?php the_title(); ?> </h4>
                        </div>
                        <div class="services-hover-content">
                            <h4> <?php the_title(); ?> </h4>
                            <p><?php the_content(); ?></p>
                            <a class="btn read-btn" href=""> Read More <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                        </div>
                    </div>
                </div>

                
                <?php
                   endforeach; 
                   wp_reset_postdata();
                ?> 
                
            </div>
        </div>
    </section>

    <?php get_footer(); ?>