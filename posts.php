<?php

/**
 * posts.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - functions.php içerisinde oluşturacağınız `getRandomPostCount` fonksiyonunuza min
 * ve max değerleri gönderip bu fonksiyondan rastgele bir tam sayı elde etmeniz
 * gerekiyor. (min ve max için istediğiniz değerleri seçebilirsiniz. Random bir
 * tam sayı elde etmek için `rand` (https://www.php.net/manual/en/function.rand.php)
 * fonksiyonunu kullanabilirsiniz.)
 *
 * - Elde ettiğiniz bu sayıyı da kullanarak `getLatestPosts` fonksiyonunu
 * çalıştırmalısınız. Bu fonksiyondan aldığınız diziyi kullanarak `post.php` betik
 * dosyasını döngü içinde dahil etmeli ve her yazı için detayları göstermelisiniz.
 */

 
 
 
include_once "functions.php"; //functions içeri aktarıldı
$randomCount = getRandomPostCount(1,10); //1-10 Arasında rastgele bir tamsayı alıyoruz ve bunu randomCount değişkenine atıyoruz
$getPost = getLatestPosts($randomCount); //randomCount değişkenini getLatestPosts 'a gönderip dizi döndürüyoruz ve diziyi getPost'a atıyoruz.


   
foreach ($getPost as $id => $value) { //her yinelemede sırası gelen value değerinin keyi id'e atılır ve value döndürülür(value = dizideki her bir post)

      include "post.php"; //post.php içeri aktarıldı 
}
