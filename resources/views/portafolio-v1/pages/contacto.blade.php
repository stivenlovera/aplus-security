@extends('portafolio-v1.layout')

@section('content')
    <section id="zo2-breadcrumb-wrap" class="">
        <div class="container">
            <div class="row">
                <div class="zo2–column-1463080698623afdf8ede64 col-md-12 col-sm-12">
                    <!-- build column: breadcrumb -->

                    <!-- jdoc: modules - position: breadcrumb -->
                    <div id="zo2-breadcrumb" class="">
                        <div class="module ">
                            <div class="mod-wrapper clearfix">
                                <div class="mod-content clearfix">
                                    <div class="mod-inner clearfix">

                                        <ul class="breadcrumb ">
                                            <span class="divider hasTooltip" title="Está aquí: ">Está aquí: </span>
                                            <li><a href="/index.php" class="pathway">Inicio</a><span
                                                    class="divider"><img src="/media/system/images/arrow.png"
                                                        alt=""></span></li>
                                            <li><span>Contacto</span></li>
                                        </ul>
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
    <section id="zo2-body-wrap" class="">
        <div class="container">
            <div class="row">
                <div class="zo2–column-1724975874623afdf8ee021 col-md-0 col-sm-0"></div>
                <div class="zo2–column-1185612868623afdf8ee09c col-md-12 col-sm-12">
                    <!-- build column: component -->

                    <!-- jdoc: component - position: component -->
                    <div id="zo2-component" class="">
                        <div class="contactpage-contact" itemscope="" itemtype="http://schema.org/Person">
                            <div class="row">
                                <div class="col-xs-12"></div>
                            </div>
                            <div class="row">

                                <div class="col-xs-12 col-sm-6 " id="contactpage-contact-left">
                                    <h4 style="color: #252525;text-align: left"
                                        class="vc_custom_heading vc_custom_1462866054603">ENVIANOS UN MENSAJE<br>
                                        <br>

                                        <form id="contact-form" action="/index.php/contacto" method="post"
                                            class="form-validate">
                                            <h3>Formulario de contacto</h3>
                                            <p><input type="text" name="jform[contact_name]" id="jform_contact_name"
                                                    value="" class="required" size="30" required="required"
                                                    aria-required="true" placeholder="*Nombre Completo">
                                            </p>
                                            <p><input type="email" name="jform[contact_email]"
                                                    class="validate-email required" id="jform_contact_email" value=""
                                                    size="30" autocomplete="email" required="required" aria-required="true"
                                                    placeholder="*Email"></p>
                                            <p><input type="text" name="jform[contact_subject]" id="jform_contact_emailmsg"
                                                    value="" class="required" size="60" required="required"
                                                    aria-required="true" placeholder="*Telefono">
                                            </p>
                                            <p>
                                                <textarea name="jform[contact_message]" id="jform_contact_message" cols="50" rows="10" class="required"
                                                    required="required" aria-required="true"
                                                    placeholder="*Mensaje  "></textarea>
                                            </p>
                                            <div class="control-group">
                                                <div class="control-label">
                                                    <label id="jform_captcha-lbl" for="jform_captcha"
                                                        class="hasPopover required" title=""
                                                        data-content="Escriba en el campo de texto lo que vea en la imagen."
                                                        data-original-title="Captcha">
                                                        Captcha<span class="star">&nbsp;*</span></label>
                                                </div>
                                                <div class="controls">
                                                    <div id="jform_captcha" class=" required g-recaptcha"
                                                        data-sitekey="6LdL4FkUAAAAACdu6gnNpbYoETGJBqVw0Z4uD02R"
                                                        data-theme="light" data-size="normal" data-tabindex="0"
                                                        data-callback="" data-expired-callback="" data-error-callback=""
                                                        data-recaptcha-widget-id="0">
                                                        <div style="width: 304px; height: 78px;">
                                                            <div><iframe title="reCAPTCHA"
                                                                    src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdL4FkUAAAAACdu6gnNpbYoETGJBqVw0Z4uD02R&amp;co=aHR0cHM6Ly9hcGx1cy1zZWN1cml0eS5jb206NDQz&amp;hl=es&amp;v=zLD1nfkNCJC1kEswSRdSyd-p&amp;theme=light&amp;size=normal&amp;cb=9lsm641yyb4q"
                                                                    width="304" height="78" role="presentation"
                                                                    name="a-agvgd9mf54pv" frameborder="0" scrolling="no"
                                                                    sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                                            </div>
                                                            <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response"
                                                                style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                                        </div><iframe style="display: none;"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button class="  btn btn-success " type="submit">Enviar</button>
                                                <input type="hidden" name="option" value="com_contact">
                                                <input type="hidden" name="task" value="contact.submit">
                                                <input type="hidden" name="return" value="">
                                                <input type="hidden" name="id" value="1:a-security">
                                                <input type="hidden" name="de2182caaab03d99bee5268238c73d7c" value="1">
                                            </div>
                                        </form>
                                    </h4>
                                </div>
                                <div class="col-xs-12 col-sm-6 padding-left-60 hidden-xs" id="contactpage-contact-right">
                                    <iframe style="width: 100%;"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3798.856136334454!2d-63.18949446631603!3d-17.79845714054317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTfCsDQ3JzUzLjYiUyA2M8KwMTEnMjMuMyJX!5e0!3m2!1ses!2s!4v1508977251998&quot;"
                                        width="470" height="360" frameborder="0" allowfullscreen=""></iframe>
                                    <div class="contact-title">
                                        <h3><span>
                                                <h3>Contacto</h3>
                                            </span></h3>
                                    </div>
                                    <div class="contact-address-block">
                                        <div class="contact-address">
                                            <div class="media">
                                                <div class="pull-left">
                                                    Direccion :
                                                </div>
                                                <div class="media-body">
                                                    <span class="contact-street">

                                                        Av. Ana Barba # 674 </span>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="contact-contactinfo">

                                            <div class="media">
                                                <div class="pull-left">
                                                    Telefono:
                                                </div>
                                                <div class="media-body contact-telephone">

                                                    +591 3 3541802 </div>
                                            </div>

                                            <div class="media">
                                                <div class="pull-left">
                                                    Celular:
                                                </div>
                                                <div class="media-body contact-mobile">
                                                    +591 750 02428 </div>
                                            </div>
                                            <div class="media">
                                                <div class="pull-left">
                                                    Email :
                                                </div>
                                                <div class="media-body contact-emailto">
                                                    <span id="cloak0834506555a71566290de4fb4042d49a"><a
                                                            href="mailto:info@aplus-security.com">info@aplus-security.com</a></span>
                                                    <script type="text/javascript">
                                                        document.getElementById('cloak0834506555a71566290de4fb4042d49a').innerHTML = '';
                                                        var prefix = '&#109;a' + 'i&#108;' + '&#116;o';
                                                        var path = 'hr' + 'ef' + '=';
                                                        var addy0834506555a71566290de4fb4042d49a = '&#105;nf&#111;' + '&#64;';
                                                        addy0834506555a71566290de4fb4042d49a = addy0834506555a71566290de4fb4042d49a +
                                                            '&#97;pl&#117;s-s&#101;c&#117;r&#105;ty' + '&#46;' + 'c&#111;m';
                                                        var addy_text0834506555a71566290de4fb4042d49a = '&#105;nf&#111;' + '&#64;' +
                                                            '&#97;pl&#117;s-s&#101;c&#117;r&#105;ty' + '&#46;' + 'c&#111;m';
                                                        document.getElementById('cloak0834506555a71566290de4fb4042d49a').innerHTML += '<a ' + path + '\'' + prefix + ':' +
                                                            addy0834506555a71566290de4fb4042d49a + '\'>' + addy_text0834506555a71566290de4fb4042d49a + '<\/a>';
                                                    </script>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="contact-footer-social">
                                        <a href="https://www.facebook.com/" target="new"><i
                                                class="fa fa-facebook">&nbsp;</i></a>
                                    </div>
                                    <h4
                                        style="box-sizing: inherit; font-family: Poppins, sans-serif; line-height: normal; color: #252525; margin: 0px 0px 20px; font-size: 21px; border: 0px; outline: 0px; vertical-align: baseline; clear: both; -webkit-font-smoothing: antialiased; padding: 10px !important 0px 5px !important 0px;">
                                        HORARIOS DE ATENCION</h4>
                                    <div
                                        style="box-sizing: inherit; border: 0px; font-family: Roboto, sans-serif; font-size: 15px; font-weight: normal; margin: 0px 0px 35px; outline: 0px; padding: 0px; vertical-align: baseline; color: #7d7d7d; line-height: 26px; text-transform: none;">
                                        <div
                                            style="box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">
                                            <p
                                                style="box-sizing: inherit; margin: 0px; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; padding: 0px; vertical-align: baseline; line-height: 1.7; outline: 0px !important;">
                                                <span
                                                    style="box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; width: 180px; display: inline-block;">Lunes
                                                    a Viernes:</span>&nbsp;<span
                                                    style="box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; padding: 0px; vertical-align: baseline; color: #252525; outline: 0px !important;">8:30
                                                    am - 18:30 pm</span></p>
                                            <p
                                                style="box-sizing: inherit; margin: 0px 0px 1.6em; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; outline: 0px; padding: 0px; vertical-align: baseline; line-height: 1.7;">
                                                <span
                                                    style="box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; width: 180px; display: inline-block;">Sabados:</span>&nbsp;<span
                                                    style="box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: #252525;">8:00
                                                    am - 12:00 pm<br>
                                                </span> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script type="text/javascript">
            jQuery('#jform_contact_name').attr('placeholder', '*Nombre Completo');
            jQuery('#jform_contact_email').attr('placeholder', '*Email');
            jQuery('#jform_contact_emailmsg').attr('placeholder', '*Telefono');
            jQuery('#jform_contact_message').attr('placeholder', '*Mensaje  ');
        </script>
        <div class="zo2–column-656532414623afdf8ee1d4 col-md-0 col-sm-0"></div>
    </section>
@endsection
