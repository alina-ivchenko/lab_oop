<?php

require_once('Worker.php');

class Calculate
{
	private $allSalary;
	public static function calc(array $team)
	{
		$allSalary = 0;
		if (isset($team)){
			foreach ($team as $worker){
				$allSalary += $worker->calcSalary();
			}
		}
		return $allSalary;
	}
}
