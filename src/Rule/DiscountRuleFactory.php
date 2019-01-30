<?php
  
  namespace StoreKata\Rule;
  
  use StoreKata\Item;
  
  class DiscountRuleFactory
  {
    public function create(string $itemCode): DiscountRule
    {
      switch ($itemCode) {
        case Item::ITEM_TYPE_TROUSER:
          return new TwoForOneDiscountRule();
        case Item::ITEM_TYPE_TSHIRT:
          return new BulkDiscountRule();
        default:
          return new NoDiscountRule();
      }
    }
  }