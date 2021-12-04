<?php
include "SumHelper.php";


class AvgHelper{
private $arr=[];
private $sumHelper;
public function add($num)
    {
        $this->arr[]=$num;
    }
    public function __construct()
    {
        $this->sumHelper = new SumHelper;
    }


    public function getAvg()
    {
        $nums=$this->arr;
        $summ= $this->sumHelper->getSum($nums);
        $len=count($summ);
        return $summ/($len+1);

    }

}
$example=new AvgHelper();
$example->add(2);
$example->add(4);
print_r($example);
echo $example->getAvg();