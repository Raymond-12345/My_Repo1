<?php

class calculas{
    public  $num1;
    public  $num2;
    public  $result;

    function sum(){
        $this->num1;
        $this->num2;
        $this->result = $this->num1 + $this->num2;
        echo $this->result."<br>";
    }

    function sub(){
        $this->num1;
        $this->num2;
        $this->result = $this->num1 - $this->num2;
        echo $this->result."<br>";
    }
    function multi(){
        $this->num1;
        $this->num2;
        $this->result = $this->num1 * $this->num2;
        echo $this->result."<br>";
    }
    function divide(){
        $this->num1;
        $this->num2;
        $this->result = $this->num1 / $this->num2;
        echo $this->result;
    }
}
$c1 = new calculas();
$c1->num1 = 5;
$c1->num2 = 5;
$c1->sum();
$c1->sub();
$c1->multi();
$c1->divide();
?>

