<?php

namespace Com\Weimob\Cloud\Msg\Ec;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 548
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface EcPricePriceUpdateListener
{
    const topic = 'ec_price';
    const event = 'price_update';
    const classType = PriceUpdateMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class PriceUpdateMessage implements \JsonSerializable
{
    /**
    * 商品id
    * @var int
    */
    private $goodsIdList;

    /**
    * 门店id
    * @var int
    */
    private $storeId;

    /**
    * @param int $goodsIdList
    */
    public function setGoodsIdList(?int $goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }

    /**
    * @return int
    */
    public function getGoodsIdList(): ?int
    {
        return $this->goodsIdList;
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

