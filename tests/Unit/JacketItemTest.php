<?php
  
  namespace StoreKata\Tests\Unit;
  
  use StoreKata\Item;
  use StoreKata\JacketItem;
  use PHPUnit\Framework\TestCase;
  
  class JacketItemTest extends TestCase
  {
    
    /**
     * @test
     */
    public function canCreateAValidItem():void
    {
      $sut = new JacketItem;
      
      $this->assertInstanceOf(JacketItem::class, $sut);
      $this->assertInstanceOf(Item::class, $sut);
    }
  }
