<?php

namespace Com\Weimob\Cloud\Msg\Xiaoke;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 2,686
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface XiaokeOrderNullityListener
{
    const topic = 'xiaoke_order';
    const event = 'nullity';
    const classType = NullityMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class NullityMessage implements \JsonSerializable
{
    /**
    * 订单号
    * @var array
    */
    private $orderNumberList;

    /**
    * 作废原因
    * @var string
    */
    private $causeOfAbandonment;

    /**
    * 作废原因编码
    * @var string
    */
    private $causeOfAbandonmentCode;

    /**
    * 最后操作人
    * @var int
    */
    private $lastUpdateUserWid;

    /**
    * 最后操作时间
    * @var int
    */
    private $lastUpdateTime;

    /**
    * @param array $orderNumberList
    */
    public function setOrderNumberList(?array $orderNumberList)
    {
        $this->orderNumberList = $orderNumberList;
    }

    /**
    * @return array
    */
    public function getOrderNumberList(): ?array
    {
        return $this->orderNumberList;
    }

    /**
    * @param string $causeOfAbandonment
    */
    public function setCauseOfAbandonment(?string $causeOfAbandonment)
    {
        $this->causeOfAbandonment = $causeOfAbandonment;
    }

    /**
    * @return string
    */
    public function getCauseOfAbandonment(): ?string
    {
        return $this->causeOfAbandonment;
    }

    /**
    * @param string $causeOfAbandonmentCode
    */
    public function setCauseOfAbandonmentCode(?string $causeOfAbandonmentCode)
    {
        $this->causeOfAbandonmentCode = $causeOfAbandonmentCode;
    }

    /**
    * @return string
    */
    public function getCauseOfAbandonmentCode(): ?string
    {
        return $this->causeOfAbandonmentCode;
    }

    /**
    * @param int $lastUpdateUserWid
    */
    public function setLastUpdateUserWid(?int $lastUpdateUserWid)
    {
        $this->lastUpdateUserWid = $lastUpdateUserWid;
    }

    /**
    * @return int
    */
    public function getLastUpdateUserWid(): ?int
    {
        return $this->lastUpdateUserWid;
    }

    /**
    * @param int $lastUpdateTime
    */
    public function setLastUpdateTime(?int $lastUpdateTime)
    {
        $this->lastUpdateTime = $lastUpdateTime;
    }

    /**
    * @return int
    */
    public function getLastUpdateTime(): ?int
    {
        return $this->lastUpdateTime;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

