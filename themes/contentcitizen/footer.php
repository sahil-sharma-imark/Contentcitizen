
<footer id="footer" class="bgBlackDark">
    <div class="container">
        <div class="d-flex">
            <p><?php echo get_field('content','option');?></p>
            <ul>
                <li>
                    <a href="<?php echo get_field('instagram','option');?>" target="_blank" class="magic-hover">
                        <i class="lab la-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo get_field('linkedin','option');?>" target="_blank" class="magic-hover">
                        <i class="lab la-linkedin-in"></i>
                    </a>
                </li>
                <li>
                    <a href="<?php echo get_field('vimeo','option');?>" target="_blank" class="magic-hover">
                        <i class="lab la-vimeo-v"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>

</div>

<div class="site-popup" id="video_popup">
    <div class="site-popup-inner">
        <div class="swiper swiper-popup">
            <div class="swiper-wrapper">
                <?php
                $videos= get_field('homepage_videos',$post->ID);
                $i=1;
                foreach($videos as $video){
                    
                $generated_link= $video['generated_link'];
                $uri_segments = explode('/', $generated_link);
                $video_urlid = $uri_segments[4]; 
                $video_id = strstr($video_urlid, '.', true);
                    
//                    $video_id=(int)$video['video_id'];
                    $vimeoData = getVimeodata($video_id);
                    $vid_heading=  $vimeoData[0]->title;
                    $vid_video = $vimeoData[0]->url;
                    $thumbnail = $vimeoData[0]->thumbnail_large;
                ?>
                <div class="swiper-slide" id="slide-<?php echo $i; ?>">
                    <h4><?php echo $vid_heading; ?></h4>
                    <div class="video-wrapper">
                        <iframe src="https://player.vimeo.com/video/<?php echo $video_id;?>?loop=1;&autopause=0;&portrait=0;&muted=1;" id="iframe-con-<?php echo $i; ?>" class="iframe-v" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"  allowfullscreen></iframe>
                    </div>
                </div>
                <?php
                    $i++;
                }
                ?>
            </div>
            <div class="swiper-button-prev left" data-prev="">
                <i class="las la-long-arrow-alt-left"></i> Previous
            </div>
            <div class="swiper-button-next right" data-next="">
                Next <i class="las la-long-arrow-alt-right"></i>
            </div>
        </div>
        <div class="popup-close">
            <a href="javascript:void(0)" class="closePopup magic-hover">
                <span></span>
                <span></span>
            </a>
        </div>
    </div>
</div>

<script src="<?php echo get_template_directory_uri();?>/js/bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>
<!--<script src="https://player.vimeo.com/api/player.js"></script>-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<!-- For Developer Use -->
<script src="<?php echo get_template_directory_uri();?>/js/contentcitizen.js"></script>

<!-- Magic Mouse Effect -->
<script>
    jQuery(document).ready(function(){
        jQuery('.wpcf7-form').addClass('form');
    });
    
    magicMouseOptions = {
        "cursorOuter": "circle-basic",
        "hoverEffect": "pointer-blur",
        "hoverItemMove": false,
        "defaultCursor": false,
        "outerWidth": 30,
        "outerHeight": 30
    };
    magicMouse(magicMouseOptions);
    
   
</script>
<!-- Magic Mouse Effect End -->

</body>
<?php
wp_footer();
?>
</html>