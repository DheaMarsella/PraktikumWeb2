<?php
class balok
{
    public $panjang;
    public $lebar;
    public $tinggi;

    function volume()
    {
        return $this->panjang * $this->lebar * $this->tinggi;
    }

    function luas_sisi()
    {
        return 2 *(($this->panjang * $this->lebar)+($this->lebar * $this->tinggi)+($this->panjang * $this->tinggi));
    }
}

$objekbalok = new balok;
$objekbalok->panjang = 12;
$objekbalok->lebar = 8;
$objekbalok->tinggi = 4;
echo $objekbalok->volume();
echo "<br>";
echo $objekbalok->luas_sisi();