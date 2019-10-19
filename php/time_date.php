<?php

//打印上个月最后一天的当前时间
echo date_default_timezone_get(); //UTC
date_default_timezone_set('PRC');
$time = strtotime(date('Y-m-01 H:i:s'));
echo date('Y-m-d H:i:s',strtotime('-1 day',$time));