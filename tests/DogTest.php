<?php

require("Dog.class.php");


class DogTest extends PHPUnit_Framework_TestCase
{
	public function testCanSetNameForDog()
	{
		$dog = new Dog();
		$dog->setName( "Doggy" );

		$this->assertEquals( "Doggy", $dog->getName() );
	}

	public function testDogCantBarkIfAgeUnder3()
	{
		$dog = new Dog();

		$this->assertFalse( $dog->bark() );

		$dog->setAge(2);

		$this->assertFalse( $dog->bark() );

		$dog->setAge(3);

		$this->assertEquals( "BARK!", $dog->bark() );

		$dog->setAge(4);

		$this->assertEquals( "BARK!", $dog->bark() );
	}

	public function testDogIsZeroYearsWhenBorn()
	{
		$dog = new Dog();
		$this->assertEquals( 0, $dog->getAge() );
	}

	public function testDogCanGrowOlder()
	{
		$dog = new Dog();
		$dog->setAge( 0 );
		$dog->growOlder();
		$this->assertEquals( 1, $dog->getAge() );
		$dog->growOlder();
		$this->assertEquals( 2, $dog->getAge() );
		$dog->growOlder();
		$this->assertEquals( 3, $dog->getAge() );
	}

	public function testDogHasBreedWhenCreated()
	{
		$dog = new Dog();
		$this->assertFalse( empty( $dog->getBreed() ) );
	}

	public function testBreedCanBeSetOnDogCreation()
	{
		$dog = new Dog( "Chihuahua" );
		$this->assertEquals( "Chihuahua", $dog->getBreed() );
	}

}
