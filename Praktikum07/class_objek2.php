<?php
class buah
{
    public $namaBuah;
    public $warnaKulit;
    public $rasa;
    public $aroma;

    function __construct($nama, $warna, $taste, $bau)
    {
        $this->namaBuah = $nama;
        $this->warnaKulit = $warna;
        $this->rasa = $taste;
        $this->aroma = $bau;
    }

    function tumbuh()
    {
        return "buah $this->namaBuah itu tumbuh !";
    }

    function busuk()
    {
        return "buah $this->namaBuah itu busuk !";
    }
}
$objek = new Buah("Sirsak","Merah","Maniez","Harum");
echo $objek->tumbuh();
echo "<br>";
echo $objek->busuk();


