<?php
  
  namespace StoreKata;
  
  class TrouserItem implements Item
  {
    private const DEFAULT_CODE = Item::ITEM_TYPE_TROUSER;
    private const DEFAULT_NAME = 'Plain trouser';
    private const DEFAULT_PRICE = 35.00;
    
    public function getCode(): string
    {
      return static::DEFAULT_CODE;
    }
    
    public function getName(): string
    {
      return static::DEFAULT_NAME;
    }
    
    public function getPrice(): float
    {
      return static::DEFAULT_PRICE;
    }
  }