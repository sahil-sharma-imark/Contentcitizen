// For Developer Use
$( document ).ready(function() {
    
    jQuery(".closePopup").click(function(){
        jQuery('iframe').each(function(){
            $(this).attr('src', '');
        });
    });

    
    jQuery(".swiper-button-next").click(function(){
        var nextframe = jQuery(this).attr('data-next');
//        var nextIframe = $(this).closest('iframe').next().find('.iframe-v');
        var pre = parseInt(nextframe);
        var next = parseInt(nextframe);
        setTimeout(function(){
              var vid = jQuery("#video_link_"+nextframe).val();
    
              jQuery("#iframe-con-"+nextframe).attr('src','https://player.vimeo.com/video/'+vid+'?autoplay=1;');

              var frameCount = jQuery('iframe').length;
              for(var i=0; i<frameCount; i++){
                  if(nextframe != frameCount){
                      jQuery('#iframe-con-'+frameCount).attr('src', '');
                  }
              }
            
            setTimeout(function(){
                
                jQuery(".swiper-button-prev").attr('data-prev',--pre);
                jQuery(".swiper-button-next").attr('data-next',++next);
                
            },1000);
            
              
        },1000);

    });
    
    jQuery(".swiper-button-prev").click(function(){
        var prevframe = jQuery(this).attr('data-prev');
        var pre = parseInt(prevframe);
        var next = parseInt(prevframe);
        setTimeout(function(){
              var vid = jQuery("#video_link_"+prevframe).val();
    
              jQuery("#iframe-con-"+prevframe).attr('src','https://player.vimeo.com/video/'+vid+'?autoplay=1;');

              var frameCount = jQuery('iframe').length;
              for(var i=0; i<frameCount; i++){
                  if(prevframe != frameCount){
                      jQuery('#iframe-con-'+frameCount).attr('src', '');
                  }
              }
            
            
            setTimeout(function(){
                var p = --pre;
                if( p == 0){
                    var newpre = jQuery('.swiper-slide').length;
                    var newpre = newpre-2;
                }else{
                    var newpre = p;
                }
                jQuery(".swiper-button-next").attr('data-next',++next);
                jQuery(".swiper-button-prev").attr('data-prev',newpre);
                
            },1000);
              
        },1000);
    });
    
});

function active_slide(id){
    
    const swiper = document.querySelector('.swiper.swiper-popup').swiper;
    
    jQuery(".swiper-slide").each(function(){
        jQuery(this).removeClass("swiper-slide-active");
    });
    
    swiper.slideTo(id,0,false);
    
    var vid = jQuery("#video_link_"+id).val();
    
    jQuery("#iframe-con-"+id).attr('src','https://player.vimeo.com/video/'+vid+'?autoplay=1;');
    
    var prev = id;
    
    id++;
    
    prev--;
    
    jQuery(".swiper-button-next").attr('data-next',id);
    jQuery(".swiper-button-prev").attr('data-prev',prev);
}