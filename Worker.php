<?php

require_once('MonthSalary.php');
require_once('HourSalary.php');

abstract class Worker
{
	protected $name;
	//protected $salary;
	protected $money;
	protected $hour;

	public function __construct(string $name, int $money, int $hour)
	{
		$this->name = $name;
		$this->money = $money;
		$this->hour = $hour;
	}

	public function calcSalary(): int
	{
		if ($this->hour === 0){
			$salary = new MonthSalary($this->money);
		} else {
			$salary = new HourSalary($this->money, $this->hour);
		}
		return $salary->calcSalary();
	}
}
