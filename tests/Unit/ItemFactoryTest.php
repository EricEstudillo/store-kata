<?php
  
  namespace StoreKata\Tests\Unit;
  
  use StoreKata\Item;
  use StoreKata\ItemFactory;
  use StoreKata\TrouserItem;
  use StoreKata\TShirtItem;
  use StoreKata\JacketItem;
  use InvalidArgumentException;
  use PHPUnit\Framework\TestCase;
  
  class ItemFactoryTest extends TestCase
  {
    /** @var ItemFactory */
    private $sut;
    
    public function setUp()
    {
      $this->sut = new ItemFactory();
    }
    
    /**
     * @test
     */
    public function canCreateAValidJacketItem(): void
    {
      $this->assertInstanceOf(JacketItem::class, $this->sut->create(Item::ITEM_TYPE_JACKET));
    }
    
    /**
     * @test
     */
    public function canCreateAValidTShirtItem(): void
    {
      $this->assertInstanceOf(TShirtItem::class, $this->sut->create(Item::ITEM_TYPE_TSHIRT));
    }
    
    /**
     * @test
     */
    public function canCreateAValidTrouserItem(): void
    {
      $this->assertInstanceOf(TrouserItem::class, $this->sut->create(Item::ITEM_TYPE_TROUSER));
    }
    
    /**
     * @test
     */
    public function cannotCreateAnInvalidItem(): void
    {
      $this->expectException(InvalidArgumentException::class);
      $this->sut->create('Invalid item');
    }
  }
