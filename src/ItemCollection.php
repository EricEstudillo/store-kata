<?php
  
  namespace StoreKata;
  
  use Countable;
  
  class ItemCollection implements Countable
  {
    /** @var array */
    private $items;
    
    private function __construct()
    {
    }
    
    public static function create(): ItemCollection
    {
      return new ItemCollection();
    }
    
    public function add(Item $item): void
    {
      $this->items[] = $item;
    }
    
    public function getItemPrice(): float
    {
      return $this->current()->getPrice();
    }
    
    public function count(): int
    {
      return count($this->items);
    }
    
    private function current(): Item
    {
      return current($this->items);
    }
  }