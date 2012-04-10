<?php
include 'lib/doctrine/Sql_Slide_Show.php';
class SlideController extends Sql_Slide_Show{

    public function llena_slide()
    {
        $slides=$this->rutas_slide();
        foreach ($slides as $slide)
        {
            print  '  <img style="width:700px; height:350px;" src="'.$slide->getRuta().'" alt="" title="'.$slide->getDescripcion().' " />';
        }    
    }
}
?>
