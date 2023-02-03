<?php 

get_header(); 
global $post;
?>
<div class="singleDetail">
    <?php echo get_sidebar('header-content');?> 

    <main class="content">
        <section class="nav-pagination">
            <div class="container">
                <ul>
                    <li><a class="magic-hover" href="<?php echo get_site_url();?>">Home</a></li>
                    <li><a class="magic-hover" href="<?php echo get_the_permalink(107);?>">News/Media</a></li>
                    <li><span><?php echo get_the_title();?></span></li>
                </ul>
            </div>
        </section>

        <section class="news-single sSpace">
            <div class="container">
                <figure class="img-single"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>" alt=""></figure>
                <div class="news-detail">
                    <h1><?php echo get_the_title();?></h1>
                    <?php echo get_field('main_content',$post->ID);?>
                    <?php echo get_field('points',$post->ID); ?>
                    <h2><?php echo get_field('heading',$post->ID);?></h2>
                    <?php echo get_field('lower_content',$post->ID);?>
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col">
                            <figure><img src="<?php echo get_field('content_image',$post->ID); ?>" alt=""></figure>
                        </div>
                        <div class="col">
                            <figure><img src="<?php echo get_field('content_second_image',$post->ID); ?>" alt=""></figure>
                        </div>
                    </div>
                    <?php echo get_field('last_content',$post->ID);?>
                </div>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>
</div>