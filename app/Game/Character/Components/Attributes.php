<?php

namespace App\Game\Character\Components

class Attributes
{
	public $hp;
	public $sp;

	public $str;
	public $vit;
	public $dex;
	public $int;

	//Valor inicial para todos os atributos
	const min = 5;

	public function __construct()
	{
		$min = self::min;

		$this->str = $min;
		$this->vit = $min;
		$this->dex = $min;
		$this->int = $min;

		$this->hp = (object) ['max' => $this->vit * 5, 'current' => $this->vit * 5];
		$this->sp = (object) ['max' => $this->int * 5, 'current' => $this->int * 5];
	}

	public function hp($val)
	{
		return $this->hp->current += $val;
	}

	public function sp($val)
	{
		return $this->sp->current += $val;
	}

}