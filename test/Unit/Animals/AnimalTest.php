<?php

namespace Ekkinox\KataBooks\Test\Unit\Animals;

use Ekkinox\KataAnimals\Animals\Animal;
use PHPUnit\Framework\TestCase;

/**
 * @package Ekkinox\KataBooks\Test\Model
 */
class StubTest extends TestCase
{
    /**
     * @var Animal
     */
    private $subject;

    /**
     * @inheritdoc
     */
    public function setUp()
    {
        parent::setUp();

        $this->subject = new Animal();
    }

	/**
	 * @covers \Ekkinox\KataAnimals\Animals\Animal
	 */
	public function testName()
	{
		$data = 'name';

		$this->subject->setName($data);

		$this->assertEquals($data, $this->subject->getName());
	}

	/**
	 * @covers \Ekkinox\KataAnimals\Animals\Animal
	 */
	public function testNumberOfLegs()
	{
		$data = 4;

		$this->subject->setNumberOfLegs($data);

		$this->assertEquals($data, $this->subject->getNumberOfLegs());
	}
}