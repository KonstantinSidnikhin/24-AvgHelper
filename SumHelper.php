<?php


class SumHelper
{
    public function getSum($arr){
        $sum=0;
        foreach ($arr as $elem){
            $sum+=$elem;
        }
        return $sum;
    }

}