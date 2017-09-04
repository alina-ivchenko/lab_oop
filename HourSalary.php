<?php

require_once('Salary.php');

class HourSalary extends Salary
{
	private $hour;
	function __construct(int $money, int $hour)
	{
		parent::__construct($money);
		$this->hour = $hour;
	}

	public function calcSalary(): int
	{
		return $this->money*$this->hour;
	}
}
