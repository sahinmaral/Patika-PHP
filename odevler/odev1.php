<?php


function draw_perpendicular_triangle($height){
    for ($i=0; $i < $height; $i++) { 
        for ($k=0; $k < $i; $k++) { 
            echo '0 ';
        };
        echo '</br>';    
    };
}

draw_perpendicular_triangle(15)


?>