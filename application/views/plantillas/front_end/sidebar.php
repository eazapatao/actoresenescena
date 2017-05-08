<!-- service-type-grid -->
<!-- Formación -->
<div class="gallery w3l-1" id="services">
    <div class="container">
        <?php foreach ($formaciongrande as $key) { ?>

        <div class="gallery-grids">
            <div class="col-md-6 baner-top wow fadeInLeft animated animated" data-wow-delay=".5s"
                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                <center>
                    <h3 class="tittle"><p><?php echo $key['for_titulo'] ?></h3>
                </center>
                <a href="<?php echo base_url() . 'uploads/' . $key['for_fotografia'] ?>"
                   class="b-link-stripe b-animate-go  swipebox">

                    <div class="gal-spin-effect vertical ">
                        <img src="<?php echo base_url() . 'uploads/' . $key['for_fotografia1'] ?>" alt=" "/>
                        <div class="gal-text-box">
                            <div class="info-gal-con">

                                <span class="separator"></span>
                                <p><?php echo $key['for_descripcion'] ?>
                                </p>
                                <span class="separator"></span>

                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <?php } ?>
            <?php foreach ($formacionpequeño as $key) { ?>
                <div class="col-md-3 baner-top ban-mar wow fadeInLeft animated animated" data-wow-delay=".5s"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">

                    <a href="<?php echo base_url() . 'uploads/' . $key['for_fotografia'] ?>"
                       class="b-link-stripe b-animate-go  swipebox">
                        <div class="gal-spin-effect vertical ">
                            <img src="<?php echo base_url() . 'uploads/' . $key['for_fotografia1'] ?>" alt=" "/>
                            <div class="gal-text-box">
                                <div class="info-gal-con">
                                    <h4><?php echo $key['for_titulo'] ?></h4>
                                    <span class="separator"></span>
                                    <p><?php echo $key['for_descripcion'] ?></p>
                                    <span class="separator"></span>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>


            <?php } ?>
            <!-- //Video youtube -->
            <div class="col-md-12 baner-top wow fadeInRight animated animated" data-wow-delay=".5s"
                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">

                <div class="gal-spin-effect vertical ">
                    <center>
                        <div class="”video-responsive”">

                            <iframe src="https://www.youtube.com/embed/zskQa6vp3yY" frameborder="0"
                                    allowfullscreen="allowfullscreen"></iframe>

                        </div>
                    </center>
                </div>
                </a>
            </div>


            <div class="clearfix"></div>


        </div>

    </div>
    <!--/Repertorio-->
    <div class="about w3agile" id="about">
        <div class="container">
            <h3 class="tittle">Repertorio</h3>
            <!--/about-section2-->
            <?php foreach ($repertorios as $key) { ?>
                <div class="about-section">

                    <div class="col-md-5 ab-text two wow fadeInLeft animated animated" data-wow-delay=".5s"
                         style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft; word-wrap: break-word;">

                        <p> Nombre de la obra: <?= $key['rep_obra'] ?><br>
                            Autor: <?= $key['rep_autor'] ?><br>
                            Director: <?= $key['rep_director'] ?><br>
                            Género: <?= $key['rep_genero'] ?><br>
                            Duración: <?= $key['rep_duracion'] ?><br>
                            Sinopsis: <?= $key['rep_sinopsis'] ?><br>
                            Tiempo de montaje: <?= $key['rep_tiempomon'] ?><br>
                            Tiempo de desmontaje: <?= $key['rep_tiempodes'] ?><br></p>

                    </div>

                    <div class="col-md-7 ab-left wow fadeInRight animated animated" data-wow-delay=".5s"
                         style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">

                        <div class="grid">
                            <div class="h-f">
                                <figure class="effect-jazz">
                                    <img data-toggle="modal"
                                         data-target="" href="#reservar"
                                         src="<?php echo base_url() . 'uploads/' . $key['fxr_foto'] ?>"/>

                                    <figcaption>


                                    </figcaption>
                                </figure>

                            </div>
                            <div class="h-f">
                                <figure class="effect-jazz">
                                    <img data-toggle="modal"
                                         data-target="" href="#reservar"
                                         src="<?php echo base_url() . 'uploads/' . $key['fxr_foto2'] ?>"/>

                                    <figcaption>


                                    </figcaption>
                                </figure>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            <?php } ?>
            <!--//about-section2-->
            <!--/about-section-->

            <!--//about-section-->
        </div>
    </div>
    <!--Teatro empresarial-->
    <div class="gallery w3l-1" id="gallery">
        <div class="container">
            <h3 class="tittle">Teatro empresarial</h3>
            <div class="gallery-grids">
                <div class="col-md-12 baner-top wow fadeInLeft animated animated" data-wow-delay=".5s"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft; >
                <div class=" gal-spin-effect vertical
                ">
                <p style='text-align: justify;'> Atendemos las necesidades de diferentes empresas tanto públicas como
                    privadas. A través del teatro llevamos mensajes de interés de nuestros aliados como Socialización del
                    reglamento interno de trabajo, Deberes y derechos, Procesos productivos, Riesgos profesionales, Mensajes
                    ecológicos.
                </p>
            </div>
        </div>
        <div class="clearfix"></div>
        <!--/Clientes-->
        <!-- required-js-files-->
        <link href="<?php echo base_url() ?>asset/front_end/css/owl.carousel.css" rel="stylesheet">
        <script src="<?php echo base_url() ?>asset/front_end/js/owl.carousel.js"></script>
        <script>
            $(document).ready(function () {
                $("#owl-demo").owlCarousel({
                    items: 1,
                    lazyLoad: true,
                    autoPlay: true,
                    navigation: false,
                    navigationText: false,
                    pagination: true,
                });
            });
        </script>
        <!--//required-js-files-->
        <center><h4>Se han realizado proyectos artísticos con</h4><br></center>

        <div id="owl-demo" class="owl-carousel">
            <?php foreach ($fototeatroempresarial as $key) { ?>
            <div class="item-owl">
                <div class="test-review wow fadeInUp animated animated" data-wow-delay=".5s"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <img src="<?php echo base_url() . 'uploads/' . $key['fxt_fotografia'] ?>" class="img-responsive"
                         alt=""/>
                    <br>
                    <h3><?= $key['fxt_empresa'] ?></h3>
                </div>
            </div>
            <?php } ?>


        </div>

        <!--//screen-gallery-->
        <div class="clearfix"></div>
    </div>
    <!--/Programación-->
    <div class="about w3agile" id="testimonials">
        <div class="container">
            <center><h3 class="tittle">Programación</h3></center>
            <!--/about-section2-->

            <?php foreach ($repertoriosactivos as $key) { ?>

            <div class="about-section">
                <div class="col-md-5 ab-text two wow fadeInLeft animated animated" data-wow-delay=".5s"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft; word-wrap: break-word;">
                    <p>Nombre de la obra: <?= $key['rep_obra'] ?><br>
                        Autor: <?= $key['rep_autor'] ?><br>
                        Director: <?= $key['rep_director'] ?><br>
                        Género: <?= $key['rep_genero'] ?><br>
                        Duración: <?= $key['rep_duracion'] ?><br>
                        Sinopsis: <?= $key['rep_sinopsis'] ?><br>
                        Temporada: <?= $key['rep_temporada'] ?>
                </div>
            </div>

            <div class="col-md-7 ab-left wow fadeInRight animated animated" data-wow-delay=".5s"
                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">

                <div class="grid">
                    <!--//Imagen 1-->
                    <div class="h-f">
                        <figure class="effect-jazz">
                            <div class="top-menu wow fadeInRight animated animated" data-wow-delay=".5s"
                                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                                <img data-toggle="modal"
                                     data-target="#myModal" href="#reservar"
                                     src="<?php echo base_url() . 'uploads/' . $key['fxr_foto3'] ?>"/>

                            </div>
                        </figure>
                    </div>
                    <!--//Imagen 2-->
                    <div class="h-f">
                        <figure class="effect-jazz">
                            <div class="top-menu wow fadeInRight animated animated" data-wow-delay=".5s"
                                 style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                                <img data-toggle="modal"
                                     data-target="#myModal" href="#reservar"
                                     src="<?php echo base_url() . 'uploads/' . $key['fxr_foto4'] ?>"/>
                            </div>
                        </figure>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
        <?php } ?>
        <!--//about-section2-->
        <!--/about-section-->

        <!--//about-section-->
    </div>
    <!--/formulario flotante-->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Reservaciones</h4>
                </div>
                <form name=tuformulario action="<?= base_url() ?>index.php/reserva/guardar_reservapublico/"
                      method="POST"
                      enctype="multipart/form-data">
                    <div class="box-body" style='font-size: small'>
<center>
                        <div class="form-group">
                            <label>Nombre de la obra</label><br>
                            <select class="selectpicker" name="obra" id="obra" data-live-search="true">
                                <option>Seleccione Obra</option>
                                <?php foreach ($repertoriosactivos as $obra) { ?>
                                    <option value="<?= $obra['rep_codigo'] ?>"><?= $obra['rep_obra'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
</center>
                        <div class="form-group">
                            <label>Nombre completo</label>
                            <input type="text" class="form-control" id="nombre" name="nombre"
                                   placeholder="Nombre completo">
                        </div>

                        <div class="form-group">
                            <label>Correo electrónico</label>
                            <input type="text" class="form-control" id="correo" name="correo"
                                   placeholder="Correo electrónico">
                        </div>
                        <center>
                        <div class="form-group">
                            <label>Fecha</label><br>
                            <input type="text" placeholder="Seleccione fecha" id="fecha" name="fecha">
                        </div>
                        </center>

                        <div class="form-group">
                            <label>Número de sillas</label>

                            <select class="form-control" id="sillas" name="sillas" placeholder="Sillas">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>


                            </select>

                            <div class="form-group">
                                <label>Tipo de boleta</label>

                                <select class="form-control" id="tipoboleta" name="tipoboleta"
                                        placeholder="Tipo de boleta">
                                    <option value="15000">Particular $15.000</option>
                                    <option value="12000">Suscriptor de la patria $12.000</option>
                                    <option value="10000">Estudiante con carnet $10.000</option>
                                </select>
                            </div>


                        </div><!-- /.box-body -->

                    </div>


                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary" onclick="pregunta2()">Guardar</button>
                    </div>

                    <br>
                    <center>Importante</center>
                    <p style='text-align: justify; font-size: x-small'>
                        <br>1) El precio descrito en las opciones correspone a una (1) boleta<br>
                        2) El precio de reservación para suscriptores de la patria es de una (1) boleta por
                        suscriptor<br>
                        3) Estudiantes con carnet deberán presentar su carnet activo para ingresar a la función<br>
                        4) La reserva se respetará hasta 10 minutos antes de la hora de la función.<br>
                        5) Si existen cambios en su reserva por favor informarlo</p>
                </form>

            </div>

        </div>
    </div>
    <!--Quienes-somos-->
    <div class="team-section" id="team">
        <div class="container">
            <h3 class="tittle">Quienes somos</h3>

            <div class="box2">
                <p style='text-align: justify;'>La Fundación Cultural Actores en Escena nace en Manizales en enero de
                    1.994,
                    como una nueva
                    alternativa teatral para la ciudad de Manizales. En el mismo año de su creación, Actores en Escena
                    avala la creación de su Escuela de Teatro, cuyo objetivo primordial es fomentar en la juventud la
                    afición y el amor por el arte de las tablas.
                    Actores en Escena ha realizado hasta la fecha variedad de producciones teatrales, desde el teatro de
                    la comedia, pasando por el teatro de calle, el teatro clásico, el teatro infantil, explorando
                    también el teatro de laboratorio, el teatro negro, tratando que las pinceladas dejen trazos certeros
                    en todos los procesos abordados. </p>
                <?php foreach ($quienessomos as $key) { ?>


                    <div class="col-md-3 s-1 wow fadeInLeft animated animated" data-wow-delay=".5s"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                    <a href="#">
                        <div class="view view-fifth">
                            <img src="<?php echo base_url() . 'uploads/' . $key['quie_fotografia'] ?>" class="img-responsive"
                                 alt="">



                            <div class="mask">
                                <h4><?= $key['quie_nombre'] ?></h4>
                                <p><?= $key['quie_descripcion'] ?></p>
                                <ul>
                                    <li>
                                        <a href="<?=$key['quie_twitter']?>" target="_blank">
                                            <div class="morph pic fb_icon1">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= $key['quie_facebook'] ?>" target="_blank">
                                            <div class="morph pic fb_icon2">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?= $key['quie_instagram'] ?>" target="_blank">
                                            <div class="morph pic fb_icon3">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </a>
                    <h3><?= $key['quie_nombre'] ?></h3>
                </div>
                <?php } ?>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--end-team-->
    <!--Contáctenos-->
    <div class="contact_w3agile" id="contact">
        <div class="container wow fadeInUp animated animated" data-wow-delay=".5s"
             style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
            <h2 class="title">Contáctenos</h2>

            <form action="<?= base_url() ?>index.php/contacto/guardar_contacto/" method="post">
                <input type="text" value="nombre" name="nombre" onfocus="this.value='';"
                       onblur="if (this.value == '') {this.value ='Nombre';}">
                <input type="email address" value="email" name="email" onfocus="this.value='';"
                       onblur="if (this.value == '') {this.value ='Email';}">
                <input type="text" value="asunto" name="asunto" onfocus="this.value='';"
                       onblur="if (this.value == '') {this.value ='Asunto';}">
                <textarea value="mensaje" name="mensaje" onfocus="this.value = '';"
                          onblur="if (this.value == '') {this.value = 'Mensaje';}"
                          required="">Mensaje</textarea>
                <div class="con-form text-center">
                    <input type="submit" value="Enviar">
                </div>
            </form>

        </div>
    </div>
