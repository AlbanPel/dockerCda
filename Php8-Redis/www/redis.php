<?php
$redis = new \Redis();
$redis->connect('redis', 6379);
$redis->set('formation', 'HELLO LES CDA');
echo $redis->get('formation');
