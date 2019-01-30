<?php
  
  namespace StoreKata;
  
  class JacketItem implements Item
  {
    private const DEFAULT_CODE = Item::ITEM_TYPE_JACKET;
    private const DEFAULT_NAME = 'Winter jacket';
    private const DEFAULT_PRICE = 50.00;
    
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