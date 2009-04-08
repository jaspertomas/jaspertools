<?php
/*
convenience class to display dates nicely
*/

class MyDecimal
{
  /*
  Usage:
    echo MyDateTime::fromdatetime("2003-10-10 20:12:13");
    echo MyDateTime::frommysql("2003-10-10");
    echo MyDateTime::today();
    echo new MyDateTime(2001,2,3,4,5,6);

  */
  public $amount=0;
  function __construct($amount) { $this->amount=$amount; } 
  function __toString(){return number_format($this->amount,2,".",",");}
  static function format($amount)
  {
    $amount=str_replace(",","",$amount);
    return number_format($amount,2,".",",");
  }
}
