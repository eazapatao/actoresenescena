<!DOCTYPE HTML>
<html>
<head>
    <title>Actores en escena</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Decorating Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design"/>
    <script type="applisalonion/x-javascript">
         addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    <link href="<?php echo base_url() ?>asset/front_end/css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <!-- Custom Theme files -->
    <link href="<?php echo base_url() ?>asset/front_end/css/iconeffects.css" rel='stylesheet' type='text/css'/>
    <link href="<?php echo base_url() ?>asset/front_end/css/style.css" rel='stylesheet' type='text/css'/>
    <link href="<?php echo base_url() ?>asset/front_end/css/bootstrap-datepicker.css" rel='stylesheet' type='text/css'/>
    <!-- Fechas-->
    <link rel="stylesheet" type="text/css" media="screen"
          href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>asset/front_end/css/swipebox.css">
    <script src="<?php echo base_url() ?>asset/front_end/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url() ?>asset/front_end/js/bootstrap.js"></script>

    <script type="text/javascript" src="<?php echo base_url() ?>asset/front_end/js/move-top.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>asset/front_end/js/easing.js"></script>
    <!--/web-font-->
    <link href='//fonts.googleapis.com/css?family=Ubuntu:400,300italic,300,500,400italic,500italic,700,700italic'
          rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Merriweather+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <!--/script-->
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 900);
            });
        });
    </script>
    <!-- swipe box js -->
    <script src="<?php echo base_url() ?>asset/front_end/js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
        jQuery(function ($) {
            $(".swipebox").swipebox();
        });
    </script>
    <!-- //swipe box js -->

    <script language="JavaScript">
        function pregunta2() {
            if (alert('¡Revisa tu correo electrónico para confirmar los datos de tu reserva!')) {

                document.tuformulario.submit()
            }
            else {
                window.close();
            }
        }

        </script>
</head>