<?php

namespace Ekkinox\KataAnimals\Animals;

/**
 * @package Ekkinox\KataAnimals\Animals
 */
class Animal implements AnimalInterface
{
	/**
	 * @var string
	 */
	private $name;

	/**
	 * @var int
	 */
	private $numberOfLegs;

	/**
	 * @inheritdoc
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 *
	 * @return self
	 */
	public function setName(string $name): self
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * @inheritdoc
	 */
	public function getNumberOfLegs(): int
	{
		return $this->numberOfLegs;
	}

	/**
	 * @param int $numberOfLegs
	 *
	 * @return self
	 */
	public function setNumberOfLegs(int $numberOfLegs): self
	{
		$this->numberOfLegs = $numberOfLegs;

		return $this;
	}
}
