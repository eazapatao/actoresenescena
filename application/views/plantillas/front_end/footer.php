
<!--footer-->
<div class="footer">
    <div class="footer-info">
        <div class="container">
            <div class="icons wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                <ul>
                    <li><a href="https://www.facebook.com/actoresenescena/?ref=br_rs" target="_blank" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><img src="<?php echo base_url()?>asset/front_end/images/i1.png" alt=""></a></li>
                    <li><a href="https://twitter.com/actoresenescena?lang=es" data-toggle="tooltip" target="_blank" data-placement="top" title="" data-original-title="Twitter"><img src="<?php echo base_url()?>asset/front_end/images/i2.png" alt=""> </a></li>
                    <li><a href="https://www.youtube.com/user/ACTORESENESCENA" data-toggle="tooltip" target="_blank" data-placement="top" title="" data-original-title="Youtube"><img src="<?php echo base_url()?>asset/front_end/images/i4.png" alt=""></a></li>
                </ul>
                <script>$(function () {
                        $('[data-toggle="tooltip"]').tooltip()
                    })</script>
            </div>
            <p>Visitenos Cra 24 No. 62 – 39 Palogrande, Manizales Caldas, Colombia</p><br>
            <p>Email: actoresenescena@gmail.com</p><br>
            <p>Teléfonos (6) 885 06 34 - 312 720 7233 312 269 0033 </p>
        </div>
    </div>
</div>
<!--/footer-->
<!--start-smooth-scrolling-->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!--end-smooth-scrolling-->
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- animation-effect -->
<link href="<?php echo base_url()?>asset/front_end/css/animate.min.css" rel="stylesheet">
<script src="<?php echo base_url()?>asset/front_end/js/wow.min.js"></script>
<script src="<?php echo base_url()?>asset/front_end/js/bootstrap-modal.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
    // When the document is ready
    $(document).ready(function () {

        $('#fecha').datepicker({
            format: "yyyy/mm/dd"
        });

    });
</script>


<!-- fecha-->

<script>
    new WOW().init();
</script>
<!--/Mapa-->
<div class="map wow fadeInUp animated animated" data-wow-delay=".5s"
     style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.281308018179!2d-75.49016148585328!3d5.058081939864886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e47657c338681fb%3A0x62597a6bca14fb7e!2sActores+en+Escena!5e0!3m2!1ses!2ses!4v1491416374001"
        style="border:0"></iframe>

</div>
<!-- //animation-effect -->
</body>
</html>