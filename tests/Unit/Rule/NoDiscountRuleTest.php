<?php
  
  namespace StoreKata\Tests\Unit\Rule;
  
  use StoreKata\ItemCollection;
  use StoreKata\Rule\NoDiscountRule;
  use PHPUnit\Framework\TestCase;
  
  class NoDiscountRuleTest extends TestCase
  {
    /** @test */
    public function canCalculateTotalPriceByItemType():void
    {
      $mockItemCollection = $this->createMock(ItemCollection::class);
      $sut = new NoDiscountRule();
      
      $this->assertSame(0.00, $sut->calculate($mockItemCollection));
    }
  }
