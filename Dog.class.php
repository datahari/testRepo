<?php

class Dog
{
	protected $age = 0;
	protected $name;

	public function __construct()
	{

	}

	public function setAge( $age )
	{
		$this->age = $age;
	}

	public function getAge()
	{
		return $this->age;
	}

	public function bark()
	{
		if( $this->age < 3 ) {
			return false;
		} else {
			return "BARK!";
		}
	}

	public function setName( $name )
	{
		$this->name = $name;
	}

	public function growOlder()
	{
		$this->age++;
	}

	public function getName()
	{
		return $this->name;
	}

}