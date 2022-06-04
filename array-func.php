<?php 

// print_r();
// Bir değişkenin veya dizinin gösterimini ekrana basar.

// var_dump();
// Bu işlev bir değişkenin türü ve değeri dahil değişkenle ilgili bilgileri gösterir. Diziler ve nesneler ardışık olarak bileşenlerine ayrılarak tüm yapısı değerleriyle birlikte gösterilir.

// explode();
// Bir dizgeyi bir ayraca göre bölüp bir dizi haline getirir
// Javascript , split fonksiyonuna benzer

// implode();
// Dizi elemanlarını birleştirip bir dizge elde eder.
// Javascript , join fonksiyonuna benzer.

// count();
// Bir dizideki eleman sayısını veya bir nesnedeki şeylerin sayısını döndürür.

// is_array();
// Değişkenin bir dizi içerip içermediğine bakar

// shuffle();
// Bir diziyi karıştırır.

// array_combine(key_array,value_array);
// Anahtarlar için bir dizi, değerler için ise başka bir dizi kullanarak bir ilişkisel dizi oluşturur.
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

print_r($c);

echo '</br>';
echo '</br>';

// array_count_values(array);
// Bir dizideki tüm değerleri sayar.

$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));

echo '</br>';
echo '</br>';

// array_flip(array);
// Bir dizideki anahtarlarla değerleri yer değiştirir.

$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);

print_r($flipped);

echo '</br>';
echo '</br>';

// array_key_exists(key,array);
// Belirtilen anahtar veya indis dizide var mı diye bakar.

$is_even_number = function ($number){
    return $number%2 == 0 ? true : false;
};

$numbers = range(10,50);

$even_numbers = array_filter($numbers,$is_even_number);

print_r($even_numbers)

// array_merge(array,...arrays);
// Belirtilen dizileri ardarda ekleyerek yeni bir dizi oluşturur.

// array_rand(array,count);
// Bir diziden belli sayıda rasgele anahtar döndürür.

// array_reverse(array);
// Diziyi tersine sıralayıp döndürür.

// array_search(key,array);
// Bir dizide belirtilen değeri arar ve bulursa ilgili ilk anahtarı döndürür.

// in_array(value,array);
// Bir dizide bir değerin varlığını araştırır.

// array_sum(array);
// Bir dizideki değerlerin toplamını hesaplar.

// array_product(array);
// Bir dizideki değerlerin çarpımını bulur.

// array_unique(array);
// Diziden yinelenen değerleri siler.

// array_keys(array,aranilan_deger);
// Bir dizideki tüm anahtarları veya bir anahtar altkümesini döndürür.

// current();
// Bir dizideki geçerli öğeyi döndür
// end();
// Bir dizinin dahili işaretçisini son elemanına ayarlar
// next();
// Bir dizinin dahili işaretçisini ilerletir
// prev();
// Dahili dizi işaretçisini geri alır.

// asort();
// Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan küçükten büyüğe doğru sıralar.
// arsort();
// Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan büyükten küçüğe doğru sıralar.
// ksort();
// Bir diziyi anahtarlarına göre küçükten büyüğe doğru sıralar.
// krsort();
// Bir diziyi anahtarlarına göre büyükten küçüğe doğru sıralar.

?>