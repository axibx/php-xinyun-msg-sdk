<?php

namespace Com\Weimob\Cloud\Msg\Ec;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,902
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface EcMarketingUserBuyerShowCommentListener
{
    const topic = 'ec_marketing';
    const event = 'userBuyerShowComment';
    const classType = UserBuyerShowCommentMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UserBuyerShowCommentMessage implements \JsonSerializable
{
    /**
    * 微盟用户wid，客户唯一标识
    * @var int
    */
    private $wid;

    /**
    * 买家秀ID或专题文章ID
    * @var int
    */
    private $bizId;

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
    * @param int $bizId
    */
    public function setBizId(?int $bizId)
    {
        $this->bizId = $bizId;
    }

    /**
    * @return int
    */
    public function getBizId(): ?int
    {
        return $this->bizId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

