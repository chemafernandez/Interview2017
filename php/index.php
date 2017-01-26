<?php

require('vendor/autoload.php');

function load_json($path) {
    return json_decode(file_get_contents(__DIR__.'/'.$path), true);
}

$orders = load_json('orders.json')['orders'];
