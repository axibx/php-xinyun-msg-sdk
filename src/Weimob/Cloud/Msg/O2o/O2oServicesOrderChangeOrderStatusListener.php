<?php

namespace Com\Weimob\Cloud\Msg\O2o;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,059
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface O2oServicesOrderChangeOrderStatusListener
{
    const topic = 'o2o_services_order';
    const event = 'changeOrderStatus';
    const classType = ChangeOrderStatusMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ChangeOrderStatusMessage implements \JsonSerializable
{
    /**
    * 订单号
    * @var string
    */
    private $orderNo;

    /**
    * 订单类型：41=服务项目
    * @var int
    */
    private $orderType;

    /**
    * 下单时间
    * @var int
    */
    private $orderTime;

    /**
    * 订单状态，1：已确认；2：已完成；3：已取消；4：已拒绝；5：已作废；6：申请退款；17：同意退款；18：拒绝退款
    * @var int
    */
    private $orderStatus;

    /**
    * 支付状态 0 未支付 1 已支付 2 已退款 3 退款中 4 退款失败 5 申请退款 6 拒绝退款
    * @var int
    */
    private $payStatus;

    /**
    * 门店ID
    * @var int
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
    * @param int $orderType
    */
    public function setOrderType(?int $orderType)
    {
        $this->orderType = $orderType;
    }

    /**
    * @return int
    */
    public function getOrderType(): ?int
    {
        return $this->orderType;
    }

    /**
    * @param int $orderTime
    */
    public function setOrderTime(?int $orderTime)
    {
        $this->orderTime = $orderTime;
    }

    /**
    * @return int
    */
    public function getOrderTime(): ?int
    {
        return $this->orderTime;
    }

    /**
    * @param int $orderStatus
    */
    public function setOrderStatus(?int $orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    /**
    * @return int
    */
    public function getOrderStatus(): ?int
    {
        return $this->orderStatus;
    }

    /**
    * @param int $payStatus
    */
    public function setPayStatus(?int $payStatus)
    {
        $this->payStatus = $payStatus;
    }

    /**
    * @return int
    */
    public function getPayStatus(): ?int
    {
        return $this->payStatus;
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

