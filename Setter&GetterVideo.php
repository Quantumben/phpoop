<?php 

//Getter a nd Setters

class Video {

    //properties
    public $type = '';
    public $duration = '';


    //setter or set method
    function setVideoInfo($video_type, $video_duration){
        $this->type = $video_type;
        $this->duration = $video_duration;

    }

    //getter or get method
    function getVideo2(){
        return "This is an ".$this->type . "video and it lasts " . $this->duration .
        " seconds";
    }
}


//create object
$Video = new Video();
$Video->setVideoInfo('CHINESE MOVIE', 100);
echo $Video->getVideo2();


?>