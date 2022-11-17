<?php

namespace Com\Weimob\Cloud\Msg\Xiaoke;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,773
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface XiaokeNicheDeleteListener
{
    const topic = 'xiaoke_niche';
    const event = 'delete';
    const classType = DeleteMessage::class;
    const specType = 'xinyun';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class DeleteMessage implements \JsonSerializable
{
    /**
    * 删除的商机keys列表
    * @var array
    */
    private $nicheKeys;

    /**
    * 消息体创建时间
    * @var int
    */
    private $buildTime;

    /**
    * 操作用户wid
    * @var int
    */
    private $wid;

    /**
    * @param array $nicheKeys
    */
    public function setNicheKeys(?array $nicheKeys)
    {
        $this->nicheKeys = $nicheKeys;
    }

    /**
    * @return array
    */
    public function getNicheKeys(): ?array
    {
        return $this->nicheKeys;
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

