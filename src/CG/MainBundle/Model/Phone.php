<?php
namespace CG\MainBundle\Model;

abstract class Phone
{
	protected $id;
	protected $number;
	protected $user;


	public function __toString()
	{
		return 'hi';
	}

}
