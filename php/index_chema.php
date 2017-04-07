<?php

//require('vendor/autoload.php');

$totalOrders = count($orders);
$freeOrders = 0;
$gbpOrders = 0;
$sumGBP = 0;
$sumOver100 = 0;
$essexOrders = 0;
$sumEssexGBP = 0;

function load_json($path) {
    return json_decode(file_get_contents(__DIR__.'/'.$path), true);
}

$orders = load_json('orders.json')['orders'];

foreach ($orders as $key => $value) {
	$currency = strtolower($value['currency']);
	$price = floatval($value['price']);
	$county = strtolower($value['customer']['shipping_address']['county']);

	if ($price <= 0) {
		$freeOrders++;
	}

	if (strcmp($currency, 'gbp') === 0) {
		$gbpOrders++;
		$sumGBP += $price;
		if ($price > 100) {
			$sumOver100 += $price;
		}
		if (strcmp($county, 'essex') === 0) {
			$sumEssexGBP += $price;
		}
	}
	
	if (strcmp($county, 'essex') === 0) {
		$essexOrders++;
	}

}

echo 'Total number of orders: ' . $totalOrders . '<br/>';
echo 'Number of orders that were free: ' . $freeOrders . '<br/>';
echo 'Number of orders placed in GBP: ' . $gbpOrders . '<br/>';
echo 'Sum of orders placed in GBP: £' . $sumGBP . '<br/>';
echo 'Sum of orders over £100 placed in GBP: £' . $sumOver100 . '<br/>';
echo 'Number of orders shipped to Essex: ' . $essexOrders . '<br/>';
echo 'Sum of orders placed in GBP that were shipped to Essex: £' . $sumEssexGBP . '<br/>';
