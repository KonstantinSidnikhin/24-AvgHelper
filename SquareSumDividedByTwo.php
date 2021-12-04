<?php


class SquareSumDividedByTwo
{
    public function getSumSquare($ar){
        $sum=0;
        foreach ($ar as $elem){
            $sum+=$elem*$elem;
        }
        $len=count($ar)+1;
        return $sum/$len;
    }

}