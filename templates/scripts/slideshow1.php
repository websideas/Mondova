<script type="text/javascript">
    var tpj = jQuery;

    var revapi6;
    tpj(document).ready(function() {
        if(tpj("#rev_slider_6_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_6_1");
        }else{
            revapi6 = tpj("#rev_slider_6_1").show().revolution({
                sliderType:"standard",
                jsFileLocation: "assets/libs/revolution/js/",
                sliderLayout:"fullwidth",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    onHoverStop:"off",
                    touch:{
                        touchenabled:"on",
                        swipe_threshold: 75,
                        swipe_min_touches: 50,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    }
                    ,
                    arrows: {
                        style: "metis",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:992,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'',
                        left: {
                            h_align:"left",
                            v_align:"center",
                            h_offset:20,
                            v_offset:0
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:20,
                            v_offset:0
                        }
                    }
                },
                visibilityLevels:[1240,1024,778,480],
                gridwidth:1170,
                gridheight:767,
                lazyType:"none",
                shadow:0,
                spinner:"spinner0",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }

        revapi6.bind("revolution.slide.onchange",function (e,data) {
            var $this = jQuery(this),
                slide_number = revapi6.revmaxslide(),
                current = data.slideIndex,
                kt_slide_next = parseInt(current + 1),
                kt_slide_prev = parseInt(current - 1),
                kt_button_next = $this.find('.tp-rightarrow'),
                kt_button_prev = $this.find('.tp-leftarrow');
                
                if( kt_slide_next > slide_number ){ kt_slide_next = 1; }
                if( kt_slide_prev < 1 ){ kt_slide_prev = slide_number; }

            setTimeout(function(){
                kt_button_next.html( '<span class="arrow_right"></span>'+kt_slide_next+ '/'+ slide_number  );
                kt_button_prev.html( kt_slide_prev+ '/'+ slide_number+'<span class="arrow_left"></span>' );
            },300);
        });
        
    }); /*ready*/

</script>