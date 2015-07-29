<?php

namespace App\Game\Character;

class Character
{
	//String
	public $name;

	//Status OBJ
	public $status;

	//Attribute OBJ
	public $attributes;

	//Inventory OBJ
	public $inventory;

	//Actions OBJ
	public $actions;

    public function __construct($name)
    {
    	$this->name = $name;

    	return "Personagem $name Criado.";
    }

}