<?php

/**
 * post.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * > Dikkat: Bu dosya hem direk çalıştırılabilir hem de `posts.php` dosyasında
 * > 1+ kez içe aktarılmış olabilir.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - $id değişkeni yoksa "1" değeri ile tanımlanmalı, daha önceden bu değişken
 * tanımlanmışsa değeri değiştirilmemeli. (Kontrol etmek için `isset`
 * (https://www.php.net/manual/en/function.isset.php) kullanılabilir.)
 * - $id için yapılan işlemin aynısı $title ve $type için de yapılmalı. (İstediğiniz
 * değerleri verebilirsiniz)
 * - Bir sonraki adımda ilgili içerik gösterilmeden önce bir div oluşturulmalı ve
 * bu div $type değerine göre arkaplan rengi almalıdır. (urgent=kırmızı,
 * warning=sarı, normal=arkaplan yok)
 * - `getPostDetails` fonksiyonu tetiklenerek ilgili içeriğin çıktısı gösterilmeli.
 */

include_once "functions.php";  //functions dosyasını içeri aktardık
if(!isset($id)):  //herhangi id tanımlanmamışsa 1 değeri verdik id için
    $id=1;

endif;
if(!isset($value["title"])): //herhangi title tanımlanmamışsa "default" değerini verdik title için($value , posts.phpdeki foreach döngüsünde getLatestPostun posts[] değişkeni içindeki her bir değere verilmiş değişken ismi )
    $title="Default";
else:
    $title=$value["title"];  //eğer bir tanımlama var ise Yazı. $i ile kaçıncı döngü ise onu verir(Yazı #1,Yazı #2 vs.)
endif;
if(!isset($value["type"])):  //herhangi type tanımlanmamışsa "warning" değerini verdik type için($value , posts.phpdeki foreach döngüsünde getLatestPostun posts[] değişkeni içindeki her bir değere verilmiş değişken ismi)
    $type="warning";
else:
    $type=$value["type"];  //eğer bir type tanımlaması var ise random şekilde getLatestPosttan alacak($type = $postTypes[rand(0, count($postTypes)-1)] ile birlikte)
endif;

if($type=="urgent"):  //type urgent ise..
    echo "<div style = 'background-color:red' >";  //arkaplanımı kırmızı yap
elseif ($type=="warning"): //type warning ise..
    echo "<div style = 'background-color:yellow' >"; //arkaplanımı sarı yap
elseif ($type=="normal"): //type normal ise..
    echo "<div style = 'background-color:null' >"; //arkaplanı boş geç
endif;
    
    
echo getPostDetails($id,$title)."</div>"; //functions.phpdeki bu fonksiyonu çalıştırarak postlar ekrana basılır

