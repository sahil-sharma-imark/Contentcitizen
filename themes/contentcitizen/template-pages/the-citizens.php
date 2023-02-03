<?php 
/*
Template Name:Citizens
*/
global $post;
get_header();
?>
<?php echo get_sidebar('header-content'); ?>

<main class="content">
   <section class="hero-banner page-title">
<!--        <figure style="background: url(<?php echo get_field('banner_image',$post->ID);?>) rgba(0, 0, 0, 0.35);"></figure>-->
<!--        <div class="container">-->
<!--            <h1 data-scroll data-scroll-speed="3" data-scroll-position="top"><?php echo get_field('banner_content',$post->ID);?></h1>-->
<!--        </div>-->
        <video src="<?php echo get_field('banner_video',$post->ID); ?>" preload autoplay muted loop playsinline poster=""></video>
    </section>

    <section class="nav-pagination">
        <div class="container">
            <ul>
                <li><a class="magic-hover" href="<?php echo get_site_url();?>">Home</a></li>
                <li><span>The Citizens</span></li>
            </ul>
        </div>
    </section>

    <section class="content-section sSpace">
        <div class="container">
            <p><?php echo get_field('content',$post->ID);?></p>
            <p><?php echo get_field('content_two',$post->ID);?></p>
        </div>
    </section>
</main>

<?php get_footer(); ?>