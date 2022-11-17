<?php

namespace Com\Weimob\Cloud\Msg\O2o;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 190
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface O2oStoreGoodsGoodsUpdateListener
{
    const topic = 'o2o_store_goods';
    const event = 'goodsUpdate';
    const classType = GoodsUpdateMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class GoodsUpdateMessage implements \JsonSerializable
{
    /**
    * 菜品Id
    * @var string
    */
    private $goodsId;

    /**
    * 门店Id
    * @var int
    */
    private $storeId;

    /**
    * 菜品第三方编码
    * @var string
    */
    private $thirdGoodsId;

    /**
    * @param string $goodsId
    */
    public function setGoodsId(?string $goodsId)
    {
        $this->goodsId = $goodsId;
    }

    /**
    * @return string
    */
    public function getGoodsId(): ?string
    {
        return $this->goodsId;
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

    /**
    * @param string $thirdGoodsId
    */
    public function setThirdGoodsId(?string $thirdGoodsId)
    {
        $this->thirdGoodsId = $thirdGoodsId;
    }

    /**
    * @return string
    */
    public function getThirdGoodsId(): ?string
    {
        return $this->thirdGoodsId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

