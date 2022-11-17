<?php

namespace Com\Weimob\Cloud\Msg\Ec;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 478
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface EcRightsCreateRightsListener
{
    const topic = 'ec_rights';
    const event = 'createRights';
    const classType = CreateRightsMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CreateRightsMessage implements \JsonSerializable
{
    /**
    * 维权编号
    * @var int
    */
    private $rightsId;

    /**
    * 订单编号
    * @var int
    */
    private $orderNo;

    /**
    * 门店编号
    * @var int
    */
    private $storeId;

    /**
    * @param int $rightsId
    */
    public function setRightsId(?int $rightsId)
    {
        $this->rightsId = $rightsId;
    }

    /**
    * @return int
    */
    public function getRightsId(): ?int
    {
        return $this->rightsId;
    }

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

    /**
    * @param int $storeId
    */
    public function setStoreId(?int $storeId)
    {
        $this->storeId = $storeId;
    }

    /**
    * @return int
    */
    public function getStoreId(): ?int
    {
        return $this->storeId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

