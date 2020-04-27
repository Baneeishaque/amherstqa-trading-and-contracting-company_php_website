<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Gallery</title>
    <base href="{{base_url}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <!-- Facebook Open Graph -->
    <meta property="og:title" content="Gallery"/>
    <meta property="og:description" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="{{curr_url}}"/>
    <!-- Facebook Open Graph end -->

    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/main.js?v=20181216070155" type="text/javascript"></script>

    <link href="css/font-awesome/font-awesome.min.css?v=4.7.0" rel="stylesheet" type="text/css"/>
    <link href="css/site.css?v=20181216070156" rel="stylesheet" type="text/css"/>
    <link href="css/common.css?ts=1545299852" rel="stylesheet" type="text/css"/>
    <link href="css/6.css?ts=1545299852" rel="stylesheet" type="text/css"/>
    <script src="js/jquery.browser.min.js" type="text/javascript"></script>
    <link href="js/photoswipe/photoswipe.css" rel="stylesheet" type="text/css"/>
    <link href="js/photoswipe/default-skin/default-skin.css" rel="stylesheet" type="text/css"/>
    <script src="js/photoswipe/photoswipe.min.js" type="text/javascript"></script>
    <script src="js/photoswipe/photoswipe-ui-default.min.js" type="text/javascript"></script>
    <ga-code/>
    <link rel="shortcut icon" href="/gallery/logo_new.png" type="image/png"/>
    <script type="text/javascript">
	window.useTrailingSlashes = false;


    </script>

    <link href="css/flag-icon-css/css/flag-icon.min.css" rel="stylesheet" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->

</head>


<body>
<div class="root">
    <div class="vbox wb_container" id="wb_header">

        <div class="wb_cont_inner">
            <div id="wb_element_instance253" class="wb_element wb-menu wb-menu-mobile"><a
                        class="btn btn-default btn-collapser"><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span></a>
                <ul class="hmenu">
                    <li><a href="" target="_self">Home</a></li>
                    <li><a href="About-us" target="_self">About us</a></li>
                    <li><a href="SERVICES" target="_self">SERVICES</a></li>
                    <li><a href="Construction" target="_self">Construction</a></li>
                    <li class="active"><a href="GALLERY" target="_self">GALLERY</a></li>
                    <li><a href="CLIENTS" target="_self">CLIENTS</a></li>
                    <li><a href="Careers" target="_self">Careers</a></li>
                    <li><a href="Contacts" target="_self">Contacts</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div id="wb_element_instance254" class="wb_element wb_element_picture" title=""><a href=""><img
                            alt="gallery/logo_new" src="gallery_gen/beddf3af9ed42bb0de01717fd2128cef.png"></a></div>
            <div id="wb_element_instance255" class="wb_element wb_text_element" style=" line-height: normal;"><p
                        class="wb-stl-footer"><strong>Call us : </strong>(+974) 44350985</p>
            </div>
            <div id="wb_element_instance256" class="wb_element wb_text_element" style=" line-height: normal;"><p
                        class="wb-stl-footer"><strong>Email us :</strong> info@amherstqa.com</p>
            </div>
            <div id="wb_element_instance257" class="wb_element wb_element_picture" title=""><img
                        alt="gallery/e-mail-envelope (3)" src="gallery_gen/f7ce1bddde851e18a626bb0e3a77e499_25x24.png">
            </div>
            <div id="wb_element_instance258" class="wb_element wb_element_picture" title=""><img
                        alt="gallery/phone-call (1)" src="gallery_gen/3ba1220d26a1ad92f0b5bd79591718ab_25x24.png"></div>
        </div>
        <div class="wb_cont_outer"></div>
        <div class="wb_cont_bg"></div>
    </div>
    <div class="vbox wb_container" id="wb_main">

        <div class="wb_cont_inner">
            <div id="wb_element_instance280" class="wb_element wb_element_picture" title=""><img alt="gallery/gallery"
                                                                                                 src="gallery_gen/d8481575ef73996868a73db1cb8a5d64.png">
                <script type="text/javascript">
					$("#wb_element_instance280").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance280").data("clicked", false);
							};
							img.src = "gallery\/gallery.png";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance281" class="wb_element wb_element_picture" title=""><img
                        alt="gallery/our gallery" src="gallery_gen/2420e6c649bd6b0bcef7469ec79f3fa2.png">
                <script type="text/javascript">
					$("#wb_element_instance281").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance281").data("clicked", false);
							};
							img.src = "gallery\/our gallery.png";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance282" class="wb_element wb_element_picture" title=""><img alt="gallery/1"
                                                                                                 src="gallery_gen/cd0df0cce139d68392d3b89ae1695123.jpg">
                <script type="text/javascript">
					$("#wb_element_instance282").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance282").data("clicked", false);
							};
							img.src = "gallery\/1.jpg";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance283" class="wb_element wb_element_picture" title=""><img alt="gallery/4"
                                                                                                 src="gallery_gen/0f52aa1cea7e2a5d06190e2aa0a8a3e3.jpg">
                <script type="text/javascript">
					$("#wb_element_instance283").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance283").data("clicked", false);
							};
							img.src = "gallery\/4.jpg";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance284" class="wb_element wb_element_picture" title=""><img alt="gallery/5"
                                                                                                 src="gallery_gen/0b19b25355ebc91ba53afaaf94fed45d.jpg">
                <script type="text/javascript">
					$("#wb_element_instance284").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance284").data("clicked", false);
							};
							img.src = "gallery\/5.jpg";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance285" class="wb_element wb_element_picture" title=""><img alt="gallery/6"
                                                                                                 src="gallery_gen/a426d73f53356dc808fb40309718ebf4.jpg">
                <script type="text/javascript">
					$("#wb_element_instance285").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance285").data("clicked", false);
							};
							img.src = "gallery\/6.jpg";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance286" class="wb_element wb_element_picture" title=""><img alt="gallery/7"
                                                                                                 src="gallery_gen/d9b7fd67f2c9b572574b263f42fadaa7.jpg">
                <script type="text/javascript">
					$("#wb_element_instance286").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance286").data("clicked", false);
							};
							img.src = "gallery\/7.jpg";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance287" class="wb_element wb_element_picture" title=""><img alt="gallery/9"
                                                                                                 src="gallery_gen/081f5ce3959521a85713a870f2c52a24.jpg">
                <script type="text/javascript">
					$("#wb_element_instance287").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance287").data("clicked", false);
							};
							img.src = "gallery\/9.jpg";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance288" class="wb_element wb_element_picture" title=""><img alt="gallery/8"
                                                                                                 src="gallery_gen/5b7c7888b411c95e3d2c7024d0b5aeee.jpg">
                <script type="text/javascript">
					$("#wb_element_instance288").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance288").data("clicked", false);
							};
							img.src = "gallery\/8.jpg";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance289" class="wb_element wb_element_picture" title=""><img alt="gallery/10"
                                                                                                 src="gallery_gen/dd34ac68f7ba5ef069ecdb5bd21c3e12.jpg">
                <script type="text/javascript">
					$("#wb_element_instance289").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance289").data("clicked", false);
							};
							img.src = "gallery\/10.jpg";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance290" class="wb_element wb_element_picture" title=""><img alt="gallery/11"
                                                                                                 src="gallery_gen/05e116235e96c064400aebf4c3be82cc.jpg">
                <script type="text/javascript">
					$("#wb_element_instance290").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance290").data("clicked", false);
							};
							img.src = "gallery\/11.jpg";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance291" class="wb_element wb_element_picture" title=""><img alt="gallery/2"
                                                                                                 src="gallery_gen/fc885963d690a6787ca787cf208cdd25.jpg">
                <script type="text/javascript">
					$("#wb_element_instance291").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance291").data("clicked", false);
							};
							img.src = "gallery\/2.jpg";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance292" class="wb_element wb_element_picture" title=""><img alt="gallery/3"
                                                                                                 src="gallery_gen/c37c02e553a4b882e149630cc2b8f401.jpg">
                <script type="text/javascript">
					$("#wb_element_instance292").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance292").data("clicked", false);
							};
							img.src = "gallery\/3.jpg";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance293" class="wb_element wb_element_picture" title=""><img alt="gallery/12"
                                                                                                 src="gallery_gen/c17df1aa40aa9980f441f5c042afd379.jpg">
                <script type="text/javascript">
					$("#wb_element_instance293").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance293").data("clicked", false);
							};
							img.src = "gallery\/12.jpg";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance294" class="wb_element wb_element_picture" title=""><img alt="gallery/13"
                                                                                                 src="gallery_gen/1753112b0d7c24c3047c9d390a90eb84.jpg">
                <script type="text/javascript">
					$("#wb_element_instance294").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance294").data("clicked", false);
							};
							img.src = "gallery\/13.jpg";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance295" class="wb_element wb_element_picture" title=""><img alt="gallery/14"
                                                                                                 src="gallery_gen/13f35acc03636f32591ce6734081d833.jpg">
                <script type="text/javascript">
					$("#wb_element_instance295").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance295").data("clicked", false);
							};
							img.src = "gallery\/14.jpg";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance296" class="wb_element wb_element_picture" title=""><img alt="gallery/15"
                                                                                                 src="gallery_gen/7bc65a1100ec034d769e4e9df3cb69a3.jpg">
                <script type="text/javascript">
					$("#wb_element_instance296").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance296").data("clicked", false);
							};
							img.src = "gallery\/15.jpg";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance297" class="wb_element wb_element_picture" title=""><img alt="gallery/16"
                                                                                                 src="gallery_gen/371b61f926f4473e4afbfbe5321a8d1b.jpg">
                <script type="text/javascript">
					$("#wb_element_instance297").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance297").data("clicked", false);
							};
							img.src = "gallery\/16.jpg";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance298" class="wb_element wb_element_picture" title=""><img alt="gallery/17"
                                                                                                 src="gallery_gen/8bef8160203ca5bc70660f5822721479.jpg">
                <script type="text/javascript">
					$("#wb_element_instance298").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance298").data("clicked", false);
							};
							img.src = "gallery\/17.jpg";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance299" class="wb_element wb_element_picture" title=""><img alt="gallery/18"
                                                                                                 src="gallery_gen/f441bed4c1d9bc7507f462060af0294c.jpg">
                <script type="text/javascript">
					$("#wb_element_instance299").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance299").data("clicked", false);
							};
							img.src = "gallery\/18.jpg";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance300" class="wb_element wb_element_picture" title=""><img alt="gallery/19"
                                                                                                 src="gallery_gen/dea95ff7d2866e290baa03a3850c5837.jpg">
                <script type="text/javascript">
					$("#wb_element_instance300").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance300").data("clicked", false);
							};
							img.src = "gallery\/19.jpg";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance301" class="wb_element wb_element_picture" title=""><img alt="gallery/20"
                                                                                                 src="gallery_gen/aeefeec6f67d4b67df7c2b4fb9dec5d9.jpg">
                <script type="text/javascript">
					$("#wb_element_instance301").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance301").data("clicked", false);
							};
							img.src = "gallery\/20.jpg";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance302" class="wb_element wb_element_picture" title=""><img alt="gallery/21"
                                                                                                 src="gallery_gen/c2b14e5fe77b9313aa6c0ea2d29079b9.jpg">
                <script type="text/javascript">
					$("#wb_element_instance302").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance302").data("clicked", false);
							};
							img.src = "gallery\/21.jpg";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance303" class="wb_element wb_element_picture" title=""><img alt="gallery/22"
                                                                                                 src="gallery_gen/a39f884f09ea35d3ea7842c99c3f907f.jpg">
                <script type="text/javascript">
					$("#wb_element_instance303").on("click touchstart touchend touchmove", function(e) {
						if (e.type === "touchstart") {
							$(this).data("pswpDisabled", false);
						} else if (e.type === "touchmove") {
							$(this).data("pswpDisabled", true);
						}
						if ((e.type === "click" || e.type === "touchend") && !$(this).data("pswpDisabled")) {
							if ($(this).data("clicked")) { return; }
							$(this).data("clicked", true);
							var img = new Image();
							img.onload = function() {
								(new PhotoSwipe($('body > .pswp').get(0), PhotoSwipeUI_Default, [{
									src: this.src,
									w: this.width,
									h: this.height,
									msrc: this.src
								}], { index: 0 })).init();
								$("#wb_element_instance303").data("clicked", false);
							};
							img.src = "gallery\/22.jpg";
						}
					});


                </script>
            </div>
            <div id="wb_element_instance304" class="wb_element wb_element_picture" title=""><img alt="gallery/23"
                                                                                                 src="gallery_gen/a0aa377245d197aab3a2e967fdd203ff.jpg">
            </div>
            <div id="wb_element_instance305" class="wb_element" style="width: 100%;">
                <?php
                global $show_comments;
                if (isset($show_comments) && $show_comments) {
                    renderComments(6);
                    ?>
                    <script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance305");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});


                    </script>
                <?php
                } else {
                ?>
                    <script type="text/javascript">
				$(function() {
					$("#wb_element_instance305").hide();
				});


                    </script>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="wb_cont_outer"></div>
        <div class="wb_cont_bg"></div>
    </div>
    <div class="vbox wb_container" id="wb_footer">

        <div class="wb_cont_inner" style="height: 490px;">
            <div id="wb_element_instance259" class="wb_element wb_text_element" style=" line-height: normal;"><p
                        class="wb-stl-footer">© 2017 <a href="http://amherstqa.com">amherstqa.com</a></p>
            </div>
            <div id="wb_element_instance260" class="wb_element wb_element_picture" title=""><a
                        href="https://www.azym.com/en/" target="1"><img alt="gallery/azym_logo2"
                                                                        src="gallery_gen/91bfeb7a51e54a83263e718e07bce770_56x16.png"></a>
            </div>
            <div id="wb_element_instance261" class="wb_element wb_element_shape">
                <div class="wb_shp"></div>
            </div>
            <div id="wb_element_instance262" class="wb_element wb_text_element" style=" line-height: normal;"><p
                        class="wb-stl-footer">Powered by</p>
            </div>
            <div id="wb_element_instance263" class="wb_element wb_text_element" style=" line-height: normal;"><h1
                        class="wb-stl-heading1">ABOUT US</h1>
            </div>
            <div id="wb_element_instance264" class="wb_element wb_text_element" style=" line-height: normal;"><p
                        class="wb-stl-footer" style="text-align: justify;">Established in 2001, Amherst is a leading
                    overseas Trading and Contracting firm that can help you win mobilizing the best talent for major
                    projects around Middle East</p>
            </div>
            <div id="wb_element_instance265" class="wb_element wb_text_element" style=" line-height: normal;"><h1
                        class="wb-stl-heading1">QUICK LINKS</h1>
            </div>
            <div id="wb_element_instance266" class="wb_element wb_text_element" style=" line-height: normal;"><h1
                        class="wb-stl-heading1">enquire us</h1>
            </div>
            <div id="wb_element_instance267" class="wb_element"><a class="wb_button" href=""><span>Home</span></a></div>
            <div id="wb_element_instance268" class="wb_element"><a class="wb_button" href="About-us"><span>About</span></a>
            </div>
            <div id="wb_element_instance269" class="wb_element"><a class="wb_button"
                                                                   href="SERVICES"><span>Services</span></a></div>
            <div id="wb_element_instance270" class="wb_element"><a class="wb_button" href="CLIENTS"><span>Clients</span></a>
            </div>
            <div id="wb_element_instance271" class="wb_element"><a class="wb_button"
                                                                   href="Contacts"><span>Contacts</span></a></div>
            <div id="wb_element_instance272" class="wb_element">
                <form class="wb_form wb_mob_form" method="post" enctype="multipart/form-data"><input type="hidden"
                                                                                                     name="wb_form_id"
                                                                                                     value="32ad60da"><textarea
                            name="message" rows="3" cols="20" class="hpc"></textarea>
                    <table>
                        <tr>
                            <th class="wb-stl-footer">Name&nbsp;&nbsp;</th>
                            <td><input type="hidden" name="wb_input_0" value="Name"><input
                                        class="form-control form-field" type="text" value="" name="wb_input_0"
                                        required="required"></td>
                        </tr>
                        <tr>
                            <th class="wb-stl-footer">E-mail&nbsp;&nbsp;</th>
                            <td><input type="hidden" name="wb_input_1" value="E-mail"><input
                                        class="form-control form-field" type="text" value="" name="wb_input_1"
                                        required="required"></td>
                        </tr>
                        <tr>
                            <th class="wb-stl-footer">Message&nbsp;&nbsp;</th>
                            <td><input type="hidden" name="wb_input_2" value="Message"><input
                                        class="form-control form-field" type="text" value="" name="wb_input_2"
                                        required="required"></td>
                        </tr>
                        <tr class="form-footer">
                            <td colspan="2">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </td>
                        </tr>
                    </table>
                </form>
                <script type="text/javascript">
			<?php $wb_form_id = popSessionOrGlobalVar("wb_form_id");
                    if ($wb_form_id == "32ad60da") { ?>
				var formValues = <?php echo json_encode(popSessionOrGlobalVar("post")); ?>;
				var formErrors = <?php echo json_encode(popSessionOrGlobalVar("formErrors")); ?>;
				wb_form_validateForm("32ad60da", formValues, formErrors);
				<?php $wb_form_send_success = popSessionOrGlobalVar("wb_form_send_success");
                        if (($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state"))) { ?>
					var prompt = $("<div>")
						.addClass("alert alert-<?php echo $wb_form_send_success ? "success" : "danger"; ?>")
						.css({ position: "fixed", opacity: 0, right: "-50px", top: "10px", zIndex: 10000, fontSize: "24px",
							   padding: "30px 50px", lineHeight: "24px", maxWidth: "748px" })
						.append("<?php echo str_replace('"', '\"', $wb_form_send_state); ?>")
						.prepend($("<button>").addClass("close")
							.css({ marginRight: "-40px", marginTop: "-24px" })
							.html("&nbsp;&times;")
							.on("click", function() { $(this).parent().remove(); })
						)
					.appendTo("body");
					setTimeout(function() { prompt.animate({ opacity: 1, right: "10px" }, 250); }, 250);
					<?php $wb_form_send_success = false;
                            $wb_form_send_state = null; ?>
                        <?php } ?>
                    <?php } ?>


                </script>
            </div>
            <div id="wb_element_instance273" class="wb_element wb_element_picture" title=""><a
                        href="https://www.facebook.com/" target="1"><img alt="gallery/facebook (2)"
                                                                         src="gallery_gen/48ed975e73b890722a2ae4196cf5d98d_32x33.png"></a>
            </div>
            <div id="wb_element_instance274" class="wb_element wb_element_picture" title=""><a
                        href="https://plus.google.com/" target="1"><img alt="gallery/google-plus (6)"
                                                                        src="gallery_gen/5dc11f8045beb9cbddae0c4bd71a8c2d_32x33.png"></a>
            </div>
            <div id="wb_element_instance275" class="wb_element wb_element_picture" title=""><a
                        href="https://twitter.com/" target="1"><img alt="gallery/twitter (2)"
                                                                    src="gallery_gen/855c8f4ee08b3069739a868b5d03a4a9_32x33.png"></a>
            </div>
            <div id="wb_element_instance276" class="wb_element"><a class="wb_button" href="Careers"><span>Career</span></a>
            </div>
            <div id="wb_element_instance277" class="wb_element"><a class="wb_button" href="Construction"><span>Construction</span></a>
            </div>
            <div id="wb_element_instance278" class="wb_element"><a class="wb_button" href="GALLERY"><span>Gallery</span></a>
            </div>
            <div id="wb_element_instance279" class="wb_element" style=" overflow: hidden;">
                <div style="height: 100%;"><!-- Live Chat Widget powered by https://keyreply.com/chat/ -->
                    <!-- Advanced options: -->
                    <!-- data-align="left" -->
                    <!-- data-overlay="true" -->
                    <script data-align="right" data-overlay="false" id="keyreply-script"
                            src="//keyreply.com/chat/widget.js" data-color="#f44336"
                            data-apps="JTdCJTIyd2hhdHNhcHAlMjI6JTIyKCs5NzQpJTIwNDQzNTA5ODUlMjIsJTIycGhvbmUlMjI6JTIyKCs5NzQpJTIwNDQzNTA5ODUlMjIsJTIyZW1haWwlMjI6JTIyaW5mb0BhbWhlcnN0cWEuY29tJTIyJTdE"></script>
                </div>
            </div>
            <div id="wb_element_instance306" class="wb_element" style="text-align: center; width: 100%;">
                <div class="wb_footer"></div>
                <script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer, #wb_footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});


                </script>
            </div>
        </div>
        <div class="wb_cont_outer"></div>
        <div class="wb_cont_bg"></div>
    </div>
    <div class="wb_sbg"></div>
</div>
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg" style="opacity: 0.7;"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
{{hr_out}}
</body>
</html>
