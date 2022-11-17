<?php

namespace Com\Weimob\Cloud\Msg\O2o;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,428
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface O2oBaseOrderPayChangeListener
{
    const topic = 'o2o_base_order';
    const event = 'payChange';
    const classType = PayChangeMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class PayChangeMessage implements \JsonSerializable
{
    /**
    * 业务请求参数
    * @var O2oBaseOrderPayChangeParams
    */
    private $params;

    /**
    * @param O2oBaseOrderPayChangeParams $params
    */
    public function setParams(?O2oBaseOrderPayChangeParams $params)
    {
        $this->params = $params;
    }

    /**
    * @return O2oBaseOrderPayChangeParams
    */
    public function getParams(): ?O2oBaseOrderPayChangeParams
    {
        return $this->params;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class O2oBaseOrderPayChangeParams implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

