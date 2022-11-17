<?php

namespace Com\Weimob\Cloud\Msg\Hotel;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 534
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface HOTELRoomAddBookRoomOrderListener
{
    const topic = 'HOTEL_Room';
    const event = 'addBookRoomOrder';
    const classType = AddBookRoomOrderMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class AddBookRoomOrderMessage implements \JsonSerializable
{
    /**
    * 订单号
    * @var string
    */
    private $orderNo;

    /**
    * pid
    * @var string
    */
    private $pid;

    /**
    * 门店ID
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
    * @param string $pid
    */
    public function setPid(?string $pid)
    {
        $this->pid = $pid;
    }

    /**
    * @return string
    */
    public function getPid(): ?string
    {
        return $this->pid;
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

