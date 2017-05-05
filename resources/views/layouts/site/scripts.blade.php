<script type="text/javascript" src="{{asset('js/lib/jquery-1.11.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/lib/masonry.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/lib/jquery.parallax-1.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('js/lib/jquery.owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('js/lib/theia-sticky-sidebar.js')}}"></script>
<script type="text/javascript" src="{{asset('js/lib/jquery.magnific-popup.min.js')}}"></script>
<script type='text/javascript' src="{{asset('js/lib/jquery-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>

<!-- REVOLUTION DEMO -->
<script type="text/javascript" src="{{asset('revslider-demo/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('revslider-demo/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript">
    if($('#slider-revolution').length) {
        $('#slider-revolution').show().revolution({
            ottedOverlay:"none",
            delay:10000,
            startwidth:1600,
            startheight:650,
            hideThumbs:200,

            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:5,


            simplifyAll:"off",

            navigationType:"none",
            navigationArrows:"solo",
            navigationStyle:"preview4",

            touchenabled:"on",
            onHoverStop:"on",
            nextSlideOnWindowFocus:"off",

            swipe_threshold: 0.7,
            swipe_min_touches: 1,
            drag_block_vertical: false,

            parallax:"mouse",
            parallaxBgFreeze:"on",
            parallaxLevels:[7,4,3,2,5,4,3,2,1,0],


            keyboardNavigation:"off",

            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:20,

            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:20,
            soloArrowLeftVOffset:0,

            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:20,
            soloArrowRightVOffset:0,

            shadow:0,
            fullWidth:"on",
            fullScreen:"off",

            spinner:"spinner2",

            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,

            shuffle:"off",

            autoHeight:"off",
            forceFullWidth:"off",


            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"off",
            hideThumbsUnderResolution:0,

            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            startWithSlide:0
        });
    }
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/590ca1f764f23d19a89b0f0b/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
@yield('scripts')