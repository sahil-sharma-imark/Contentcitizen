<?php
/*
Template Name:Home
*/
get_header();
echo get_sidebar('header-content');
global $post;
?>

<main class="home content">
    
    <!--<section class="hero-banner">-->
<!--        <figure style="background: url(<?php //echo get_field('banner_image',$post->ID); ?>) rgba(0, 0, 0, 0.15);"></figure>-->

        <!-- <div class="container">
            <h1 data-scroll data-scroll-speed="3" data-scroll-position="top"><?php echo get_field('banner_content',$post->ID); ?></h1>
        </div> -->
        <!-- <a href="#scrollSection" class="scrollTo magic-hover">
            <i class="las la-angle-down"></i>
        </a> -->
        <!--<video src="<?php echo get_field('banner_video',$post->ID); ?>" preload autoplay muted loop playsinline poster="" ></video>-->
        
    <!--</section>-->
    
    <section class="scroll-section ubSpace" id="scrollSection">

        <ul>
            <?php
            $videos= get_field('homepage_videos',$post->ID);
            $i=1;
            foreach($videos as $video){
                $generated_link= $video['generated_link'];
                $uri_segments = explode('/', $generated_link);
                $video_urlid = $uri_segments[4]; 
                $video_id = strstr($video_urlid, '.', true);
                
//                $video_id= (int)$video['video_id'];
                $vimeoData = getVimeodata($video_id);
                $vid_heading=  $vimeoData[0]->title;
                $vid_video = $vimeoData[0]->url;
                $thumbnail = $vimeoData[0]->thumbnail_large;
                
                
            ?>
            <li onclick="active_slide(<?php echo $i; ?>);">
                <a href="javascript:void(0)" class="magic-hover openPopup">
                    <div class="singleCard" data-scroll data-scroll-speed="">
                        <div class="card-label">
                            <i class="las la-play"></i>
                            <h3><?php echo $vid_heading;?></h3>
                        </div>
                        <figure class="card-placeholder">
                            <img src="<?php echo $thumbnail; ?>" alt="">
                        </figure>
                        <div class="card-video">
                            <video loop preload="none" muted playsinline webkit-playsinline>
                                <source src="<?php echo $generated_link; ?>" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </a>
                <input type="hidden" id="video_link_<?php echo $i; ?>" value="<?php echo $video_id; ?>"> 
                <input type="hidden" id="video_name_<?php echo $i; ?>" value="<?php echo $vid_heading; ?>"> 
            </li>
            <?php
                $i++;
            }
            ?>
    
        </ul>

    </section>
</main>

<?php
get_footer();
?>