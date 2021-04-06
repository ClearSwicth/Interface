#php 设置模式之访问者模式


## 创建新的请求实例
```php
use ClearSwitch\Interfaces\ObjectStructure;
use ClearSwitch\Interfaces\Message\PushMessage;
use ClearSwitch\Interfaces\Message\SendMessage;
use ClearSwitch\Interfaces\ServiceProvider\AliYun;
use ClearSwitch\Interfaces\ServiceProvider\JiGuang;
$o = new ObjectStructure();
$o->Attach(new PushMessage());
$o->Attach(new SendMessage());

$v1 = new AliYun();
$v2 = new JiGuang();

$o->Accept($v1);
$o->Accept($v2);
```
