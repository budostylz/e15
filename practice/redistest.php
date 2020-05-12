<?php
	//create redis instance
    $redis = new Redis();
	//connect with server and port
    $redis->connect('localhost', 6379);
	//set value
    $redis->set('website2', 'redis is up');
	//get value
    $website = $redis->get('website2');
	//print www.phpflow.com
	echo $website;

