<?php

namespace Com\Weimob\Cloud\Msg\Hotel;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 490
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface HOTELGoodsOrderGoodsConsumedListener
{
    const topic = 'HOTEL_GoodsOrder';
    const event = 'goodsConsumed';
    const classType = GoodsConsumedMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class GoodsConsumedMessage implements \JsonSerializable
{
    /**
    * 凭证
    * @var string
    */
    private $snNo;

    /**
    * 核销门店
    * @var string
    */
    private $storeId;

    /**
    * 操作员
    * @var string
    */
    private $operator;

    /**
    * @param string $snNo
    */
    public function setSnNo(?string $snNo)
    {
        $this->snNo = $snNo;
    }

    /**
    * @return string
    */
    public function getSnNo(): ?string
    {
        return $this->snNo;
    }

    /**
    * @param string $storeId
    */
    public function setStoreId(?string $storeId)
    {
        $this->storeId = $storeId;
    }

    /**
    * @return string
    */
    public function getStoreId(): ?string
    {
        return $this->storeId;
    }

    /**
    * @param string $operator
    */
    public function setOperator(?string $operator)
    {
        $this->operator = $operator;
    }

    /**
    * @return string
    */
    public function getOperator(): ?string
    {
        return $this->operator;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

