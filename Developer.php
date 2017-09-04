<?php

require_once('Worker.php');

class Developer extends Worker
{
	function __construct(string $name, int $money, int $hour)
	{
		parent::__construct($name, $money, $hour);
	}
}
