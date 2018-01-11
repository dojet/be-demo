<?php
use Mod\Kafka\ModuleKafka;
use Mod\Kafka\MKafka;

include dirname(__FILE__).'/script_init.php';

Dojet::addModule(__DIR__.'/../../mod-kafka');

ModuleKafka::setZookeeper(array('host' => '172.17.0.4:2181', 'timeout' => 60));

MKafka::produce('test', 'abc');
$ret = MKafka::send();
var_dump($ret);
