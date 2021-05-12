<?php

class Prodotto {
   //attributi
   public $nome;
   public $prezzo;

   public function __construct(string $_nome, int $_prezzo)
	{
		$this->nome = $_nome;
		$this->prezzo = $_prezzo;
	}

}


class Smartphone extends Prodotto {
   //attributi
   public $marca;
   public $colore;

   public function __construct(string $_nome, int $_prezzo, string $_marca, string $_colore)
	{
      parent::__construct($_nome, $_prezzo);
		$this->marca = $_marca;
		$this->colore = $_colore;
	}

}

class Lavatrice extends Prodotto {
   //attributi
   public $caricoMax;
   public $giri;

   public function __construct(string $_nome, int $_prezzo, string $_caricoMax, string $_giri)
	{
      parent::__construct($_nome, $_prezzo);
		$this->caricoMax = $_caricoMax;  
		$this->giri = $_giri;
	}

}

$smartphone_1 = new Smartphone("Iphone", "600€", "Apple", "Green");
$smartphone_2 = new Smartphone("Samsung A100", "580€", "Samsung", "Black");
$lavatrice_1 = new Lavatrice("Candy cs4", "299€", "5kg", "1000");
$lavatrice_2 = new Lavatrice("Lg F2W", "400€", "10kg", "1200")


?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Php oop 2</title>
</head>
<body>
   <h1>Prodotti</h1>

</body>
</html>




