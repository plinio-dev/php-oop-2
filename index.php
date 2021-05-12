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

   public function __construct(string $_marca, string $_colore)
	{
		$this->marca = $_marca;
		$this->colore = $_colore;
	}

}

class Lavatrice extends Prodotto {
   //attributi
   public $caricoMax;
   public $giri;

   public function __construct(string $_caricoMax, string $_giri, )
	{
		$this->caricoMax = $_caricoMax;
		$this->giri = $_giri;
	}

}

