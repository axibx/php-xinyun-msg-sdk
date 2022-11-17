<?php

namespace Com\Weimob\Cloud\Msg\O2o;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,053
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface O2oServicesGoodsVerifyListener
{
    const topic = 'o2o_services_goods';
    const event = 'verify';
    const classType = VerifyMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class VerifyMessage implements \JsonSerializable
{
    /**
    * 卡code
    * @var string
    */
    private $cardNo;

    /**
    * 核销人wid
    * @var int
    */
    private $verifierId;

    /**
    * 核销时间
    * @var int
    */
    private $verifyTime;

    /**
    * 核销序列号
    * @var string
    */
    private $serialNo;

    /**
    * 门店ID
    * @var int
    */
    private $storeId;

    /**
    * @param string $cardNo
    */
    public function setCardNo(?string $cardNo)
    {
        $this->cardNo = $cardNo;
    }

    /**
    * @return string
    */
    public function getCardNo(): ?string
    {
        return $this->cardNo;
    }

    /**
    * @param int $verifierId
    */
    public function setVerifierId(?int $verifierId)
    {
        $this->verifierId = $verifierId;
    }

    /**
    * @return int
    */
    public function getVerifierId(): ?int
    {
        return $this->verifierId;
    }

    /**
    * @param int $verifyTime
    */
    public function setVerifyTime(?int $verifyTime)
    {
        $this->verifyTime = $verifyTime;
    }

    /**
    * @return int
    */
    public function getVerifyTime(): ?int
    {
        return $this->verifyTime;
    }

    /**
    * @param string $serialNo
    */
    public function setSerialNo(?string $serialNo)
    {
        $this->serialNo = $serialNo;
    }

    /**
    * @return string
    */
    public function getSerialNo(): ?string
    {
        return $this->serialNo;
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

