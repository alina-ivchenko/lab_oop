<?php

require_once('Salary.php');

class MonthSalary extends Salary
{
	function __construct(int $money)
	{
		parent::__construct($money);
	}

	public function calcSalary(): int
	{
		return $this->money;
	}
}
