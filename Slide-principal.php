<?php 
include "lib/controller/SlideController.php" ;
$slide= new SlideController();
?>
<div class="slider-wrapper theme-default">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
        <?php $slide->llena_slide(); ?>       
            </div>
 </div>
    <!--<script type="text/javascript" src="slide-principal/scripts/jquery-1.7.1.min.js"></script>-->
    <script type="text/javascript" src="slide-principal/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
