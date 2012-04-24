<?php
include_once 'lib/doctrine/Sql_Videos.php';

class VideoController{
	
	public function Videos_Ofertada(){
		
		$videos = new Sql_Videos();
		$urls=$videos->rutas_videos();
		foreach($urls as $url)
		{
			echo "<div id = 'videos'>";
			echo '<a class="gmap" href="'.$url->getUrl().'"><img style="width:250px; height:250px" alt ="" src="'.$url->getRuta().'" /></a>';
			echo "</div>";
		}
		
	}
}
