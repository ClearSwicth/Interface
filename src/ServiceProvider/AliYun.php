<?php
/**
 *
 * User: daikai
 * Date: 2021/4/2
 */
namespace ClearSwitch\Interfaces\ServiceProvider;
use ClearSwitch\Interfaces\ServiceVisitor;
use ClearSwitch\Interfaces\Message\PushMessage;
use ClearSwitch\Interfaces\Message\SendMessage;
class AliYun implements ServiceVisitor
{
    /**
     * Date: 2021/4/2 2:43 下午
     * @param SendMessage $s
     * @return mixed|void
     * @author daikai
     */
    public function SendMsg(SendMessage $s)
    {
        echo '阿里云发送短信！', PHP_EOL;
    }

    /**
     * Date: 2021/4/2 2:43 下午
     * @param PushMessage $p
     * @return mixed|void
     * @author daikai
     */
    public function PushMsg(PushMessage $p)
    {
        echo '阿里云推送信息！', PHP_EOL;
    }
}