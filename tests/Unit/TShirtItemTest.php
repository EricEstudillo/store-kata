<?php
  
  namespace StoreKata\Tests\Unit;
  
  use StoreKata\Item;
  use StoreKata\TShirtItem;
  use PHPUnit\Framework\TestCase;
  
  class TShirtItemTest extends TestCase
  {
    
    /**
     * @test
     */
    public function canCreateAValidItem(): void
    {
      $sut = new TShirtItem;
      
      $this->assertInstanceOf(TShirtItem::class, $sut);
      $this->assertInstanceOf(Item::class, $sut);
    }
  }
