<?php
include_once 'lib/doctrine/Sql_Videos.php';

class VideoController{
	
	public function Videos_Ofertada(){
		
		$videos = new Sql_Videos();
		$urls=$videos->rutas_videos();
		foreach($urls as $url)
		{
			echo "<div id = 'cuadro_video'>";
			echo '<a class="gmap" href="http://www.youtube.com/embed/'.$url->getUrl().'?autoplay=1"><img style="width:300px; height:200px" alt ="" src="'.$url->getRuta().'" /></a>';
			echo "<div>".$url->getDescripcion()."</div>";
			echo "</div>";
		}
		
	}
}
