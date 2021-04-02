<?php
/**
 *
 * User: daikai
 * Date: 2021/4/2
 */
namespace ClearSwitch\Interfaces\message;
use ClearSwitch\Interfaces\ServiceVisitor;
class PushMessage implements Message
{
    /**
     * Date: 2021/4/2 2:31 下午
     * @param ServiceVisitor $v
     * @return mixed|void
     * @author daikai
   */
    public function Msg(ServiceVisitor $v)
    {
        echo '推送脚本启动：';
        $v->PushMsg($this);
    }
}