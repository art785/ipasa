<?php 
include "lib/controller/BannerController.php" ;
$slide= new BannerController();
?>
<div class="slider-wrapper theme-default">
            <div class="ribbon"></div>
            <div id="banner" class="nivoSlider">
        <?php $slide->llena_slide(); ?>       
            </div>
 </div>
    <!--<script type="text/javascript" src="banner-principal/scripts/jquery-1.7.1.min.js"></script>-->
    <script type="text/javascript" src="banner-principal/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#banner').nivoSlider();
    });
    </script>
