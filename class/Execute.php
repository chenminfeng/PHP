<?php
/**
 * Created by PhpStorm.
 * User: chenminfeng
 * Date: 2016/7/25
 * Time: 15:57
 */
include './NBA.php';
include './Team.php';

$nba = new NBA();

$cavalier = new Team();
$james = "James";
$cavalier->setSmallForward($james);
$cavalier->setPointGuard('irving');
$cavalier->setShootingGuard('smith');
$cavalier->setPowerForward('love');
$cavalier->setCenter('thompson');

$nba->setTeamFromEast($cavalier);
$nba->setMvp($cavalier->getSmallForward());

var_dump($nba);