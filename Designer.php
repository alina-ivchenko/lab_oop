<?php

require_once('Worker.php');

class Designer extends Worker
{
	function __construct(string $name, int $money, int $hour)
	{
		parent::__construct($name, $money, $hour);
	}
}
