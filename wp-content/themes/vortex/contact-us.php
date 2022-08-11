<?php
/**
/* Template Name: Contact
 *
 * Displays Only Contact template
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
                    <h1> Contact Us </h1>
                </div>
            </div>
        </div>
      </div>
    </section>

    <section class="contact-us-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <div class="form-sec">
                        <div class="comon-title mb-4">
                            <h3>Contact Us </h3>
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="106" title="Contact Us Quote Form"]'); ?>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="map-wrap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805196.5106799493!2d144.49266899075678!3d-37.970153973203324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sin!4v1643472926780!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>