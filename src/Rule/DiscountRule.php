<?php
  
  namespace StoreKata\Rule;
  
  use StoreKata\ItemCollection;
  
  interface DiscountRule
  {
    public function calculate(ItemCollection $itemCollection): float;
  }