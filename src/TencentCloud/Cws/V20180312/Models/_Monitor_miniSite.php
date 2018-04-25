<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cws\V20180312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getSiteId() 获取站点ID。
 * @method void setSiteId(integer $siteId) 设置站点ID。
 * @method string getUrl() 获取站点Url。
 * @method void setUrl(string $url) 设置站点Url。
 */

/**
 *监控任务中的站点信息。
 */
class _Monitor_miniSite extends AbstractModel
{
    /**
     * @var integer 站点ID。
     */
    public $siteId;

    /**
     * @var string 站点Url。
     */
    public $url;
    /**
     * @param integer $siteId 站点ID。
     * @param string $url 站点Url。
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
        if (array_key_exists("SiteId",$param) and $param["SiteId"] !== null) {
            $this->siteId = $param["SiteId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->url = $param["Url"];
        }
    }
}