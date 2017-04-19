<body>
<!--start-home-->
<div class="banner w3l" id="home">

    <div class="header-bottom">

        <?php foreach ($banner as $key) { ?>
            <style>
                .banner {
                    background: url(<?php echo base_url().'uploads/' . $key['ban_fotografia'] ?>);
                    background-size: 100%;
                    -webkit-background-size: 100%;
                    -moz-background-size: 100%;
                    -o-background-size: 100%;
                    -ms-background-size: 100%;
                    min-height: 800px;
                    position: relative;
                    background-repeat: no-repeat;

                }

                /*  .test-left-img {
                      background: url();
                    background-size: 100%;
                    -webkit-background-size: 100%;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    -ms-background-size: cover;
                    min-height: 700px;


                } */


            </style>
        <?php } ?>

        <div class="container">

            <div class="fixed-header">

                <!--logo-->
                <div class="logo wow fadeInLeft animated animated" data-wow-delay=".5s"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">

                    <a href="<?= base_url() ?>index.php/login">

                    </a>
                </div>


                <!--//logo-->
                <div class="top-menu wow fadeInRight animated animated" data-wow-delay=".5s"
                     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
                    <span class="menu"> </span>
                    <nav class="link-effect-4" id="link-effect-4">
                        <ul>
                            <li class="active"><a data-hover="Inicio" href="<?= base_url() ?>">Inicio</a></li>
                            <li><a data-hover="Formación" href="#services" class="scroll">Formación</a></li>
                            <li><a data-hover="Repertorio" href="#about" class="scroll">Repertorio</a></li>
                            <li><a data-hover="Teatro_empresarial" href="#gallery" class="scroll">Teatro_empresarial</a>
                            </li>
                            <li><a data-hover="Programación" href="#testimonials" class="scroll">Programación</a></li>
                            <li><a data-hover="Quienes_somos" href="#team" class="scroll">Quienes_somos</a></li>
                            <li><a data-hover="Contacto" href="#contact" class="scroll">Contacto</a></li>

                        </ul>
                    </nav>

                </div>


                <!-- script-for-menu -->
                <script>
                    $("span.menu").click(function () {
                        $(".top-menu ul").slideToggle("slow", function () {
                        });
                    });
                </script>
                <!-- script-for-menu -->

                <div class="clearfix"></div>
                <script>
                    $(document).ready(function () {
                        var navoffeset = $(".header-bottom").offset().top;
                        $(window).scroll(function () {
                            var scrollpos = $(window).scrollTop();
                            if (scrollpos >= navoffeset) {
                                $(".header-bottom").addClass("fixed");
                            } else {
                                $(".header-bottom").removeClass("fixed");
                            }
                        });

                    });
                </script>
            </div>
        </div>
    </div>


    <!--banner Slider starts Here-->
    <script src="<?php echo base_url() ?>asset/front_end/js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!--banner Slider starts Here-->

</div>
</body>