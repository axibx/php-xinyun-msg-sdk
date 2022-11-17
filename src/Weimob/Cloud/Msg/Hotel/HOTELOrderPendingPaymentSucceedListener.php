<?php

namespace Com\Weimob\Cloud\Msg\Hotel;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,293
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface HOTELOrderPendingPaymentSucceedListener
{
    const topic = 'HOTEL_OrderPending';
    const event = 'paymentSucceed';
    const classType = PaymentSucceedMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class PaymentSucceedMessage implements \JsonSerializable
{
    /**
    * 接入方传入的订单标识
    * @var string
    */
    private $orderNo;

    /**
    * 支付金额
    * @var float
    */
    private $paymentAmount;

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

    /**
    * @param float $paymentAmount
    */
    public function setPaymentAmount(?float $paymentAmount)
    {
        $this->paymentAmount = $paymentAmount;
    }

    /**
    * @return float
    */
    public function getPaymentAmount(): ?float
    {
        return $this->paymentAmount;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

