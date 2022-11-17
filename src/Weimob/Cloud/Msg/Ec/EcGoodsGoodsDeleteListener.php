<?php

namespace Com\Weimob\Cloud\Msg\Ec;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,273
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface EcGoodsGoodsDeleteListener
{
    const topic = 'ec_goods';
    const event = 'goodsDelete';
    const classType = GoodsDeleteMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class GoodsDeleteMessage implements \JsonSerializable
{
    /**
    * 商品id
    * @var string
    */
    private $goodsIdList;

    /**
    * @param string $goodsIdList
    */
    public function setGoodsIdList(?string $goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }

    /**
    * @return string
    */
    public function getGoodsIdList(): ?string
    {
        return $this->goodsIdList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

