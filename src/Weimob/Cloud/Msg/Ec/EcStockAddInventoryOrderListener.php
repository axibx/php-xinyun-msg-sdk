<?php

namespace Com\Weimob\Cloud\Msg\Ec;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 591
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface EcStockAddInventoryOrderListener
{
    const topic = 'ec_stock';
    const event = 'add_inventory_order';
    const classType = AddInventoryOrderMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class AddInventoryOrderMessage implements \JsonSerializable
{
    /**
    * 单据Id
    * @var int
    */
    private $orderId;

    /**
    * 关联单据Id
    * @var int
    */
    private $referId;

    /**
    * 单据类型
    * @var int
    */
    private $inventoryType;

    /**
    * 单据类型
    * @var string
    */
    private $inventoryName;

    /**
    * @param int $orderId
    */
    public function setOrderId(?int $orderId)
    {
        $this->orderId = $orderId;
    }

    /**
    * @return int
    */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
    * @param int $referId
    */
    public function setReferId(?int $referId)
    {
        $this->referId = $referId;
    }

    /**
    * @return int
    */
    public function getReferId(): ?int
    {
        return $this->referId;
    }

    /**
    * @param int $inventoryType
    */
    public function setInventoryType(?int $inventoryType)
    {
        $this->inventoryType = $inventoryType;
    }

    /**
    * @return int
    */
    public function getInventoryType(): ?int
    {
        return $this->inventoryType;
    }

    /**
    * @param string $inventoryName
    */
    public function setInventoryName(?string $inventoryName)
    {
        $this->inventoryName = $inventoryName;
    }

    /**
    * @return string
    */
    public function getInventoryName(): ?string
    {
        return $this->inventoryName;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

