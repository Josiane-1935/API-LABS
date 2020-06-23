<?php

namespace src\Domain\Customer;



class Basic extends Customer {
  public function getMonthlyFee() : float {
    return 5.0;
  }
  public function getAmountToBorrow() : int {
    return 3;
  }
  public function getType () : string {
    return 'Basic';
  }
}
