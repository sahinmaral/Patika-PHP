<?php

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">';

$array_post = $_POST;

echo '<ul class="list-group">';
echo '<li class="list-group-item"><h3>' . 'Kisisel Bilgiler' . '</h3></li>';
echo '<li class="list-group-item">' . 'Isim : ' . trim(ucfirst($array_post['name'])) . '</li>';
echo '<li class="list-group-item">' . 'Soyisim : ' . trim(ucfirst($array_post['surname'])) .  '</li>';
echo '<li class="list-group-item">' . 'Meslek : ' . $array_post['job']. '</li>';
echo '</ul>';

echo "<br/><br/>";

echo '<ul class="list-group">';
echo '<li class="list-group-item"><h3>' . 'Ilgilendigi Alanlar ' . '</h3></li>';
foreach ($array_post['interests'] as $interest){
    echo '<li class="list-group-item">' . $interest . '</li>';
}
echo '</ul>';

?>