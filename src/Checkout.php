<?php
  
  namespace StoreKata;
  
  use StoreKata\Rule\DiscountRuleFactory;
  
  class Checkout
  {
    /** @var ItemFactory */
    private $factory;
    /** @var array */
    private $items;
    /** @var DiscountRuleFactory */
    private $discountRuleFactory;
    
    public function __construct(ItemFactory $factory, DiscountRuleFactory $discountRuleFactory)
    {
      $this->factory = $factory;
      $this->discountRuleFactory = $discountRuleFactory;
    }
    
    public function scan(string $code): void
    {
      $item = $this->factory->create($code);
      
      if (!isset($this->items[$code])) {
        $this->items[$code] = ItemCollection::create();
      }
      
      $this->items[$code]->add($item);
    }
    
    public function calc(): float
    {
      $total = 0.00;
      foreach ($this->items as $itemCode => $itemCollection) {
        $total += $this->calculateTotalPriceByItemType($itemCode, $itemCollection);
      }
      return $total;
    }
    
    private function calculateTotalPriceByItemType(string $itemCode, ItemCollection $itemCollection): float
    {
      $discountRule = $this->discountRuleFactory->create($itemCode);
      $discount = $discountRule->calculate($itemCollection);
      $total = $itemCollection->count() * $itemCollection->getItemPrice();
      return $total - $discount;
    }
  }