<?php
/**
 *
 * User: daikai
 * Date: 2021/4/2
 */

namespace ClearSwitch\Interfaces\message;
use ClearSwitch\Interfaces\Message;
use ClearSwitch\Interfaces\ServiceVisitor;
class SendMessage implements Message
{
    /**
     * Date: 2021/4/2 2:33 下午
     * @param ServiceVisitor $v
     * @return mixed|void
     * @author daikai
     */
    public function Msg(ServiceVisitor $v)
    {
        echo '短信脚本启动：';
        $v->SendMsg($this);
    }
}