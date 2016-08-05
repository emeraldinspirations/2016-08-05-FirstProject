<?php

class test {
  
  private $_NumberA;
  private $_NumberB;
  
  public function __construct($vNumberA, $vNumberB) {
    $this->_NumberA = $vNumberA;
    $this->_NumberB = $vNumberB;
  }
  
  public function getSum() {
    return $this->_NumberA + $this->_NumberB;
  }
  
}
