<?php

namespace ZeeCoder\Bundle\MobileDetectServiceBundle\Service;

class DetectionService
{

    public function __call($method, $args)
    {
        $MobileDetect = new \Mobile_Detect();
        return call_user_func_array(array($MobileDetect, $method), $args);
    }

}
