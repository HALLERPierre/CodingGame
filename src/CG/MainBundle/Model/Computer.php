<?php
namespace CG\MainBundle\Model;

abstract class Computer
{
	protected $id;
	protected $name;
	protected $user;



	public function __toString()
	{
		return $name;
	}

}
