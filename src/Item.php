<?php
  
  namespace StoreKata;

  interface Item
  {
    public const ITEM_TYPE_TROUSER = "TROUSER";
    public const ITEM_TYPE_TSHIRT = 'TSHIRT';
    public const ITEM_TYPE_JACKET = 'JACKET';
    
    public function getCode(): string;
    
    public function getName(): string;
    
    public function getPrice(): float;
  }