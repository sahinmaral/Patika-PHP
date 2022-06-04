<?php

# Degisken atama

$value = 15;
echo $value;

echo '</br>';

# Sabitler

define('PI',3.14);
echo PI;

# Degisken Turleri

echo '</br>';
echo '</br>';
echo gettype($value); 
echo '</br>';
echo gettype(PI); 
echo '</br>';
echo gettype('Testing');
echo '</br>';
echo gettype(true);
echo '</br>';
echo gettype([1,2,3,4]);
echo '</br>';
echo '</br>';

# Matematiksel Operatorler

echo 7 - 2; echo '</br>';
echo 7 + 2; echo '</br>';
echo 7 * 2; echo '</br>';
echo 7 / 2; echo '</br>';
echo 7 % 2; echo '</br>';
echo '</br>';

# Karsilastirma Operatorleri

// Deger karsilastirma
var_dump(7 == '7'); 
echo '</br>';

// Tur karsilastirma
var_dump(7 === '7'); 
echo '</br>';

var_dump(4 <=> 3); echo '</br>';
var_dump(3 <=> 4); echo '</br>';
var_dump(3 <=> 3); echo '</br>';

# Artirma ve Azaltma Operatorleri

$value = 5;
$value2 = 5;

echo ++$value; echo '</br>';
echo $value2++; echo '</br>';
echo $value2; echo '</br>';
echo '</br>';

# Birlestirme Operatoru


$text = 'Bu bir test yazisidir';
$text2 = ' , lutfen dikkate almayiniz';

echo $text.$text2;

echo '</br>';
$text .= $text2;
echo $text;

# Mantiksal Operatorler

echo '</br>';
echo '</br>';
var_dump(2 != 3 && 2 == 2); echo '</br>';
var_dump(2 != 3 || 2 == 3); echo '</br>';
var_dump(2 !== 3); echo '</br>';

# IF-ELSEIF-ELSE

echo '</br>';
echo '</br>';

$value = 1;
$value2 = 3;

if($value > 2){
    echo "Sayi , ikiden buyuktur";
}
elseif($value > $value2){
    echo "Birinci sayi , ikinci sayidan buyuktur";
}
else{
    echo 'Kosullar saglanmadi';
}

# Switch-Case

echo '</br>';
echo '</br>';

$gun = 'Pazartesi';

switch ($gun) {
    case 'Pazartesi':
        echo "Bugun , $gun gunu";
        break;
    case 'Sali':
        echo "Bugun , $gun gunu";
        break;
    case 'Carsamba':
        echo "Bugun , $gun gunu";
        break;
    case 'Persembe':
        echo "Bugun , $gun gunu";
        break;
    case 'Cuma':
        echo "Bugun , $gun gunu";
        break;
    case 'Cumartesi':
        echo "Bugun , $gun gunu";
        break;
    case 'Pazar':
        echo "Bugun , $gun gunu";
        break;
    default:
        echo 'Deger yanlis';
        break;
}

# Tek boyutlu diziler

echo '</br>';
echo '</br>';

$arr = array(1,2,3,4,5);
echo print_r($arr);
echo '</br>';

$isimler = [
    'isim1' => 'Sahin',
    'isim2' => 'Fatma'
];

echo $isimler['isim1'];
echo '</br>';
echo var_dump($isimler);

# Cok boyutlu diziler

echo '</br>';
echo '</br>';

$hayvanlar = [
    'Ucan Hayvanlar' => ['Kartal','Guvercin','Sahin'],
    'Surungen Hayvanlar' => ['Sumuklu bocek','Yilan']
];

echo print_r($hayvanlar);

# For dongusu

echo '</br>';
echo '</br>';

for($i = 0; $i < 10; $i++){
    echo 'testing ';
};

# Foreach dongusu

echo '</br>';
echo '</br>';

$numbers = [1,2,3,4,5];

foreach($numbers as $number){
    echo $number; 
    //echo $numbers[$number];
    echo '</br>';
}

# Fonksiyonlar
echo '</br>';
echo '</br>';

function calculate_age($birth_year){
    return 2022 - $birth_year;
};


echo calculate_age(2000);

# Anonim Fonksiyonlar
echo '</br>';
echo '</br>';

$topla = function($sayi1,$sayi2){
    return $sayi1 + $sayi2;
};

echo $topla(1,2);

echo '</br>';
echo '</br>';

$numbers = array_map(function($number){
    return $number ** 2;
},$numbers);

print_r($numbers);

# Recursive Fonksiyonlar

echo '</br>';
echo '</br>';

$categories = [
    [
        'id' => 1,
        'parent' => 0,
        'name' => 'Back-end Teknolojileri'
    ],
    [
        'id' => 2,
        'parent' => 0,
        'name' => 'Front-End Teknolojileri'
    ],
    [
        'id' => 3,
        'parent' => 0,
        'name' => 'Mobil Uygulama'
    ],
    [
        'id' => 4,
        'parent' => 1,
        'name' => 'PHP'
    ],
    [
        'id' => 5,
        'parent' => 1,
        'name' => 'NodeJS'
    ],
    [
        'id' => 6,
        'parent' => 4,
        'name' => 'Laravel'
    ],
    [
        'id' => 7,
        'parent' => 4,
        'name' => 'Codeigniter'
    ],
    [
        'id' => 8,
        'parent' => 2,
        'name' => 'Javascript'
    ],
    [
        'id' => 9,
        'parent' => 8,
        'name' => 'VueJS'
    ],
    [
        'id' => 10,
        'parent' => 8,
        'name' => 'AngularJS'
    ]
];

function get_categories($arr,$par=0){
    $html = '';

    $html .= '<ul>';
    foreach ($arr as $value) {
        if($value['parent'] == $par){
            $html .= '<li>';
            $html .= $value['name'];
            $html .= get_categories($arr, $value['id']);
            $html .= '</li>';
        }
        
    }

    $html .= '</ul>';

    return $html;
};

echo get_categories($categories,0)

?>
