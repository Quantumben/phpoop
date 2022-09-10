<?php 


class File{

    function showfileInfo($filename){
        echo "The name of the file that will open is <b>$filename</b>";
        echo "<br>";

        $content = file_get_contents($filename);
        echo "The content of the <b>$filename</b> is : <i>$content</i>";

    }
}

$file = new File();
$file->showfileInfo('testfile.txt');
?>