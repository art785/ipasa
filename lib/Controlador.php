<?php
include_once 'Sql.php';
class Controlador extends Sql{
    public function Controlador()
    {
        
    }
    public function llena_slide(){
        $slides=$this->rutas_slide();
        foreach ($slides as $slide)
{
            print  '  <img src="'.$slide->getRuta().'" alt="" title="'.$slide->getDescripcion().' " />';
  }
                
            
        
        
    }
}
?>
