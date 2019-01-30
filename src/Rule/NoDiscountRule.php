<?php
  
  namespace StoreKata\Rule;
  
  use StoreKata\ItemCollection;
  
  class NoDiscountRule implements DiscountRule
  {
    public function calculate(ItemCollection $itemCollection): float
    {
      return 0.00;
    }
  }