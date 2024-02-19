<?php

//  Crie uma classe Terreno que tenha os atributos:
// • Frente
// • Lateral
// • Preço por metro quadrado


// • Sua classe deve ter os métodos setFrente, setLateral e e setPreco, a função do método set é inserir o valor no atributo. Cada método deve seguir a regra:
// • Se o valor informado for negativo, deve ser inserido 0 no lugar
// • A classe também deve ter 3 métodos:
// • perimetro() que deve retornar o total de perímetro do terreno (a soma de todos os lados)
// • area() que deve retornar o total de área do terreno em metros quadrados (lado x lado)
// • precoVenda() que deve considerar o preço total do terreno (total de área em metros
// quadrados multiplicado pelo preço do metro quadrado

class Terreno
{
	private $frente;
	private $lateral;
	private $precoM2;


	public function __construct($valorFrente, $valorLateral, $valorM2)
	{
		$this->setFrente($valorFrente);
		$this->setLateral($valorLateral);
		$this->setValorM2($valorM2);
	}
	
	public function setFrente($valorFrente)
	{
		if($valorFrente < 0)
		{
			$this->frente = 0;
		} else{
			$this->frente = $valorFrente;
		}
	}
	
	public function getFrente()
	{
		return $this->frente;
	}
	
	public function setLateral($valorLateral)
	{
		if($valorLateral < 0)
		{
			$this->lateral = 0;
		} else{
			$this->lateral = $valorLateral;
		}
	}
	
	public function getLateral()
	{
		return $this->lateral;
	}
	
	public function setValorM2($valorM2)
	{
		if($valorM2 < 0)
		{
			$this->precoM2 = 0;
		} else {
			$this->precoM2 = $valorM2;
		}
	}
	
	public function getValorM2()
	{
		return $this->precoM2;
	}
	
	public function perimetro()
	{
		return ($this->frente * 2) + ($this->lateral * 2);
	}
	
	public function area()
	{
		return $this->frente * $this->lateral;
	}
	
	public function precoVenda()
	{
		return $this->area() * $this->precoM2;
	}

}

$terreno1 = new Terreno (10, 30, 350);
echo "A frente do terreno é {$terreno1->getFrente()} metros.<br>";
echo "A lateral do terreno é {$terreno1->getLateral()} metros<br>";
echo "O preço do metro quadrado é {$terreno1->getValorM2()} reais <br>";
echo "O perimetro do terreno é {$terreno1->perimetro()} metros <br>";
echo "A area do terreno é {$terreno1->area()} metros <br>";
echo "O valor total do metro quadrado é {$terreno1->precoVenda()} reais <br>";
?>