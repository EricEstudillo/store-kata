<?php
  
  namespace StoreKata;
  
  class TShirtItem implements Item
  {
    private const DEFAULT_CODE = 'TSHIRT';
    private const DEFAULT_NAME = 'Black t-shirt';
    private const DEFAULT_PRICE = 20.00;
    
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