<?php
  
  namespace StoreKata\Tests\Unit\Rule;
  
  use StoreKata\Item;
  use StoreKata\Rule\BulkDiscountRule;
  use StoreKata\Rule\DiscountRuleFactory;
  use StoreKata\Rule\NoDiscountRule;
  use StoreKata\Rule\TwoForOneDiscountRule;
  use PHPUnit\Framework\TestCase;
  
  class DiscountRuleFactoryTest extends TestCase
  {
    /** @var DiscountRuleFactory */
    private $sut;
    
    public function setUp()
    {
      $this->sut = new DiscountRuleFactory();
    }
    
    /**
     * @test
     */
    public function canCreateAValidTwoForOneDiscountRule(): void
    {
      $this->assertInstanceOf(TwoForOneDiscountRule::class, $this->sut->create(Item::ITEM_TYPE_TROUSER));
    }
    
    /**
     * @test
     */
    public function canCreateAValidBulkDiscountRule(): void
    {
      $this->assertInstanceOf(BulkDiscountRule::class, $this->sut->create(Item::ITEM_TYPE_TSHIRT));
    }
    
    /**
     * @test
     */
    public function canCreateAValidNoDiscountRule(): void
    {
      $this->assertInstanceOf(NoDiscountRule::class, $this->sut->create(Item::ITEM_TYPE_JACKET));
    }
  }
