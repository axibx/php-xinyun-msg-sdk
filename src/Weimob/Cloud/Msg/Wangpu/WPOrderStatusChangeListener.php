<?php

namespace Com\Weimob\Cloud\Msg\Wangpu;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,294
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface WPOrderStatusChangeListener
{
    const topic = 'WP_order';
    const event = 'statusChange';
    const classType = StatusChangeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class StatusChangeMessage implements \JsonSerializable
{
    /**
    * 订单编号
    * @var string
    */
    private $order_no;

    /**
    * @param string $order_no
    */
    public function setOrderNo(?string $order_no)
    {
        $this->order_no = $order_no;
    }

    /**
    * @return string
    */
    public function getOrderNo(): ?string
    {
        return $this->order_no;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

