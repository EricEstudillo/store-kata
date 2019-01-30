<?php
  
  namespace StoreKata\Rule;
  
  use StoreKata\ItemCollection;
  
  class TwoForOneDiscountRule implements DiscountRule
  {
    public function calculate(ItemCollection $itemCollection): float
    {
      $numberOfItemsToDiscount = floor($itemCollection->count() / 2);
      return $numberOfItemsToDiscount * $itemCollection->getItemPrice();
    }
  }