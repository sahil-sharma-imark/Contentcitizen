<?php
/*Template Name: news and media*/
get_header();
?>
<?php echo get_sidebar('header-content'); 
global $post;
?>


<main class="content">
    <section class="hero-banner page-title">
<!--        <figure style="background: url(<?php echo get_field('banner_image',$post->ID); ?>)rgba(0, 0, 0, 0.35);"></figure>-->
        <div class="container">
            <h1 data-scroll data-scroll-speed="3" data-scroll-position="top"><?php echo get_field('banner_subheading',$post->ID); ?></h1>
            <h5 data-scroll data-scroll-speed="4" data-scroll-position="top"><?php echo get_field('banner_heading',$post->ID); ?></h5>
        </div>
     <video src="<?php echo get_field('banner_video',$post->ID); ?>" preload autoplay muted loop playsinline poster=""></video>
        
    </section>

    <section class="nav-pagination">
        <div class="container">
            <ul>
                <li><a class="magic-hover" href="<?php echo get_site_url();?>">Home</a></li>
                <li><span>News/Media</span></li>
            </ul>
        </div>
    </section>

    <section class="nmList-section sSpace">
        <div class="container">
            <div class="inner">
                <div class="row row-cols-1 row-cols-md-2">
                <?php
                    $args = array(
                        'post_type' => 'news-media',
                        'orderby' => 'ID',
                        'order' => 'DESC',
                        'posts_per_page' => -1,
                    );

                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                          $the_query->the_post();?>
                              <div class="col">
                        <div class="single">
                            <h2><?php echo get_the_title();?></h2>
                            <a href="<?php echo get_the_permalink($post->ID);?>" class="magic-hover">
                                <figure><img src="
                                <?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" 
                                             alt=""></figure>
                            </a>
                            <p><?php echo get_the_content();?></p>
                            <a href="<?php echo get_the_permalink($post->ID);?>" class="magic-hover">
                                Read More <i class="las la-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                       

                       <?php }
                    }
                    wp_reset_postdata();
                    
                ?>
               
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>