<?php

namespace Caijinlong\EasySwooleLib\lib;
trait Model
{
    //是否只返回SQL 而不执行
    public $fetch_sql = false;

    public function fetchSql($fetch = true)
    {
        $this->fetch_sql = $fetch;
        return $this;
    }


}