<?php

class Videos {
    private $id_video;
    private $url;
    private $id_propiedad;

    public function setId_Video($id_video)
    {
       $this->id_video=$id_video;
        return $this;
    }

    public function getId_Video()
    {
        return $this->id_propiedad;
    }
    public function setUrl($url)
    {
        $this->url=$url;
        return $this;
    }

    public function getUrl()
    {
        return $this->url;
    }
        public function setId_Propiedad($id_propiedad)
    {
        $this->id_propiedad=$id_propiedad;
        return $this;
    }

    public function getId_Propiedad()
    {
        return $this->id_propiedad;
    }

}
?>
