<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getAppName() 获取应用名称。
 * @method void setAppName(string $AppName) 设置应用名称。
 * @method string getDomainName() 获取您的加速域名。
 * @method void setDomainName(string $DomainName) 设置您的加速域名。
 * @method string getStreamName() 获取流名称。
 * @method void setStreamName(string $StreamName) 设置流名称。
 * @method integer getDelayTime() 获取延播时间，单位：秒，上限：600秒。
 * @method void setDelayTime(integer $DelayTime) 设置延播时间，单位：秒，上限：600秒。
 */

/**
 *AddDelayLiveStream请求参数结构体
 */
class AddDelayLiveStreamRequest extends AbstractModel
{
    /**
     * @var string 应用名称。
     */
    public $AppName;

    /**
     * @var string 您的加速域名。
     */
    public $DomainName;

    /**
     * @var string 流名称。
     */
    public $StreamName;

    /**
     * @var integer 延播时间，单位：秒，上限：600秒。
     */
    public $DelayTime;
    /**
     * @param string $AppName 应用名称。
     * @param string $DomainName 您的加速域名。
     * @param string $StreamName 流名称。
     * @param integer $DelayTime 延播时间，单位：秒，上限：600秒。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }
    }
}
