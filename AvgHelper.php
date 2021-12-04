<?php
include "SumHelper.php";
include "SquareSumDividedByTwo.php";


class AvgHelper{
private $arr=[];
private $sumHelper;
private $squareSum;
public function add($num)
    {
        $this->arr[]=$num;
    }
    public function __construct()
    {
        $this->sumHelper = new SumHelper;
        $this->squareSum = new SquareSumDividedByTwo;

    }

    public function getAvg()
    {
        $nums=$this->arr;
        $summ= $this->sumHelper->getSum($nums);
        $len=count($summ);
        return $summ/($len+1);

    }
    public function getMeanSquare(){
    $nums=$this->arr;
    return sqrt($this->squareSum->getSumSquare($nums));

    }

}
$example=new AvgHelper();
$example->add(2);
$example->add(4);
print_r($example);
//echo $example->getAvg();
echo $example->getMeanSquare();