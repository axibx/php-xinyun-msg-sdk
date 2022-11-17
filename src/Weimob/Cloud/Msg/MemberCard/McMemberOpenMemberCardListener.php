<?php

namespace Com\Weimob\Cloud\Msg\MemberCard;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 622
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface McMemberOpenMemberCardListener
{
    const topic = 'mc_member';
    const event = 'openMemberCard';
    const classType = OpenMemberCardMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class OpenMemberCardMessage implements \JsonSerializable
{
    /**
    * public_account_id（pid）：商户店铺id（新云）
    * @var int
    */
    private $pid;

    /**
    * 微盟用户wid，客户唯一标识
    * @var int
    */
    private $wid;

    /**
    * 会员卡号
    * @var string
    */
    private $memberCode;

    /**
    * 会员卡类型（0-通用卡）
    * @var int
    */
    private $type;

    /**
    * 开卡门店（智慧零售）
    * @var int
    */
    private $storeId;

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

