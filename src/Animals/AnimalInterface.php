<?php

namespace Ekkinox\KataAnimals\Animals;

/**
 * @package Ekkinox\KataAnimals\Animals
 */
interface AnimalInterface
{
    /**
     * @return string
     */
    public function getName(): string;

	/**
	 * @return int
	 */
	public function getNumberOfLegs(): int;
}
