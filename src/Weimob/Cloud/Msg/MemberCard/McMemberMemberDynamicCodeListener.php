<?php

namespace Com\Weimob\Cloud\Msg\MemberCard;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,555
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface McMemberMemberDynamicCodeListener
{
    const topic = 'mc_member';
    const event = 'memberDynamicCode';
    const classType = MemberDynamicCodeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class MemberDynamicCodeMessage implements \JsonSerializable
{
    /**
    * 商户pid
    * @var int
    */
    private $pid;

    /**
    * 用户wid
    * @var int
    */
    private $wid;

    /**
    * 卡模板id
    * @var int
    */
    private $memberCardTemplateId;

    /**
    * 用户手机号
    * @var string
    */
    private $phone;

    /**
    * 动态码
    * @var string
    */
    private $dynamicCode;

    /**
    * 过期时间
    * @var int
    */
    private $expireTime;

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
    * @param int $memberCardTemplateId
    */
    public function setMemberCardTemplateId(?int $memberCardTemplateId)
    {
        $this->memberCardTemplateId = $memberCardTemplateId;
    }

    /**
    * @return int
    */
    public function getMemberCardTemplateId(): ?int
    {
        return $this->memberCardTemplateId;
    }

    /**
    * @param string $phone
    */
    public function setPhone(?string $phone)
    {
        $this->phone = $phone;
    }

    /**
    * @return string
    */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
    * @param string $dynamicCode
    */
    public function setDynamicCode(?string $dynamicCode)
    {
        $this->dynamicCode = $dynamicCode;
    }

    /**
    * @return string
    */
    public function getDynamicCode(): ?string
    {
        return $this->dynamicCode;
    }

    /**
    * @param int $expireTime
    */
    public function setExpireTime(?int $expireTime)
    {
        $this->expireTime = $expireTime;
    }

    /**
    * @return int
    */
    public function getExpireTime(): ?int
    {
        return $this->expireTime;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

