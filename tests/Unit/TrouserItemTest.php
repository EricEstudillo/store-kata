<?php
  
  namespace StoreKata\Tests\Unit;
  
  use StoreKata\Item;
  use StoreKata\TrouserItem;
  use PHPUnit\Framework\TestCase;
  
  class TrouserItemTest extends TestCase
  {
    
    /**
     * @test
     */
    public function canCreateAValidItem(): void
    {
      $sut = new TrouserItem;
      
      $this->assertInstanceOf(TrouserItem::class, $sut);
      $this->assertInstanceOf(Item::class, $sut);
    }
  }
