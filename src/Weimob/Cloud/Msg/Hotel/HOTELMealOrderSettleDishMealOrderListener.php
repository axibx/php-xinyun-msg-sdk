<?php

namespace Com\Weimob\Cloud\Msg\Hotel;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,706
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface HOTELMealOrderSettleDishMealOrderListener
{
    const topic = 'HOTEL_MealOrder';
    const event = 'settleDishMealOrder';
    const classType = SettleDishMealOrderMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class SettleDishMealOrderMessage implements \JsonSerializable
{
    /**
    * 订单号
    * @var string
    */
    private $orderNo;

    /**
    * 桌号
    * @var string
    */
    private $tableNumber;

    /**
    * 就餐人数
    * @var string
    */
    private $mealPeopleNum;

    /**
    * 备注
    * @var string
    */
    private $mealRemark;

    /**
    * 门店编号
    * @var string
    */
    private $storeId;

    /**
    * @param string $orderNo
    */
    public function setOrderNo(?string $orderNo)
    {
        $this->orderNo = $orderNo;
    }

    /**
    * @return string
    */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
    * @param string $tableNumber
    */
    public function setTableNumber(?string $tableNumber)
    {
        $this->tableNumber = $tableNumber;
    }

    /**
    * @return string
    */
    public function getTableNumber(): ?string
    {
        return $this->tableNumber;
    }

    /**
    * @param string $mealPeopleNum
    */
    public function setMealPeopleNum(?string $mealPeopleNum)
    {
        $this->mealPeopleNum = $mealPeopleNum;
    }

    /**
    * @return string
    */
    public function getMealPeopleNum(): ?string
    {
        return $this->mealPeopleNum;
    }

    /**
    * @param string $mealRemark
    */
    public function setMealRemark(?string $mealRemark)
    {
        $this->mealRemark = $mealRemark;
    }

    /**
    * @return string
    */
    public function getMealRemark(): ?string
    {
        return $this->mealRemark;
    }

    /**
    * @param string $storeId
    */
    public function setStoreId(?string $storeId)
    {
        $this->storeId = $storeId;
    }

    /**
    * @return string
    */
    public function getStoreId(): ?string
    {
        return $this->storeId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

