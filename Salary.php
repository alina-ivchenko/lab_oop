<?php

abstract class Salary
{
	protected $money;
	public function __construct(int $money)
	{
		$this->money = $money;
	}

	protected abstract function calcSalary(): int;
}
