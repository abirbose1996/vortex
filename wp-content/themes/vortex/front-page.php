<?php
/**
/* Template Name: Home
 *
 * Displays Only Home template
 *
 * @package WordPress
 * @subpackage buildline
 * @since buildline 1.0
 */
 get_header(); ?>

    <section class="banner-wrapper">
        <div id="banner-slider" class="owl-carousel">
        
            <?php
                $args = array( 'post_type' => 'slider', 'order' => 'ASC', 'posts_per_page' => -1 );
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post );
                $informationimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'true');
                
            ?>
        
        <div class="banner-slider-wrap">
                <img class="img-fluid" src="<?php echo $informationimage[0]; ?>">
                <div class="banner-content-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="banner-content">
                                    <div class="h1">
                                        <?php the_title(); ?>
                                    </div>
                                    <p><?php the_content(); ?></p>
                                    <div class="bnr-btn-wrap">
                                        <ul>    
                                            <li>
                                                <?php $slider_btn = get_field('slider'); ?>
                                                <a class="btn btn-info" href="<?php echo $slider_btn['button_text_1_url']; ?>" data-toggle="modal" data-target="#GetQuoteModal"><?php echo $slider_btn['button_text_1'] ?></a>
                                            </li>
                                            <li>
                                                <a class="btn btn-light" href="<?php echo $slider_btn['button_text_2_url']; ?>"><?php echo $slider_btn['button_text_2'] ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
           <?php
             endforeach; 
             wp_reset_postdata();
             ?> 

        </div>
    </section>

    <?php $hpabtus = get_field('homepage_about_us'); ?>

    <section class="about-us-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mb-4">
                    <div class="about-left-img">
                        <img src="<?php echo $hpabtus['about_us_image']; ?>" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <div class="about-right-content">
                        <div class="comon-title mb-3">
                            <h4><?php echo $hpabtus['sub_title']; ?></h4>
                            <h3><?php echo $hpabtus['heading']; ?></h3>
                        </div>
                        <p><?php echo $hpabtus['paragraph']; ?></p>
                        <a class="btn btn-info" href="<?php echo $hpabtus['button_link']; ?>"> <?php echo $hpabtus['button_text']; ?> </a>
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
                <div class="col-12">
                    <div id="services-slider" class="owl-carousel">
                        
                    <?php
                        $args = array( 'post_type' => 'services', 'order' => 'ASC', 'posts_per_page' => -1 );
                        $myposts = get_posts( $args );
                        foreach ( $myposts as $post ) : setup_postdata( $post );
                        $informationimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'true');
                        
                    ?>
                    
                    <div class="services-slider-item">
                            <div class="services-wrap">
                                <div class="srv-img">
                                    <img class="img-fluid" src="<?php echo $informationimage[0]; ?>" alt="">
                                </div>
                                <div class="services-content">
                                    <h4> <?php the_title(); ?> </h4>
                                </div>
                                <div class="services-hover-content">
                                    <h4> <?php the_title(); ?> </h4>
                                    <p><?php the_content(); ?> </p>
                                    <a class="btn read-btn" href="#"> Read More <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
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
        </div>
    </section>

    <section id="gallery" class="gallery-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mb-4">
                    <div class="comon-title">
                        <h4>Our Gallery </h4>
                        <h3><strong>Some work from our </strong> memorable gallery.</h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac purus metus. In ornare convallis ullamcorper. Nunc pellentesque, risus eget faucibus iaculis, dui lacus semper nisl, a commodo velit urna quis urna. Pellentesque gravida risus eros,</p>
                </div>

            </div>
            <div id="image-gallery">
                <div class="row">
                    
                <?php
                   
                   $args = array( 'post_type' => 'gallery', 'order' => 'ASC', 'posts_per_page' => -1 );
                    $myposts = get_posts( $args );
                    foreach ( $myposts as $post ) : setup_postdata( $post );
                    $informationimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'true');
                
                ?>
                
                <div class="col-12 col-md-4 col-lg-4 mb-4">
                        <div class="image">
                            <div class="img-wrapper">
                                <a href="<?php echo $informationimage[0]; ?>"><img src="<?php echo $informationimage[0]; ?>" class="img-responsive"></a>
                                <div class="img-overlay">
                                  <div class="icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery-zoom-icon.png"></div>
                                </div>
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
        </div>
    </section>

    <section class="steps-reach-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mb-4">
                    <div class="comon-title">
                        <h4>Steps to Reach Here </h4>
                        <h3><strong>How we</strong> Work</h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac purus metus. In ornare convallis ullamcorper. Nunc pellentesque, risus eget faucibus iaculis, dui lacus semper nisl, a commodo velit urna quis urna. Pellentesque gravida risus eros,</p>
                </div>

            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4 steps-list">
                    <div class="steps-list-wrap">
                        <div class="steps-icon">
                            <img class="img-fluid normal-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/steps-agent-normal-icon.png" alt="">
                            <img class="img-fluid hover-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/steps-agent-hover-icon.png" alt="">
                        </div>
                        <h4>Book Our Service</h4>
                        <p>As a app web crawler expert, I help organizations adjust to the expanding significance.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4 steps-list">
                    <div class="steps-list-wrap">
                        <div class="steps-icon">
                            <img class="img-fluid normal-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/steps-estimate-normal-icon.png" alt="">
                            <img class="img-fluid hover-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/steps-estimate-hover-icon.png" alt="">
                        </div>
                        <h4>Estimate Budget</h4>
                        <p>As a app web crawler expert, I help organizations adjust to the expanding significance.</p>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4 steps-list">
                    <div class="steps-list-wrap">
                        <div class="steps-icon">
                            <img class="img-fluid normal-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/steps-hire-agent-normal-icon.png" alt="">
                            <img class="img-fluid hover-icon" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/steps-hire-agent-hover-icon.png" alt="">
                        </div>
                        <h4>Hire Us</h4>
                        <p>As a app web crawler expert, I help organizations adjust to the expanding significance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mb-4">
                    <div class="comon-title">
                        <h4>What Clients say about us</h4>
                        <h3><strong>Our </strong> Testimonials </h3>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ac purus metus. In ornare convallis ullamcorper. Nunc pellentesque, risus eget faucibus iaculis, dui lacus semper nisl, a commodo velit urna quis urna. Pellentesque gravida risus eros,</p>
                </div>
                <div class="col-12">
                    <div id="testimonials-slider" class="owl-carousel">
                        
                    <?php
                        $args = array( 'post_type' => 'testimonials', 'order' => 'ASC', 'posts_per_page' => -1 );
                        $myposts = get_posts( $args );
                        foreach ( $myposts as $post ) : setup_postdata( $post );
                        $informationimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'true');
                     ?>
                    
                        <div class="testimonials-slider-item">
                            <div class="testimonials-wrap">
                                <div class="test-auth-content">
                                    <p><?php the_content(); ?></p>
                                </div>
                                <div class="test-auth-name">
                                    <div class="auth-img">
                                        <img src="<?php echo $informationimage[0]; ?>" alt="">
                                    </div>
                                    <div class="name">
                                        <h4><?php the_title(); ?></h4>
                                        <h5><?php the_excerpt(); ?></h5>
                                    </div>
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
        </div>
    </section>

<?php get_footer(); ?>    