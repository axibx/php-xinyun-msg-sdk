<?php

namespace Com\Weimob\Cloud\Msg\MemberCard;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,473
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface McMemberMemberCardStartOrExpireListener
{
    const topic = 'mc_member';
    const event = 'memberCardStartOrExpire';
    const classType = MemberCardStartOrExpireMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class MemberCardStartOrExpireMessage implements \JsonSerializable
{
    /**
    * 会员卡模板id
    * @var int
    */
    private $memberCardTemplateId;

    /**
    * 用户wid
    * @var int
    */
    private $wid;

    /**
    * 类型：枚举：1,2,3,4
    * @var int
    */
    private $type;

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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

