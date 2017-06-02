<?php

namespace Ekkinox\KataBooks\Test\Unit;

use Ekkinox\KataAnimals\Animals\Animal;
use Ekkinox\KataAnimals\Animals\AnimalInterface;
use Ekkinox\KataAnimals\Sorter;
use PHPUnit\Framework\TestCase;

/**
 * @package Ekkinox\KataBooks\Test\Model
 */
class StubTest extends TestCase
{
    /**
     * @var Sorter
     */
    private $subject;

    /**
     * @inheritdoc
     */
    public function setUp()
    {
        parent::setUp();

        $this->subject = new Sorter();
    }

	/**
	 * @covers \Ekkinox\KataAnimals\Sorter
	 */
	public function testSort()
	{
		$animalSortedDefinitions = [
			['name' => 'bacteria', 'numberOfLegs' => 0],
			['name' => 'bacteria', 'numberOfLegs' => 0],
			['name' => 'fish', 'numberOfLegs' => 0],
			['name' => 'cat', 'numberOfLegs' => 4],
			['name' => 'cat', 'numberOfLegs' => 4],
			['name' => 'dog', 'numberOfLegs' => 4],
			['name' => 'horse', 'numberOfLegs' => 4],
			['name' => 'spider', 'numberOfLegs' => 8],
		];

		$i = 0;
		foreach ($this->subject->sort($this->generateAnimals()) as $animal)
		{
			$this->assertEquals(
				$animalSortedDefinitions[$i]['name'],
				$animal->getName()
			);
			$this->assertEquals(
				$animalSortedDefinitions[$i]['numberOfLegs'],
				$animal->getNumberOfLegs()
			);
			++$i;
		}
	}

	/**
	 * @return AnimalInterface[]
	 */
    private function generateAnimals(): array
    {
	    $animalDefinitions = [
		    ['name' => 'cat', 'numberOfLegs' => 4],
		    ['name' => 'spider', 'numberOfLegs' => 8],
		    ['name' => 'fish', 'numberOfLegs' => 0],
		    ['name' => 'bacteria', 'numberOfLegs' => 0],
		    ['name' => 'dog', 'numberOfLegs' => 4],
		    ['name' => 'cat', 'numberOfLegs' => 4],
		    ['name' => 'horse', 'numberOfLegs' => 4],
		    ['name' => 'bacteria', 'numberOfLegs' => 0],
	    ];

		$animals = [];

		foreach ($animalDefinitions as $animalDefinition)
		{
			$animal = new Animal();

			$animals[] = $animal
				->setName($animalDefinition['name'])
				->setNumberOfLegs($animalDefinition['numberOfLegs']);
		}

		return $animals;
    }

}