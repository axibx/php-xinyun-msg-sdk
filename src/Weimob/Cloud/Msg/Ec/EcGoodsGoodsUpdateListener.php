<?php

namespace Com\Weimob\Cloud\Msg\Ec;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,324
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface EcGoodsGoodsUpdateListener
{
    const topic = 'ec_goods';
    const event = 'goodsUpdate';
    const classType = GoodsUpdateMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class GoodsUpdateMessage implements \JsonSerializable
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

