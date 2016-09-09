# json_helper.php

API接口专用json编码辅助函数，兼容iOS：替换null为""，节约流量：不转义中文、斜杠，支持jsonp的自动输出

## 范例 (Sample)

```php
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
```

## 输出结果 (Result)

```
{"a":false,"b":true,"c":"","d":0}
{"a":false,"b":true,"c":"","d":0}
[{"a":false,"b":true,"c":"","d":0},{"a":false,"b":true,"c":"","d":0},{"a":false,"b":true,"c":{"a":false,"b":true,"c":"","d":0},"d":0}]
[{"a":false,"b":true,"c":"","d":0},{"a":false,"b":true,"c":"","d":0},{"a":false,"b":true,"c":{"a":false,"b":true,"c":"","d":0},"d":0}]
sdfkjaslifuoasdkfjslkjg({"a":false,"b":true,"c":"","d":0})
```