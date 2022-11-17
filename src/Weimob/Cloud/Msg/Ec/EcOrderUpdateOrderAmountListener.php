<?php

namespace Com\Weimob\Cloud\Msg\Ec;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,444
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface EcOrderUpdateOrderAmountListener
{
    const topic = 'ec_order';
    const event = 'updateOrderAmount';
    const classType = UpdateOrderAmountMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UpdateOrderAmountMessage implements \JsonSerializable
{
    /**
    * 消息体-订单号
    * @var int
    */
    private $orderNo;

    /**
    * @param int $orderNo
    */
    public function setOrderNo(?int $orderNo)
    {
        $this->orderNo = $orderNo;
    }

    /**
    * @return int
    */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

