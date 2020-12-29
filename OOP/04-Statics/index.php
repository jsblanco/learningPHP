<?php
require_once 'conf.php';

StaticConf::setColor('#fff');
StaticConf::setEnvironment('localhost');
StaticConf::setNewsletter(true);

echo StaticConf::$color.'<br>';

$conf = new StaticConf();
$conf::setColor('#000');

echo StaticConf::getColor().'<br>';
var_dump($conf);