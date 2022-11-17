<?php

namespace Com\Weimob\Cloud\Msg\Ec;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,705
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface CcCouponExpireCouponListener
{
    const topic = 'cc_coupon';
    const event = 'expireCoupon';
    const classType = ExpireCouponMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ExpireCouponMessage implements \JsonSerializable
{
    /**
    * 用户唯一标识
    * @var int
    */
    private $wid;

    /**
    * 券code
    * @var string
    */
    private $code;

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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

