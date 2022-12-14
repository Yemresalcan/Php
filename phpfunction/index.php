<?php

class hesapla {
    public $kisakenar;
    public $uzunkenar;
    public $digerkenar; //Üçgen için 3.kenar
    public $h; //Yükseklik

}

    class Dikdortgen extends hesapla
{
    public function AlanDik($kisakenar , $uzunkenar) {
        return $kisakenar * $uzunkenar;
    }
    public  function CevreDik ($kisakenar, $uzunkenar) {
        return $kisakenar+$uzunkenar;
    }

}
class Kare extends hesapla
{
    public function AlanKare($kisakenar) {
        return $kisakenar * $kisakenar;
    }
    public  function CevreKare ($kisakenar) {
        return $kisakenar*4;
    }

}
class Ucgen extends hesapla
{
    public function AlanUcgen($digerkenar,$h ) {
        return ($digerkenar *$h)/2;
    }
    public  function CevreUcgen ($kisakenar, $uzunkenar,$digerkenar) {
        return $kisakenar+$uzunkenar+$digerkenar;
    }

}

$hesaplaDik= new Dikdortgen();
    echo "Diktorgen alanı :".$hesaplaDik->AlanDik(13,8);
    echo "<pre>";
    echo "Diktorgen çevre: " .$hesaplaDik->CevreDik(5,8);
    echo "<pre>";

$hesapUc = new Ucgen();
    echo "Üçgenin alanı: ".$hesapUc->AlanUcgen(122.5, 6);
    echo "<pre>";
    echo "Üçgenin çevresi: ".$hesapUc->CevreUcgen(3, 4, 5);
    echo "<pre>";



$hesapKar = new Kare();
    echo "Karenin alanı: ".$hesapKar->AlanKare(5);
    echo "<pre>";
    echo "Karenin çevresi: ".$hesapKar->CevreKare(5);


?>