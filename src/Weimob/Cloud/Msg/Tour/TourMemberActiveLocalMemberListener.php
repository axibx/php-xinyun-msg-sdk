<?php

namespace Com\Weimob\Cloud\Msg\Tour;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,039
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface TourMemberActiveLocalMemberListener
{
    const topic = 'tour_member';
    const event = 'activeLocalMember';
    const classType = ActiveLocalMemberMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ActiveLocalMemberMessage implements \JsonSerializable
{
    /**
    * 会员卡类型,多张会员卡时填入
    * @var int
    */
    private $type;

    /**
    * 会员卡code
    * @var string
    */
    private $code;

    /**
    * 会员手机号
    * @var string
    */
    private $phone;

    /**
    * code,phone,wid必选其一填写
    * @var string
    */
    private $wid;

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
    * @param string $code
    */
    public function setCode(?string $code)
    {
        $this->code = $code;
    }

    /**
    * @return string
    */
    public function getCode(): ?string
    {
        return $this->code;
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
    * @param string $wid
    */
    public function setWid(?string $wid)
    {
        $this->wid = $wid;
    }

    /**
    * @return string
    */
    public function getWid(): ?string
    {
        return $this->wid;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

