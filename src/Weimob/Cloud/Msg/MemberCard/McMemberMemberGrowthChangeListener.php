<?php

namespace Com\Weimob\Cloud\Msg\MemberCard;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 626
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface McMemberMemberGrowthChangeListener
{
    const topic = 'mc_member';
    const event = 'memberGrowthChange';
    const classType = MemberGrowthChangeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class MemberGrowthChangeMessage implements \JsonSerializable
{
    /**
    * 店铺pid
    * @var int
    */
    private $pid;

    /**
    * 会员唯一标识
    * @var int
    */
    private $wid;

    /**
    * 系统来源
    * @var int
    */
    private $source;

    /**
    * 会员卡号
    * @var string
    */
    private $memberCode;

    /**
    * 变更时间
    * @var int
    */
    private $changeTime;

    /**
    * 变更原因
    * @var string
    */
    private $changeReason;

    /**
    * 变更成长值
    * @var string
    */
    private $changeGrowth;

    /**
    * 会员卡类型
    * @var int
    */
    private $type;

    /**
    * 变更类型。0-成长值；1-等级。
    * @var int
    */
    private $changeType;

    /**
    * @param int $pid
    */
    public function setPid(?int $pid)
    {
        $this->pid = $pid;
    }

    /**
    * @return int
    */
    public function getPid(): ?int
    {
        return $this->pid;
    }

    /**
    * @param int $wid
    */
    public function setWid(?int $wid)
    {
        $this->wid = $wid;
    }

    /**
    * @return int
    */
    public function getWid(): ?int
    {
        return $this->wid;
    }

    /**
    * @param int $source
    */
    public function setSource(?int $source)
    {
        $this->source = $source;
    }

    /**
    * @return int
    */
    public function getSource(): ?int
    {
        return $this->source;
    }

    /**
    * @param string $memberCode
    */
    public function setMemberCode(?string $memberCode)
    {
        $this->memberCode = $memberCode;
    }

    /**
    * @return string
    */
    public function getMemberCode(): ?string
    {
        return $this->memberCode;
    }

    /**
    * @param int $changeTime
    */
    public function setChangeTime(?int $changeTime)
    {
        $this->changeTime = $changeTime;
    }

    /**
    * @return int
    */
    public function getChangeTime(): ?int
    {
        return $this->changeTime;
    }

    /**
    * @param string $changeReason
    */
    public function setChangeReason(?string $changeReason)
    {
        $this->changeReason = $changeReason;
    }

    /**
    * @return string
    */
    public function getChangeReason(): ?string
    {
        return $this->changeReason;
    }

    /**
    * @param string $changeGrowth
    */
    public function setChangeGrowth(?string $changeGrowth)
    {
        $this->changeGrowth = $changeGrowth;
    }

    /**
    * @return string
    */
    public function getChangeGrowth(): ?string
    {
        return $this->changeGrowth;
    }

    /**
    * @param int $type
    */
    public function setType(?int $type)
    {
        $this->type = $type;
    }

    /**
    * @return int
    */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
    * @param int $changeType
    */
    public function setChangeType(?int $changeType)
    {
        $this->changeType = $changeType;
    }

    /**
    * @return int
    */
    public function getChangeType(): ?int
    {
        return $this->changeType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

