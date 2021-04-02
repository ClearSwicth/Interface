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
class JiGuang implements ServiceVisitor
{
    /**
     * Date: 2021/4/2 2:44 下午
     * @param SendMessage $s
     * @return mixed|void
     * @author daikai
     */
    public function SendMsg(SendMessage $s)
    {
        echo '极光发送短信！', PHP_EOL;
    }

    /**
     * Date: 2021/4/2 2:44 下午
     * @param PushMessage $p
     * @return mixed|void
     * @author daikai
     */
    public function PushMsg(PushMessage $p)
    {
        echo '极光推送短信！', PHP_EOL;
    }
}