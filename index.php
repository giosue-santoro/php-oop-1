<?php
class Computer {

    public $marca;

    public $processore;

    public $RAM;

    public $prezzo;

    public $garanziaAnni;

    public function __construct($marca, $processore, $RAM, $prezzo, $garanziaAnni) {
        $this->marca = $marca;
        $this->processore = $processore;
        $this->RAM = $RAM;
        $this->prezzo = $prezzo;
        $this->garanziaAnni = $garanziaAnni;
    }

}


$Asus = new Computer('Asus', 'i7', '16GB', '999', '2');
echo $Asus->marca . '</br>';

$Razer = new Computer('Razer', 'i5', '8GB', '799', '1');
echo $Razer->processore . '</br>';

$Microsoft = new Computer('Microsoft', 'i3', '4GB', '599', '3');
echo $Microsoft->RAM . '</br>';

class Painting {

    public $autore;

    public $anno;

    public $prezzo;

    public $periodo;

    public function __construct($autore, $anno, $prezzo, $periodo,$quadro) {
        $this->autore = $autore;
        $this->anno = $anno;
        $this->prezzo = $prezzo;
        $this->periodo = $periodo;
        $this->quadro = $quadro;
    }

}


$Picasso = new Painting('Picasso', '1901', '1M', 'Cubismo','Autoritratto');
echo $Picasso->autore . '</br>';

$Monet = new Painting('Monet', '1873', '2M', 'Impressionismo','I Papaveri');
echo $Monet->quadro . '</br>';

$Dali = new Painting('Dali', '1936', '3M', 'Surrealismo','Telefono Aragosta');
echo $Dali->periodo . '</br>';
