<?php
include 'lib/doctrine/Sql_Slide_Banner.php';
class BannerController{
	private $sql;
	
	public function __construct()
	{
		$this->sql = new Sql_Slide_Banner();
	}
    public function llena_slide()
    {
        $slides=$this->sql->rutas_slide();
        foreach ($slides as $slide)
        {
            print  '  <img style="width:609px; height:119px;" src="'.$slide->getRuta().'" />';
        }    
    }
}
?>
