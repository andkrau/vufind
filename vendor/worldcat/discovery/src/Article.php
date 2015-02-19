<?php
// Copyright 2014 OCLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
// http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

namespace WorldCat\Discovery;

use \EasyRdf_Graph;
use \EasyRdf_Resource;
use \EasyRdf_Format;
use \EasyRdf_Namespace;
use \EasyRdf_TypeMapper;

/**
 * A class that represents an Article in WorldCat
 *
 */
class Article extends CreativeWork
{
    
    /**
     * @return EasyRDF_Literal
     */
    function getPageStart()
    {
        $pageStart = $this->get('schema:pageStart');
        return $pageStart;
    }
    
    /**
     * @return EasyRDF_Literal
     */
    function getPageEnd()
    {
        $pageEnd = $this->get('schema:pageEnd');
        return $pageEnd;
    }
    
    /**
     *
     * @return EasyRDF_Resource
     */
    function getSameAs()
    {
        $sameAs = $this->getResource('schema:sameAs');
        return $sameAs;
    }
}