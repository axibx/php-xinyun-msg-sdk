<?php

namespace Com\Weimob\Cloud\Msg\Wangpu;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,267
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface WPReturnOrderStatusChangeListener
{
    const topic = 'WP_returnOrder';
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
    * 维权单编号
    * @var string
    */
    private $return_order_no;

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

    /**
    * @param string $return_order_no
    */
    public function setReturnOrderNo(?string $return_order_no)
    {
        $this->return_order_no = $return_order_no;
    }

    /**
    * @return string
    */
    public function getReturnOrderNo(): ?string
    {
        return $this->return_order_no;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

