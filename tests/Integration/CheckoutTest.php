<?php
  
  namespace StoreKata\Integration;
  
  use StoreKata\Checkout;
  use StoreKata\ItemFactory;
  use StoreKata\Rule\DiscountRuleFactory;
  use PHPUnit\Framework\TestCase;
  
  class CheckoutTest extends TestCase
  {
    
    /**
     * @test
     * @dataProvider dataProvider
     *
     * @param array $items
     * @param float $expectedTotal
     */
    public function checkoutCalcCorrectPrice(array $items, float $expectedTotal): void
    {
      $sut = new Checkout(
        new ItemFactory(),
        new DiscountRuleFactory()
      );
      
      array_walk($items, function (string $item) use ($sut) {
        $sut->scan($item);
      });
      
      $this->assertSame($expectedTotal, $sut->calc());
    }
    
    public function dataProvider(): array
    {
      return [
        'items_without_discount' => [
          'items' => [
            "TROUSER",
            "TSHIRT",
            "JACKET"
          ],
          'expectedTotal' => 105.00
        ],
        '2_trousers_included' => [
          'items' => [
            "TROUSER",
            "TSHIRT",
            "TROUSER"
          ],
          'expectedTotal' => 55.00
        ],
        '3_trousers_included' => [
          'items' => [
            "TROUSER",
            "TSHIRT",
            "TROUSER",
            "TROUSER"
          ],
          'expectedTotal' => 90.00
        ],
        '4_TSHIRTS_included' => [
          'items' => [
            "TSHIRT",
            "TSHIRT",
            "TSHIRT",
            "TROUSER",
            "TSHIRT",
          ],
          'expectedTotal' => 111.00
        ],
        '3_TSHIRTS_3_TROUSERS_included' => [
          'items' => [
            "TROUSER",
            "TSHIRT",
            "TROUSER",
            "TROUSER",
            "JACKET",
            "TSHIRT",
            "TSHIRT",
          ],
          'expectedTotal' => 177.00
        ]
      ];
    }
  }
