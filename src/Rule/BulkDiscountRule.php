<?php
  
  namespace StoreKata\Rule;
  
  use StoreKata\ItemCollection;

  class BulkDiscountRule implements DiscountRule
  {
    private const MIN_NUM_ITEMS_FOR_DISCOUNT = 3;
    private const DISCOUNT_PER_ITEM = 1.00;
    
    public function calculate(ItemCollection $itemCollection): float
    {
      $numOfItems = $itemCollection->count();
      if ($numOfItems >= static::MIN_NUM_ITEMS_FOR_DISCOUNT) {
        return $numOfItems * static::DISCOUNT_PER_ITEM;
      }
      return 0.00;
    }
  }