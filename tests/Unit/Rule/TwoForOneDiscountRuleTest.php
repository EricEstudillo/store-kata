<?php
  
  namespace StoreKata\Tests\Unit\Rule;
  
  use StoreKata\ItemCollection;
  use StoreKata\Rule\TwoForOneDiscountRule;
  use PHPUnit\Framework\TestCase;
  
  class TwoForOneDiscountRuleTest extends TestCase
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
      
      $mockItemCollection->expects($this->exactly(1))
        ->method('getItemPrice')
        ->willReturn(2.00);
      
      $sut = new TwoForOneDiscountRule();
      
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
          'totalExpected' => 2.00
        ],
        "three_item" => [
          'numberOfItems' => 3,
          'totalExpected' => 2.00
        ],
        "twentyfive_item" => [
          'numberOfItems' => 25,
          'totalExpected' => 24.00
        ],
      ];
    }
  }
