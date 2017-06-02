<?php

namespace Ekkinox\KataAnimals;

use Ekkinox\KataAnimals\Animals\AnimalInterface;

/**
 * @package Ekkinox\KataAnimals
 */
class Sorter
{
	/**
	 * @param AnimalInterface[] $animals
	 *
	 * @return AnimalInterface[]
	 */
	public function sort(array $animals): array
	{
		usort($animals, function (AnimalInterface $a, AnimalInterface $b): int
			{
				if ($a->getNumberOfLegs() == $b->getNumberOfLegs())
				{
					return $a->getName() <=> $b->getName();
				}

				return $a->getNumberOfLegs() <=> $b->getNumberOfLegs();
			}
		);

		return $animals;
	}
}
