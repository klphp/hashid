### 安装

```php
composer require "klphp/hashid" v1.0
```



### 使用方法

```php
$model=new \Kl\Hashid\Hashid();

//盐值
//$model->salt=123456;       
//生成最小长度，默认5
//$model->minHashLength=5;   
//由哪些字符组成的密码
//$model->alphabet='abcdefghijklmnopqrstuvwxyz1234567890';   

$sid=$model->encode(1);
var_dump('sid:'.$sid);
$id=$model->decode('abc');
var_dump('id:'.$id);
```

