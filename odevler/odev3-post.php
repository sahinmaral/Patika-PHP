<?php

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">';

$number = $_POST['number'];

if(is_numeric($number)){
    $status = $number % 3 == 0;

    echo '<div class="alert alert-primary" role="alert" style="font-weight:600">Girilen sayi : ' . $number . '<br/>';

    if($status){
        echo 'Girdiginiz sayi uce bolunebilir. </div>';
    }
    else{
        $afterNum = $number;
        while ($afterNum % 3 !== 0) {
            $afterNum++;
        }
        echo 'Girdiginiz sayi uce bolunemez. Bolunebilecek ilk sayi ' . $afterNum . '</div>';
        
    }
}

else{
    echo '<div class="alert alert-danger" role="alert" style="font-weight:600">
            Sayi girdiginize emin olun.
          </div>';
}

