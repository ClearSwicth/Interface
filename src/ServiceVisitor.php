<?php
namespace ClearSwitch\Interfaces;
/**
 * Interface ServiceVisitor
 * @package test
 */
use ClearSwitch\Interfaces\Message\PushMessage;
use ClearSwitch\Interfaces\Message\SendMessage;
interface ServiceVisitor
{
    /**
     * Date: 2021/4/2 2:40 下午
     * @param SendMessage $s
     * @return mixed
     * @author daikai
     */
    public function SendMsg(SendMessage $s);

    /**
     * Date: 2021/4/2 2:40 下午
     * @param PushMessage $p
     * @return mixed
     * @author daikai
     */
    public function PushMsg(PushMessage $p);
}