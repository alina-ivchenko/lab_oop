<?php

require_once('Calculate.php');
require_once('Team.php');
require_once('Salary.php');
require_once('MonthSalary.php');
require_once('Worker.php');
require_once('Developer.php');
require_once('Designer.php');
require_once('Pagemaker.php');

$team = new Team();
$team->addWorker(new Designer('John', 3000, 0));
$team->addWorker(new Developer('Mike', 10, 60));
$team->addWorker(new Developer('Sarah', 1000, 0));
$team->addWorker(new Developer('Alex', 1000, 0));
$team->addWorker(new Pagemaker('Jessica', 5, 120));
echo Calculate::calc($team->getTeam());
