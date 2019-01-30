<?php
  
  namespace StoreKata;
  
  use InvalidArgumentException;
  
  class ItemFactory
  {
    public function create(string $code): Item
    {
      switch ($code) {
        case Item::ITEM_TYPE_JACKET:
          return new JacketItem();
        case Item::ITEM_TYPE_TSHIRT:
          return new TShirtItem();
        case Item::ITEM_TYPE_TROUSER:
          return new TrouserItem();
        default:
          throw  new InvalidArgumentException('Invalid code provided');
      }
    }
  }