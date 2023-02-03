<?php 
/*
Template Name:content
*/
global $post;
get_header(); ?>
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
                <li><span>The Content</span></li>
            </ul>
        </div>
    </section>

    <section class="content-section sSpace">
        <div class="container">
            <!--<p><?php //echo get_field('main_content',$post->ID);?></p>-->
            <!--<p><?php // echo get_field('sub-content',$post->ID);?></p>-->
            
            <?php
            // $content_points= get_field('content_points',$post->ID);
            //     foreach($content_points as $content_point){
            //             $content_point_heading = $content_point['content_points_heading'];
            //             $content_point_content = $content_point['content_points_content'];
                ?>
                 <!--<h2><?php //echo $content_point_heading; ?></h2>-->
            <!--<p><?php// echo $content_point_content; ?></p>   -->
            <?php  
            // }
            ?>
         
            <?php echo get_field('last_content',$post->ID);?>
        </div>
    </section>
</main>

<?php get_footer(); ?>