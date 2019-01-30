<?php
  
  namespace StoreKata\Tests\Unit\Rule;
  
  use StoreKata\ItemCollection;
  use StoreKata\Rule\BulkDiscountRule;
  use PHPUnit\Framework\TestCase;
  
  class BulkDiscountRuleTest extends TestCase
  {
    
    /**
     * @test
     * @dataProvider dataProvider
     * @param int $numberOfItems
     * @param float $totalExpected
     */
    public function canCalculateTotalPriceByItemType(int $numberOfItems, float $totalExpected): void
    {
      $mockItemCollection = $this->createMock(ItemCollection::class);
      $mockItemCollection->expects($this->exactly(1))
        ->method('count')
        ->willReturn($numberOfItems);
      
      $sut = new BulkDiscountRule();
      
      $this->assertSame($totalExpected, $sut->calculate($mockItemCollection));
    }
    
    public function dataProvider(): array
    {
      return [
        "one_item" => [
          'numberOfItems' => 1,
          'totalExpected' => 0.00
        ],
        "two_item" => [
          'numberOfItems' => 2,
          'totalExpected' => 0.00
        ],
        "three_item" => [
          'numberOfItems' => 3,
          'totalExpected' => 3.00
        ],
        "twentyfive_item" => [
          'numberOfItems' => 25,
          'totalExpected' => 25.00
        ],
      ];
    }
  }
