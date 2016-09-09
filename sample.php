<?php

include 'json_helper.php';

// 普通数组
$val = array('a' => false, 'b' => true, 'c' => null, 'd'=> 0);
echo api_json_encode($val);
echo "\n";

// 对象
$val = (object)array('a' => false, 'b' => true, 'c' => null, 'd'=> 0);
echo api_json_encode($val);
echo "\n";

// 多维数组
$val = array(
	array('a' => false, 'b' => true, 'c' => null, 'd'=> 0),
	array('a' => false, 'b' => true, 'c' => null, 'd'=> 0),
	array('a' => false, 'b' => true, 'c' => array('a' => false, 'b' => true, 'c' => null, 'd'=> 0), 'd'=> 0),
);
echo api_json_encode($val);
echo "\n";

// 对象数组
$val = array(
	(object)array('a' => false, 'b' => true, 'c' => null, 'd'=> 0),
	(object)array('a' => false, 'b' => true, 'c' => null, 'd'=> 0),
	(object)array('a' => false, 'b' => true, 'c' => array('a' => false, 'b' => true, 'c' => null, 'd'=> 0), 'd'=> 0),
);
echo api_json_encode($val);

// jsonp
// GET request sample.php?callbak=sdfkjaslifuoasdkfjslkjg
$val = array('a' => false, 'b' => true, 'c' => null, 'd'=> 0);
echo api_jsonp_encode($val);