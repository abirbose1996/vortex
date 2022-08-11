<?php
/**
/* Template Name: About
 *
 * Displays Only About Us template
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
                    <h1> About Us </h1>
                </div>
            </div>
        </div>
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

  <?php get_footer(); ?>  