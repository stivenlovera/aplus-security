@extends('portafolio-v1.layout')

@section('content')
    <!-- build row: Banner -->
    <section id="zo2-banner-wrap" class="full-width">
        <div class="container-fluid">
            <div class="row">
                <div class="zo2–column-2006163367620bde8557263 full-width col-md-12 col-sm-12">
                    <!-- build column: slide -->
                    <!-- jdoc: modules - position: slide -->
                    <div id="zo2-slide" class="">
                        <div class="custom">
                            <div>
                                <link rel='stylesheet' type='text/css'
                                    href='{{ asset('portafolio-v1/css/settings.css') }}'>
                                <script type='text/javascript' src='{{ asset('portafolio-v1/js/web/jquery.themepunch.tools.min.js') }}'>
                                </script>
                                <script type='text/javascript' src='{{ asset('portafolio-v1/js/web/jquery.themepunch.revolution.min.js') }}'>
                                </script>
                                <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                                    style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                                    <!-- START REVOLUTION SLIDER  fullwidth mode -->
                                    <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;"
                                        data-version="">
                                        <ul>
                                            <!-- SLIDE  -->
                                            <li data-index="rs-3" data-transition="fade" data-slotamount="default"
                                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                                data-easeout="default" data-masterspeed="300"
                                                data-thumb="{{ asset('portafolio-v1/img/imagenes/slide02.jpg') }}"
                                                data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1=""
                                                data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                                                data-param7="" data-param8="" data-param9="" data-param10=""
                                                data-description="">
                                                <!-- MAIN IMAGE -->
                                                <img src="{{ asset('portafolio-v1/img/imagenes/slide02.jpg') }}"
                                                    alt="slide02" title="slide02" data-bgposition="center center"
                                                    data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg"
                                                    data-no-retina>
                                                <!-- LAYERS -->
                                            </li>
                                            <!-- SLIDE  -->
                                            <li data-index="rs-4" data-transition="fade" data-slotamount="default"
                                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                                data-easeout="default" data-masterspeed="300"
                                                data-thumb="{{ asset('portafolio-v1/img/imagenes/slide01.jpg') }}"
                                                data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1=""
                                                data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                                                data-param7="" data-param8="" data-param9="" data-param10=""
                                                data-description="">
                                                <!-- MAIN IMAGE -->
                                                <img src="{{ asset('portafolio-v1/img/imagenes/slide01.jpg') }}"
                                                    alt="slide01" title="slide01" data-bgposition="center center"
                                                    data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg"
                                                    data-no-retina>
                                                <!-- LAYERS -->
                                            </li>
                                            <!-- SLIDE  -->
                                            <li data-index="rs-5" data-transition="fade" data-slotamount="default"
                                                data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default"
                                                data-easeout="default" data-masterspeed="300"
                                                data-thumb="{{ asset('portafolio-v1/img/imagenes/slide03.jpg') }}"
                                                data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1=""
                                                data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                                                data-param7="" data-param8="" data-param9="" data-param10=""
                                                data-description="">
                                                <!-- MAIN IMAGE -->
                                                <img src="{{ asset('portafolio-v1/img/imagenes/slide03.jpg') }}"
                                                    alt="slide03" title="slide03" data-bgposition="center center"
                                                    data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg"
                                                    data-no-retina>
                                                <!-- LAYERS -->
                                            </li>
                                        </ul>
                                        <script>
                                            var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                            var htmlDivCss = "";
                                            if (htmlDiv) {
                                                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                            } else {
                                                var htmlDiv = document.createElement("div");
                                                htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                                document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                            }
                                        </script>
                                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                                    </div>
                                    <script>
                                        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
                                        var htmlDivCss = "";
                                        if (htmlDiv) {
                                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                        } else {
                                            var htmlDiv = document.createElement("div");
                                            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                        }
                                    </script>
                                    <script type="text/javascript">
                                        /******************************************
                                                                                                                                                                                            -	PREPARE PLACEHOLDER FOR SLIDER	-
                                                                                                                                                                                        ******************************************/

                                        var setREVStartSize = function() {
                                            try {
                                                var e = new Object,
                                                    i = jQuery(window).width(),
                                                    t = 9999,
                                                    r = 0,
                                                    n = 0,
                                                    l = 0,
                                                    f = 0,
                                                    s = 0,
                                                    h = 0;
                                                e.c = jQuery('#rev_slider_1_1');
                                                e.gridwidth = [1920];
                                                e.gridheight = [850];

                                                e.sliderLayout = "fullwidth";
                                                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                                                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                                                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] ||
                                                    e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" ==
                                                    e.sliderLayout) {
                                                    var u = (e.c.width(), jQuery(window).height());
                                                    if (void 0 != e.fullScreenOffsetContainer) {
                                                        var c = e.fullScreenOffsetContainer.split(",");
                                                        if (c) jQuery.each(c, function(e, i) {
                                                                u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                                                            }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e
                                                            .fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset,
                                                                0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -=
                                                                parseInt(e.fullScreenOffset, 0))
                                                    }
                                                    f = u
                                                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                                                e.c.closest(".rev_slider_wrapper").css({
                                                    height: f
                                                })

                                            } catch (d) {
                                                console.log("Failure at Presize of Slider:" + d)
                                            }
                                        };

                                        setREVStartSize();

                                        var tpj = jQuery;

                                        var revapi1;
                                        tpj(document).ready(function() {
                                            if (tpj("#rev_slider_1_1").revolution == undefined) {
                                                revslider_showDoubleJqueryError("#rev_slider_1_1");
                                            } else {
                                                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                                                    sliderType: "standard",
                                                    jsFileLocation: "{{ asset('portafolio-v1/js/web/js') }}/", 
                                                    sliderLayout: "fullwidth",
                                                    dottedOverlay: "none",
                                                    delay: 9000,
                                                    navigation: {
                                                        keyboardNavigation: "off",
                                                        keyboard_direction: "horizontal",
                                                        mouseScrollNavigation: "off",
                                                        mouseScrollReverse: "default",
                                                        onHoverStop: "off",
                                                        bullets: {
                                                            enable: true,
                                                            hide_onmobile: false,
                                                            style: "hesperiden",
                                                            hide_onleave: false,
                                                            direction: "horizontal",
                                                            h_align: "center",
                                                            v_align: "bottom",
                                                            h_offset: 0,
                                                            v_offset: 20,
                                                            space: 5,
                                                            tmp: ''
                                                        }
                                                    },
                                                    visibilityLevels: [1240, 1024, 778, 480],
                                                    gridwidth: 1920,
                                                    gridheight: 850,
                                                    lazyType: "none",
                                                    shadow: 0,
                                                    spinner: "spinner1",
                                                    stopLoop: "off",
                                                    stopAfterLoops: -1,
                                                    stopAtSlide: -1,
                                                    shuffle: "off",
                                                    autoHeight: "off",
                                                    disableProgressBar: "on",
                                                    hideThumbsOnMobile: "off",
                                                    hideSliderAtLimit: 0,
                                                    hideCaptionAtLimit: 0,
                                                    hideAllCaptionAtLilmit: 0,
                                                    debugMode: false,
                                                    fallbacks: {
                                                        simplifyAll: "off",
                                                        nextSlideOnWindowFocus: "off",
                                                        disableFocusListener: false,
                                                    }
                                                });
                                            }
                                        }); /*ready*/
                                    </script>
                                    <script>
                                        var htmlDivCss = ' #rev_slider_1_1_wrapper .tp-loader.spinner1{ background-color: #ef8a23 !important; } ';
                                        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                        if (htmlDiv) {
                                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                        } else {
                                            var htmlDiv = document.createElement('div');
                                            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                        }
                                    </script>
                                    <script>
                                        var htmlDivCss = unescape(
                                            ".hesperiden.tp-bullets%20%7B%0A%7D%0A.hesperiden.tp-bullets%3Abefore%20%7B%0A%09content%3A%22%20%22%3B%0A%09position%3Aabsolute%3B%0A%09width%3A100%25%3B%0A%09height%3A100%25%3B%0A%09background%3Atransparent%3B%0A%09padding%3A10px%3B%0A%09margin-left%3A-10px%3Bmargin-top%3A-10px%3B%0A%09box-sizing%3Acontent-box%3B%0A%20%20%20border-radius%3A8px%3B%0A%20%20%0A%7D%0A.hesperiden%20.tp-bullet%20%7B%0A%09width%3A12px%3B%0A%09height%3A12px%3B%0A%09position%3Aabsolute%3B%0A%09background%3A%20rgb%28153%2C%20153%2C%20153%29%3B%20%2F%2A%20old%20browsers%20%2A%2F%0A%20%20%20%20background%3A%20-moz-linear-gradient%28top%2C%20%20rgb%28153%2C%20153%2C%20153%29%200%25%2C%20rgb%28225%2C%20225%2C%20225%29%20100%25%29%3B%20%2F%2A%20ff3.6%2B%20%2A%2F%0A%20%20%20%20background%3A%20-webkit-linear-gradient%28top%2C%20%20rgb%28153%2C%20153%2C%20153%29%200%25%2Crgb%28225%2C%20225%2C%20225%29%20100%25%29%3B%20%2F%2A%20chrome10%2B%2Csafari5.1%2B%20%2A%2F%0A%20%20%20%20background%3A%20-o-linear-gradient%28top%2C%20%20rgb%28153%2C%20153%2C%20153%29%200%25%2Crgb%28225%2C%20225%2C%20225%29%20100%25%29%3B%20%2F%2A%20opera%2011.10%2B%20%2A%2F%0A%20%20%20%20background%3A%20-ms-linear-gradient%28top%2C%20%20rgb%28153%2C%20153%2C%20153%29%200%25%2Crgb%28225%2C%20225%2C%20225%29%20100%25%29%3B%20%2F%2A%20ie10%2B%20%2A%2F%0A%20%20%20%20background%3A%20linear-gradient%28to%20bottom%2C%20%20rgb%28153%2C%20153%2C%20153%29%200%25%2Crgb%28225%2C%20225%2C%20225%29%20100%25%29%3B%20%2F%2A%20w3c%20%2A%2F%0A%20%20%20%20filter%3A%20progid%3Adximagetransform.microsoft.gradient%28%20%0A%20%20%20%20startcolorstr%3D%22rgb%28153%2C%20153%2C%20153%29%22%2C%20endcolorstr%3D%22rgb%28225%2C%20225%2C%20225%29%22%2Cgradienttype%3D0%20%29%3B%20%2F%2A%20ie6-9%20%2A%2F%0A%09border%3A3px%20solid%20rgb%28229%2C%20229%2C%20229%29%3B%0A%09border-radius%3A50%25%3B%0A%09cursor%3A%20pointer%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A.hesperiden%20.tp-bullet%3Ahover%2C%0A.hesperiden%20.tp-bullet.selected%20%7B%0A%09background%3Argb%28102%2C%20102%2C%20102%29%3B%0A%7D%0A.hesperiden%20.tp-bullet-image%20%7B%0A%7D%0A.hesperiden%20.tp-bullet-title%20%7B%0A%7D%0A%0A"
                                        );
                                        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                        if (htmlDiv) {
                                            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                        } else {
                                            var htmlDiv = document.createElement('div');
                                            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                        }
                                    </script>

                                    <script type="text/javascript">
                                        function revslider_showDoubleJqueryError(sliderID) {
                                            var errorMessage =
                                                "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
                                            errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
                                            errorMessage +=
                                                "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
                                            errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
                                            errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
                                            jQuery(sliderID).show().html(errorMessage);
                                        }
                                    </script>
                                </div>
                                <!-- END REVOLUTION SLIDER -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- build row: Energy -->

    <section id="zo2-energy-wrap" class="energy">
        <div class="container">
            <div class="row">
                <div class="zo2–column-1789230582620bde8557602 col-md-12 col-sm-12">
                    <!-- build column: position-4 -->

                    <!-- jdoc: modules - position: position-4 -->
                    <div id="zo2-position-4" class="">
                        <div class="module energy">
                            <div class="mod-wrapper clearfix">
                                <h3 class="moduletitle">
                                    <span>Integramos tecnología y seguridad</span>
                                </h3>
                                <div class="mod-content clearfix">
                                    <div class="mod-inner clearfix">


                                        <div class="customenergy">
                                            <div class="fadeInUp animated">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                        <div class="feature-image"><img
                                                                src="{{ asset('portafolio-v1/img/varios/camaras-vigilancia.png') }}"
                                                                alt="Clean and Unpollated" /></div>
                                                        <h5>Cámaras de Vigilancia</h5>
                                                        <p>Los sistemas de cámaras de vigilancia CCTV, fueron
                                                            diseñados para la supervisión de ambientes.</p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                        <div class="feature-image"><img
                                                                src="{{ asset('portafolio-v1/img/varios/control-de-acceso.png') }}"
                                                                alt="" /></div>
                                                        <h5>Control de Acceso</h5>
                                                        <p>Es un sistema automatizado que permite de forma eficaz,
                                                            aprobar o negar el paso de personas o vehículos.</p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                        <div class="feature-image"><img
                                                                src="{{ asset('portafolio-v1/img/varios/alarma-incendio.png') }}"
                                                                alt="" /></div>
                                                        <h5>Alarmas de Incendio</h5>
                                                        <p>Un sistema de alarma de incendio es un elemento de
                                                            ALERTA, es decir no evita que se inicie un incendio pero
                                                            si advierte.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gap"></div>
                        <div class="module energy">
                            <div class="mod-wrapper clearfix">
                                <div class="mod-content clearfix">
                                    <div class="mod-inner clearfix">


                                        <div class="customenergy">
                                            <div class="fadeInUp animated">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                        <div class="feature-image"><img
                                                                src="{{ asset('portafolio-v1/img/varios/telefonia-ip.png') }}"
                                                                alt="Clean and Unpollated" /></div>
                                                        <h5>Telefonía IP</h5>
                                                        <p>La Telefonía IP es una tecnología que permite integrar en
                                                            una misma red - basada en protocolo IP.</p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                        <div class="feature-image"><img
                                                                src="{{ asset('portafolio-v1/img/varios/cableado-estructurado.png') }}"
                                                                alt="" /></div>
                                                        <h5>Cableado Estructurado</h5>
                                                        <p>El cableado estructurado consiste en cables de par
                                                            trenzado (4 pares) protegidos STP o no protegidos UTP.
                                                        </p>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                        <div class="feature-image"><img
                                                                src="{{ asset('portafolio-v1/img/varios/alarma-intrusion.png') }}"
                                                                alt="" /></div>
                                                        <h5>Alarmas de Intrusión</h5>
                                                        <p>Un sistema de alarma de intrusión es un elemento de
                                                            seguridad pasiva, es decir que no evita que se evite el
                                                            robo pero si alerta.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gap"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- build row: Our parter -->

    <section id="zo2-our-parter-wrap" class="">
        <div class="container">
            <div class="row">
                <div class="zo2–column-1231234324620bde85577f6 col-md-12 col-sm-12">
                    <!-- build column: position-10 -->

                    <!-- jdoc: modules - position: position-10 -->
                    <div id="zo2-position-10" class="">
                        <div class="module our-partner">
                            <div class="mod-wrapper clearfix">
                                <h3 class="moduletitle">
                                    <span>Nuestras Marcas</span>
                                </h3>
                                <div class="mod-content clearfix">
                                    <div class="mod-inner clearfix">


                                        <div class="customour-partner">
                                            <p>
                                            <div class="carousel-wrap">
                                                <div class="carousel-slider" id="zt-carousel-1d1a1" data-items="3"
                                                    data-duration="5" data-responsinve="yes">

                                                    <!-- Sub content -->

                                                    <div class="carousel-item">
                                                        <div class="carousel-item-inner">
                                                            <img src="{{ asset('portafolio-v1/img/varios/belden.png') }}"
                                                                alt="carousel" />
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="carousel-item-inner">
                                                            <img src="{{ asset('portafolio-v1/img/varios/cdvi.png') }}"
                                                                alt="carousel" />
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="carousel-item-inner">
                                                            <img src="{{ asset('portafolio-v1/img/varios/cisco.png') }}"
                                                                alt="carousel" />
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="carousel-item-inner">
                                                            <img src="{{ asset('portafolio-v1/img/varios/furukawa.png') }}"
                                                                alt="carousel" />
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="carousel-item-inner">
                                                            <img src="{{ asset('portafolio-v1/img/varios/honeywell.png') }}"
                                                                alt="carousel" />
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="carousel-item-inner">
                                                            <img src="{{ asset('portafolio-v1/img/varios/notifier.png') }}"
                                                                alt="carousel" />
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="carousel-item-inner">
                                                            <img src="{{ asset('portafolio-v1/img/varios/paradox.png') }}"
                                                                alt="carousel" />
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="carousel-item-inner">
                                                            <img src="{{ asset('portafolio-v1/img/varios/fire-lite.png') }}"
                                                                alt="carousel" />
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="carousel-item-inner">
                                                            <img src="{{ asset('portafolio-v1/img/varios/system-sensor.png') }}"
                                                                alt="carousel" />
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="carousel-item-inner">
                                                            <img src="{{ asset('portafolio-v1/img/varios/vivotek.png') }}"
                                                                alt="carousel" />
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="carousel-item-inner">
                                                            <img src="{{ asset('portafolio-v1/img/varios/zkteco.png') }}"
                                                                alt="carousel" />
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="carousel-item-inner">
                                                            <img src="{{ asset('portafolio-v1/img/varios/ubiquiti.png') }}"
                                                                alt="carousel" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gap"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
