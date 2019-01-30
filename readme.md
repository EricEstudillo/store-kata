# Store kata

##### Products

``` 
Code         | Name                |  Price
-------------------------------------------------
TROUSER      | Plain trouser      |   35.00€
TSHIRT       | Black t-shirt      |   20.00€
JACKET       | Winter jacket      |   50.00€
```

Discount rules:

 * 2-for-1 promotion (buy two of the same product, get one free), applied to `TROUSER` items.

 * Discounts on bulk purchases (buying x or more of a product, the price of that product is reduced),  if you buy 3 or more `TSHIRT` items, the price per unit should be 19.00€.

Checkout process allows for items to be scanned in any order, and should return the total amount to be paid. Interface in Pseudo-code:

```
co = Checkout.new(pricing_rules)
co.scan("TROUSER")
co.scan("TROUSER")
co.scan("TSHIRT")
price = co.total
```

Examples:

```
Items: TROUSER, TSHIRT, JACKET
Total: 105.00€

Items: TROUSER, TSHIRT, VOUCHER
Total: 55.00€

Items: TSHIRT, TSHIRT, TSHIRT, TROUSER, TSHIRT
Total: 90.00€

Items: TROUSER, TSHIRT, VOUCHER, VOUCHER, JACKET, TSHIRT, TSHIRT
Total: 111.00€
```
