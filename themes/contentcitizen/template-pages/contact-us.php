<?php
/*
Template Name: Contact us 
*/
get_header();
global $post;
?>


<main class="content">
    <section class="hero-banner page-title">
<!--        <figure style="background: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>) rgba(0, 0, 0, 0.35);"></figure>-->
<!--        <div class="container">-->
<!--            <h1 data-scroll data-scroll-speed="3" data-scroll-position="top">Contact Us</h1>-->
<!--        </div>-->
        <video src="<?php echo get_field('banner_video',$post->ID); ?>" preload autoplay muted loop playsinline poster=""></video>
   </section>

    <section class="nav-pagination">
        <div class="container">
            <ul>
                <li><a class="magic-hover" href="<?php echo get_site_url();?>">Home</a></li>
                <li><span>Contact Us</span></li>
            </ul>
        </div>
    </section>

    <section class="contact-section sSpace">
        <div class="container">
            <div class="inner">
                <div class="contact-left">
                    <h3><?php echo get_field('box_heading',$post->ID);?></h3>
                    <h5><?php echo get_field('box_content',$post->ID);?></h5>
                    <p><a class="magic-hover" href="mailto:<?php echo get_field('mail','option');?>">Send us an email</a></p>
                    <ul class="contact-social">
                        <li>
                            <a href="<?php echo get_field('instagram','option');?>" target="_blank" class="magic-hover">
                                <i class="lab la-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_field('vimeo','option');?>" target="_blank" class="magic-hover">
                                <i class="lab la-vimeo-v"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_field('linkedin','option');?>" target="_blank" class="magic-hover">
                                <i class="lab la-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="contact-right">
                    <h4><?php echo get_field('contact_form_content',$post->ID);?></h4>

  
                    <?php echo do_shortcode('[contact-form-7 id="140" title="Contact us"]');?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>