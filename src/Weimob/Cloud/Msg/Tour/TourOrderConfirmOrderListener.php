<?php

namespace Com\Weimob\Cloud\Msg\Tour;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,035
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface TourOrderConfirmOrderListener
{
    const topic = 'tour_order';
    const event = 'confirmOrder';
    const classType = ConfirmOrderMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ConfirmOrderMessage implements \JsonSerializable
{
    /**
    * 订单编号
    * @var string
    */
    private $orderNo;

    /**
    * @param string $orderNo
    */
    public function setOrderNo(?string $orderNo)
    {
        $this->orderNo = $orderNo;
    }

    /**
    * @return string
    */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

