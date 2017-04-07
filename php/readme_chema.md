1. In written English, briefly describe how you would:

- count the total number of orders
using php function 'count' to count all elements in the array

- count the number of orders that were free
using a counter to increment (+1) when floatval(price_value) is less or equal to 0

- count the number of orders placed in "GBP"
using a counter to increment (+1) when strtolowercase(currency_value) is 'gbp'

- sum the orders placed in "GBP"
using a variable to accumulate price values when strtolowercase(currency_value) is 'gbp'

- sum the orders placed in "GBP" that were over "£100"
using a variable to accumulate price values when strtolowercase(currency_value) is 'gbp' and floatval(price_value) > 100

- count the number of orders that shipped to the county "Essex"
using a counter to increment (+1) when 'county' field (strtolowercase) in the element customer.shipping_address is 'essex'

- sum the orders that were shipped to the county "Essex" that were paid for in "GBP"
using a variable to accumulate price values when strtolowercase(county_value) is 'essex' and strtolowercase(currency_value) is 'gbp'
