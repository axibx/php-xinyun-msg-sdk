<?php

namespace Com\Weimob\Cloud\Msg\Xiaoke;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 2,683
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface XiaokeOrderCreateListener
{
    const topic = 'xiaoke_order';
    const event = 'create';
    const classType = CreateMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CreateMessage implements \JsonSerializable
{
    /**
    * 业务字段
    * @var array
    */
    private $list;

    /**
    * 订单意向产品
    * @var array
    */
    private $products;

    /**
    * 操作时间,时间戳
    * @var int
    */
    private $buildTime;

    /**
    * 操作用户wid
    * @var int
    */
    private $wid;

    /**
    * @param array $list
    */
    public function setList(?array $list)
    {
        $this->list = $list;
    }

    /**
    * @return array
    */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
    * @param array $products
    */
    public function setProducts(?array $products)
    {
        $this->products = $products;
    }

    /**
    * @return array
    */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
    * @param int $buildTime
    */
    public function setBuildTime(?int $buildTime)
    {
        $this->buildTime = $buildTime;
    }

    /**
    * @return int
    */
    public function getBuildTime(): ?int
    {
        return $this->buildTime;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

