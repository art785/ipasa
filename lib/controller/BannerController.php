<?php
include 'lib/doctrine/Sql_Slide_Banner.php';
class BannerController extends Sql_Slide_Banner{

    public function llena_slide()
    {
        $slides=$this->rutas_slide();
        foreach ($slides as $slide)
        {
            print  '  <img style="width:609px; height:119px;" src="'.$slide->getRuta().'" />';
        }    
    }
}
?>
